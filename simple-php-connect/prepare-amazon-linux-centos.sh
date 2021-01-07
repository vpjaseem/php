#!/bin/bash
# Amazon Linux /CentOS
sudo yum update -y
sudo yum install httpd -y
sudo amazon-linux-extras install php7.4 -y
sudo chmod 777 /$home/var/www/html/
sudo service httpd start
sudo chkconfig httpd on
