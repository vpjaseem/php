#!/bin/bash
#Ubuntu
sudo apt-get install apache2
sudo apt-get install php
sudo apt-get install php-mysql
sudo phpenmod mysqli
sudo service apache2 restart
sudo systemctl restart apache2
sudo systemctl enable apache2
sudo chmod a+rwx /var/www/html
