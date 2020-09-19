# INSTALLATION INSTRUCTIONS

### This repo is for www.mybosa.com
### Authored by Franklin Kemta
### Available at : https://github.com/franklinkemta/mybosa
### Framework: Laravel version 7

### Clone this repo on the production branch
git clone --single-branch --branch production https://github.com/franklinkemta/mybosa
cd laravel <mybosa> laravel
composer install
### Config your installation
php artisan key:generate
php artisan storage:link
### Apply changes
composer dump-auto
php artisan optimize
### Create a .env config file and set your local database configs
cp .env.example .env
### Migrate you database
php artisan migrate
### Or if you want to use the existing seeds
php artisan migrate --seed

## TO REPRODUCE THIS STRUCTURE FROM A FRESH LARAVEL INSTALLATION VERSION FOLLOW THE NEXT INSTRUCTIONS 
### All the following instructions are made from command line
## Modified the laravel folder structure to match the one present on CPANEL e.g godaddy
### Moved the <APP_ROOT>/* folder except the <APP_ROOT>/public folder to <APP_ROOT>/laravel
### Renamed the <APP_ROOT>/public folder to <APP_ROOT>/public_html

### Edited the file <APP_ROOT>/public_html/index.php like this
require __DIR__.'/../laravel/vendor/autoload.php';
$app = require_once __DIR__.'/../laravel/bootstrap/app.php';
### Just next to app creation line $app = require_once __DIR__.'/../laravel/bootstrap/app.php';
$app->bind('path.public', function() { return __DIR__; });

### Etidted the file <APP_ROOT>/laravel/boostrap/app.php
### Just next to app initialisation line $app = new Illuminate\Foundation\Application( ...
$app->bind('path.public', function() { return base_path().'/../public_html'; });

### Tryed to change the public directory path by using a service provider but it's didn't worked
### Just look at the : <APP_ROOT>/laravel/app/Providers/AppServiceProvider.php comments in the register function

### PURPOSE : To make the file stored to the local driver, available on "publicly" previewable after upload
### Modified the file <APP_ROOT>/laravel/config/filesytems on the "links" node from public_path('storage') => storage_path('app/public') to
public_path('storage') => storage_path('app')

### Made a slymlink of the <APP_ROOT>/laravel/storage/app to 
php artisan storage:link

### APPLY CHANGES ON COMPOSER AND ARTISAN
### From the <APP_ROOT>/laravel folder run
composer dump-auto
php artisan optimize:clear
php artisan optimize

### Serve the App if you are in your dev station
php artisan serve

## DEPLOY ON CPANEL
php artisan key:generate
### Make a backup of your env config file <APP_ROOT>/laravel/.env
### From the <APP_ROOT>/laravel folder run
cp .env .env.dev
### Compress the <APP_ROOT>/public_html folder and <APP_ROOT>/laravel folders separately
### Upload the public_html.zip and extract its content to you cpanel public_html folder
### It should be something like <CPANEL_ROOT>/public_html/<*content_of_public_html.zip>
### Upload the laravel.zip to the cpanel and extract the archive as it to your server root
### Its should be something like <CPANEL_ROOT>/<laravel>

### Then you are done !
### Hope it will work well for you :)
