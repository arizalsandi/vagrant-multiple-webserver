#!/bin/bash
PASS="1234567890"
USER="wordpress"
DB="wordpress"

# Install depedencies
sudo apt-get update
sudo apt-get install apache2 php php-mysql -y
sudo apt install php-curl php-gd php-mbstring php-xml php-xmlrpc php-soap php-intl php-zip -y
sudo apt-get install unzip -y

# Restart System Apache
sudo systemctl restart apache2

# Setting MySQL root user w/o password 
sudo debconf-set-selections <<< 'mysql-server mysql-server/root_password password'
sudo debconf-set-selections <<< 'mysql-server mysql-server/root_password_again password'
sudo apt-get -y install mysql-server

# Create Database & User Wordpress
sudo mysql -uroot <<MYSQL_SCRIPT
CREATE DATABASE wordpress DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
CREATE USER '$USER'@'localhost' IDENTIFIED BY '$PASS';
GRANT ALL PRIVILEGES ON *.* TO '$USER'@'localhost';
FLUSH PRIVILEGES;
MYSQL_SCRIPT

# Download Wordpress & Put on /var/www/html
sudo rm /var/www/html/index.html
cd /tmp
curl -O https://wordpress.org/latest.tar.gz
tar xzvf latest.tar.gz
touch /tmp/wordpress/.htaccess
cp /tmp/wordpress/wp-config-sample.php /tmp/wordpress/wp-config.php
sudo cp -a /tmp/wordpress/. /var/www/html

# Add my wp-config from /vagrant or localfile to replace default wp-config.php on /var/www/html
sudo rm /var/www/html/wp-config.php
cd /vagrant
sudo cp wp-config.php /var/www/html

# Configuration Wordpress Directory
sudo chown -R www-data:www-data /var/www/html
sudo find /var/www/html/ -type d -exec chmod 750 {} \;
sudo find /var/www/html/ -type f -exec chmod 640 {} \;

# Restart service apache
systemctl restart apache2
