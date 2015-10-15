# Authentication
Basic Auth for Laravel Framework

## Installation

1. Require this package in your composer.json and run composer update (or run `composer require alfredoem/authentication` directly):

		"alfredoem/authentication": "^0.1.0"
		
2. After composer update, add service providers to the `config/app.php`

	    Alfredoem\Authentication\AuthenticationServiceProvider::class,
	    
3. The next step is to install Authentication component. Run this command in terminal:

		$ php artisan Auth:install

