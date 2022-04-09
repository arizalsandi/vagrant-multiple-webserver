#!/bin/bash

PASS="{fill with your own password}"
USER="{fill with your own user}"
DB="{fill with your own database}"

# Install depedencies
sudo apt-get update
sudo apt-get install apache2 php php-mysql -y
sudo apt-get install unzip

# Setting MySQL root user w/o password 
sudo debconf-set-selections <<< 'mysql-server mysql-server/root_password password'
sudo debconf-set-selections <<< 'mysql-server mysql-server/root_password_again password'
sudo apt-get -y install mysql-server

# Create new  and grant privileges using root
sudo mysql -uroot <<MYSQL_SCRIPT
CREATE USER '$USER'@'localhost' IDENTIFIED BY '$PASS';
GRANT ALL PRIVILEGES ON *.* TO '$USER'@'localhost';
FLUSH PRIVILEGES;
MYSQL_SCRIPT

#Create database using new user
sudo mysql -u$USER -p$PASS<<MYSQL_SCRIPT
CREATE DATABASE $DB;
MYSQL_SCRIPT

# Downloading the packages and put on /var/www/html
cd /tmp
git clone https://github.com/arizalsandi/sosial-media.git
sudo rm /var/www/html/index.html
sudo mv sosial-media/* /var/www/html

# Dump the database to your database
cd /var/www/html/
sudo mysql -u$USER -p$PASS $DB < dump.sql