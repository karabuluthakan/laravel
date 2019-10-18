# Required
Docker Version >=18.0.9.2

## For localname Open terminal and this code
open terminal => vi /etc/hosts  
127.0.0.1 langsis.loc 

# git clone 
##### https://github.com/ugurbilgi/langsis-v1.git
##### on terminal
cd langsis &&
cp .env.example .env

# Building
docker-compose up -d

# Artisan Commands
docker exec -it <langsis_app DockerContainerID> /bin/bash

### For example 
docker exec -it 67c886ff2aac /bin/bash

### On docker-container in artisan

composer update

php artisan key:generate

## Config database.php
'default' => env('DB_CONNECTION', 'pgsql')
    
## .env
DB_CONNECTION=pgsql
DB_HOST=postgres
DB_PORT=5432
DB_DATABASE=postgres
DB_USERNAME=postgres
DB_PASSWORD=

### Finally Open browser
http://langsis.loc/
