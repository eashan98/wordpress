# Automated Deployment of WordPress Website on Nginx using GitHub Actions on AWS Clouds


# Login to Server
  ssh -i "private-key" -p "port-number" ubuntu@"IP"
  sudo apt update
  sudo apt upgrade -y
  ![image](https://github.com/eashan98/wordpress/assets/145854811/f3036018-8eef-40d9-af2a-1c4b8d58fd3d)

  
  
# Download and install MysqlDB
  wget https://dev.mysql.com/get/mysql-apt-config_0.8.12-1_all.deb
  sudo dpkg -i mysql-apt-config_0.8.12-1_all.deb
  sudo apt update
  sudo apt-key adv --keyserver keyserver.ubuntu.com --recv-keys 467B942D3A79BD29
  sudo apt update
  sudo apt-cache policy mysql-server
  sudo apt install -f mysql-client=5.7* mysql-community-server=5.7* mysql-server=5.7*
  

# Install Nginx & Creating Nginx config file
  sudo apt install nginx -y
  nano /etc/nginx/sites/available/default
  ![image](https://github.com/eashan98/wordpress/assets/145854811/bbacfbe0-8eda-4653-83e8-30398dc48f65)


# Changing the port configuration and login configuration of the SSH service
  nano /etc/ssh/sshd_config
  service sshd restart
  ![image](https://github.com/eashan98/wordpress/assets/145854811/f0740fff-3656-4e1b-aa3e-642bbd902407)

  
  
# Installing php v7.4
  sudo apt install software-properties-common
  sudo add-apt-repository ppa:ondrej/php -y
  sudo apt install php7.4
  sudo apt update
  sudo apt install php7.4-{cli,common,curl,zip,gd,mysql,xml,mbstring,json,intl}
  apt install php7.4-fpm
  ![image](https://github.com/eashan98/wordpress/assets/145854811/f4dfd1ae-64cb-4bb2-8b04-29394dc09543)

  
# Setup the mysql server
  mysql -u root -p
  mysql -u app -p
  

# Installing the wordpress server
  cd /tmp
  curl -s https://api.wordpress.org/secret-key/1.1/salt/
  sudo nano wordpress/wp-config.php
  nano /etc/nginx/sites-available/default 
  service nginx restart
  
  ![image](https://github.com/eashan98/wordpress/assets/145854811/43108b81-3b4e-49c4-aad7-d5d66c0650ff)

  


# install the Let's encrypt ssl certificate
  sudo apt install certbot python3-certbot-nginx
  sudo certbot --nginx -d demo.binbash.website


# Setup Firewall configuration
  ufw status
  ufw app list
  ufw allow "Nginx Full"
  ufw allow in 33000/tcp
  ufw enable
  


# Create a main.yml file in GitHub
   .github/workflows/main.yml 

 ![image](https://github.com/eashan98/wordpress/assets/145854811/ddb172fa-2b49-4cca-94d5-2d2ce13eb778)




# Setup action Runner on a server 
mkdir actions-runner && cd actions-runner
curl -o actions-runner-linux-x64-2.309.0.tar.gz -L https://github.com/actions/runner/releases/download/v2.309.0/actions-runner-linux-x64-2.309.0.tar.gz
echo "2974243bab2a282349ac833475d241d5273605d3628f0685bd07fb5530f9bb1a  actions-runner-linux-x64-2.309.0.tar.gz" | shasum -a 256 -c
tar xzf ./actions-runner-linux-x64-2.309.0.tar.gz
./config.sh --url https://github.com/demo123455675685/actiondemo --token BCYZCWYYIGJJDLDNREAUVYLFCHBWU
./run.sh
![image](https://github.com/eashan98/wordpress/assets/145854811/df6a8110-a324-48a5-9118-d77bc3a42291)



# Adding SSH keys
create ssh-keys using ssh-keygen
![image](https://github.com/eashan98/wordpress/assets/145764413/814dc407-47ba-46aa-8928-759c1cb24412)





