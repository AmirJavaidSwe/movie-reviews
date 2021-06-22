this movie review prject is created on LAravel 7 and Vue 2


1. open powershell in the root of the project


2. cp .env.example .env

3. composer install


4. php artisan key:generate


5. php artisan migrate:fresh --seed   (first generated user password will be "password").

6. php artisan passport:install

Create a vertual host or run 

7. php artisan serve