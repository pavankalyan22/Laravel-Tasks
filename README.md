
step 1. Create Laravel project via composer using following command 
        composer create-project laravel/laravel floder_name

Open Xampp Control pannel -- start apache and Mysql service

open browser -- hit localhost --- select phpMyAdmi -- create New database 

step 2. Navigate to folder created in step 1 and open .env file to update database configuration variables so that 
application knows which database to use.

step 3. create model and Migrate the database 

crud application using repository pattern so create a interface to put common behavior which is needed every where.

Now create repository class where we will override those function and will inplement those method.

Next bind this repository in service provider.

Next create route

Create UserController to implement all the method to create a complete laravel php crud application using repository design pattern.

Next create view 

Next run php artisan serve

Next hit the url generated in browser.
 

