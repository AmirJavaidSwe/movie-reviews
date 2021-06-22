this movie review prject is created on LAravel 7 and Vue 2


and it requires php version of atleast 7.2.5

and mysql for database


1. open powershell in the root of the project


2. cp .env.example .env

3. composer install


4. php artisan key:generate


5. create a database on PHPMYADMIN and put details in .env accordingly


6. php artisan migrate:fresh --seed   (first generated user password will be "password" and please see email column in users table for email to login into system otherwise you can register too).

7. php artisan passport:install

Create a vertual host or run 

8. php artisan serve