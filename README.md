1. create .env 
2. run composer install
3. run php artisan migrate
4. run php artisan db:seed
5. run php artisan vendor:publish --provider "L5Swagger\L5SwaggerServiceProvider"
6. run php artisan l5-swagger:generate
7. run php artisan serve

note :
don't be forget to set your .env for your database

#documentation
path: {your-host}/api/documentation