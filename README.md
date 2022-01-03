# laravel-sanctum-api

## Commands
### Create laravel project
`composer create-project laravel/laravel laravel-sanctum-api`
### Create Product model with migration
`php artisan make:model Product --migration`
### Create database in mysql
`create database laravel;`
### Create product controller with basic crud methods
`php artisan make:controller ProductController --api`
### List all available routes in application
`php artisan route:list`
### Create AuthController
`php artisan make:controller AuthController`

## sanctum setup
### install sanctum
`composer require laravel/sanctum`
### publish the Sanctum configuration and migration files using the vendor:publish Artisan command. The sanctum configuration file will be placed in your application's config directory:
`php artisan vendor:publish --provider="Laravel\Sanctum\SanctumServiceProvider"
### migrate
`php artisan migrate`

## Notes
### For debugging install clock work `composer require itsgoingd/clockwork` and visit `http://your_app/__clockwork`.

### Validate request data. 
#### `$request->validate([...])` will give you better error message in response like below.
```
{
    "message": "The given data was invalid.",
    "errors": {
        "name": [
            "The name field is required."
        ],
        "slug": [
            "The slug field is required."
        ],
        "price": [
            "The price field is required."
        ]
    }
}
```
