install nginx
sudo systemctl status nginx
open SG
sudo apt install mysql
sudo mysql_secure_installation


install php
sudo apt install php-fpm php-mysql

sudo mkdir /var/www/job
sudo chown -R $USER:$USER /var/www/job/



Only google email can upload


add sql file to mysql
sudo mysql -u admin -p mydb < drives_files.sql
describe mydb.drive_files


google api




Upload tail 
sudo tail -f /var/log/nginx/error.log 

permission denied
# 1. Change owner of /var/www/html directory to apache user, here: www-data
sudo chown -R www-data:www-data /var/www/html

# 2. Allow Group to edit
sudo chmod -R 775 /var/www/html

# 3. Add yourself to apache group(www-data)
dc
sudo usermod -a -G www-data your_username