# PHP Laravel Passkey Example App

This is a sample implementation of a PHP Laravel application that offers passkey authentication. For simple passkey-first authentication, the Corbado web component is used.

Please read the [full blog post](https://www.corbado.com/blog/passkeys-php-laravel) to understand all the required steps for a passkey integration into PHP Laravel apps.

## File structure

```
...
├── .env                              # Contains all environment variables
├── app
|   ├── Http                        
|   |   ├── Kernel.php                # Controls the middleware
|   |   └── Controllers
|   |       └── Controller.php        # The controller for our frontend pages
|   |
|   └── Providers  
|       └── AppServiceProvider.php    # Used to inject the Corbado project ID into all views
|
├── resources
|   └── views
|       ├── index.blade.php           # The login page
|       └── profile.blade.php         # The profile page
|
└── routes
    └── web.php                       # The routes for our frontend pages
```

## Prerequisites

Please follow the steps in [Getting started](https://docs.corbado.com/overview/getting-started) to create and configure
a project in the [Corbado developer panel](https://app.corbado.com/signin#register).

Create a .env file with the contents of the .env.example file and paste your own project ID as well as your own API secret.

Also make sure that you have [PHP](https://php.net) as well as [Composer](https://getcomposer.org/) installed and accessible from your shell.

## Usage

Then you can run the project locally by first downloading all dependencies with `composer install` and then starting the local instance with `php artisan serve`.
