# Server Setup for WordPress 

# Login to Server
  sudo apt update
  sudo apt upgrade -y
# Download and install MysqlDB
  wget https://dev.mysql.com/get/mysql-apt-config_0.8.12-1_all.deb
  sudo dpkg -i mysql-apt-config_0.8.12-1_all.deb
  sudo apt update
  sudo apt-key adv --keyserver keyserver.ubuntu.com --recv-keys 467B942D3A79BD29
  sudo apt update
  sudo apt-cache policy mysql-server
  sudo apt install -f mysql-client=5.7* mysql-community-server=5.7* mysql-server=5.7*
  

# Install Nginx  
  sudo apt install nginx -y


# Changing th port configuration and login configuration of SSH service   
  nano /etc/ssh/sshd_config
  service sshd restart
  
# Installing php v7.4
  sudo apt install software-properties-common
  sudo add-apt-repository ppa:ondrej/php -y
  sudo apt install php7.4
  apt purge apache*
  sudo apt update
  sudo apt install php7.4-{cli,common,curl,zip,gd,mysql,xml,mbstring,json,intl}
  apt install php7.4 fpm
  apt install php7.4-fpm
  
# Setup the mysql server  
  mysql -u root -p
  mysql -u app -p

# Installing the wordpress server  
  cd /tmp
  curl -s https://api.wordpress.org/secret-key/1.1/salt/
  sudo nano wordpress/wp-config.php
  nano /etc/nginx/sites-available/default 
  service nginx restart


# install the Let's encrypt ssl certificate
  sudo apt install certbot python3-certbot-nginx
  sudo certbot --nginx -d wordpress.binbash.website


# Setup Firewall configuration 
  ufw status
  ufw app list
  ufw allow "Nginx Full"
  ufw allow in 33000/tcp
  ufw enable
  


# Create a main.yml file in github
   .github/workflows/main.yml 




# Setup action Runner on a server  


# Adding SSH keys

