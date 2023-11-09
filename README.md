# Passkey integration example for PHP Laravel

This is a sample implementation of a PHP Laravel application that offers passkey authentication. For simple passkey-first authentication, the Corbado web component is used.

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

## Usage

Then you can run the project locally by first downloading all dependencies with `composer install` and then starting up the local server with `php artisan serve`.
