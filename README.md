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

## Notes
### validate 
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
