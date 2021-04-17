<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Project

## Project Installation <br>
step 1: clone the project <br>
step 2: setup database there is a file inside project folder laravel.sql import on your database or create a database laravel and configure .env file with database credentails and run the migrations plus seed command it wll create the table with fake data<br>
step 3: run command "php artisan serve" <br>

server will start on localhost:8000<br>


## Question 1: Add a cron job schedular and schedular should take backup of mysql database and upload it on the google drive
            - Schedular is added in app/Console/Kernal.php  (schedular name- backup:run)
            - Schedular will run on every night at 01:01.
            - On local machine we can run schedular by running following command (php artisan backup:run).
            - But on live server we can create a cron and i will run the schedular automatically at midnight.
            - * * * * * cd /path-to-your-project && php artisan schedule:run >> /dev/null 2>&1 we can create the cron like this on server.
            - Mysql database backup also done you can check by running the command "php artisan backup:run"
            - google drive folder link you can check here: https://drive.google.com/drive/folders/1hcA8vHelQHlKAoLGAkHQscERpk18onhg?usp=sharing

## Question 2: Create a REST API in Laravel which will read 20K records at a time from MySQL or MongoDB database & return them as JSON. API RTT(Round trip time) should be as
minimum as possible
            - There are two api first is without cache and second is with cache
            - First Api http://127.0.0.1:8000/api/get-todo-list
            - Second Api http://127.0.0.1:8000/api/get-todo
            - File Path: app/Http/Controllers/Api/TodoController
            - Method name: 1. todoWithCache 2. todoWithoutCache
          
# Question 3: Prepare SQL query such that there is a user table with column "grades". You have to find out the user records from users table where users have got grades in this pattern (1,3) or (1,3,2) etc
            - Api http://127.0.0.1:8000/api/get-user
            - File Path: app/Http/Controllers/Api/UserController
            - Method name: getUser
