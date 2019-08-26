# TURACO

An Open Source School Enterprise Resource Planning (ERP), can be used to manage students records and other school resources.  The system is built in modules which can be installed and removed to extend the functionality of the system

>TURACO is a PHP codebase that runs on Laravel Framework

## Installation & Configuration

### Requirements
This project require that you have
* PHP >= 7.1.3
* Composer
* MySql / MariaDB
* See other requirements from [Laravel Site!](https://laravel.com/docs/5.8)

To install this project in your local environment
> cd **_your/directory_**

> run `git clone https://github.com/nottech-lab/Turaco.git`

This command will download the TURACO project and store it inside **_your/directory_** 


### Setting up
Once the cloning/downloading is completed and the files are on your local machine. Confirm that you have the directory
named **turaco** inside **_your/directory_** and on your terminal/dos on PC's execute the following commands

> `cd turaco` to get inside the project directory

> `composer install` to install all the dependencies for this project. 

Wait for composer to finish the installation before running the next commands

> copy `.env.example` to a new file and name it `.env` We need the `.env` file because that is the configuration file for Laravel

> run `php artisan key:generate` This command will generate a random 32 bits security string that Laravel requires. The key is added to `.env` file and assigned to `APP_KEY` key


## Running the app
### In production
Laravel serves a page via the public directory, so configure your Webserve to point that directory as your document root. 

### Locally
On your local environment you can use `php artisan serve` to run the app and the command will show you the address and port on which the app is served. The default address is `http://127.0.0.1:8000`

