## Steps to setup the project 

- clone the project
- then move to the project folder using `cd` command on your terminal
- run `composer install`
- copy `.env.example` file to `.env` on the root folder
- Open your `.env` file and change the database name (`DB_DATABASE`) to whatever you have, username (`DB_USERNAME`) and password (`DB_PASSWORD`) field correspond to your configuration
- Run `php artisan key:generate`
- Run `php artisan migrate` and it will seed super admin user automatically
- Email: super_admin@admin.com
- Password: password
#

## Some thoughts about challange
- we can use more complex roles and permissions packages if we had larger scale like https://github.com/spatie/laravel-permission.
- we can add unit test if we had more time.
- i tried to use git branching to demonstrate some of my git skills be with challange with this scale it's hard to demonstrate more.
