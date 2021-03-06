#!/bin/bash

# Install depedencies
sudo apt-get update -y
sudo apt-get install apache2 php -y
sudo apt-get install git -y

# Clone from repository
cd /tmp
git clone https://github.com/arizalsandi/landingpage.git

# Copy from git local repo to /var/www/html
sudo rm /var/www/html/index.html
cd landingpage
sudo cp -r ./* /var/www/html/
