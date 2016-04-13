#Laravel Content Management System

I have made a simple content management system using laravel 5.2.* and Bootstrap 3.
There might be many errors in the project, feel free to push changes. :)

#Installation
 
Pre-Installation -
You should have installed

0) set up -

- PHP > 5.3
- Composer

Install - 

1)clone the repository by

 - git clone https://github.com/ashivliving/LaravelProject.git

2)Change to root directory of project

 - cd LaravelProject

3)Install the dependencies

 - composer install

4)Give permissions to /storage and /bootstrap

  - chmod 777 -R /storage
  - chmod 777 -R /bootstrap

5)create a database

6)Setup the credentials in .env file

 - nano .env

 give the credentials for

 	- DB_DATABASE= (database_name)
	- DB_USERNAME= (database_username)
	- DB_PASSWORD= (database_password)

7)migrate the table

 - php artisan migrate

8)start the server

- php artisan serve

& you are good to go...... :)

------------------------------------

Feel free to give suggesions and commit changes. :)
