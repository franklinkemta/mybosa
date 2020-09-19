# ON A FRESH CLONE OF THE PROJET FOLLOW THESE STEPS

Create a database locally named {homestead} utf8_general_ci
Download composer https://getcomposer.org/download/
Pull Laravel/php project from git provider.
Rename .env.example file to .envinside your project root and fill the database information. (windows wont let you do it, so you have to open your console cd your project root directory and run mv .env.example .env )
Open the console and cd your project root directory
Run composer install or php composer.phar install
Run php artisan key:generate
Run php artisan migrate
Run php artisan db:seed to run seeders, if any.
Run php artisan serve

# INSTALL PHP-MYSQL EXTENSION FOR YOUR php -v Version
# https://askubuntu.com/questions/1273697/how-to-solve-unmet-dependency-because-of-broken-package


# HOW TO SOLVE THE Laravel SQLSTATE[HY000] [2002] No such file or directory ERROR
# https://www.youtube.com/watch?v=iD_N6oHPTts&ab_channel=VishwarajBhattrai
On your project folder:

sudo mkdir /var/mysql
cd /var/mysql
sudo ln -s /Applications/XAMPP/xamppfiles/var/mysql/mysql.sock


or for MAMP
sudo ln -s /Applications/MAMP/tmp/mysql/mysql.sock

# HOW TO INTEGRATE JWT AUTH 
# https://www.youtube.com/watch?v=6eX9Pj-GhZs&ab_channel=AndrewSchmelyun
# https://www.w3adda.com/blog/laravel-jwt-authentication-api-laravel-5-8-create-rest-api-jwt-authentication
# https://www.positronx.io/laravel-jwt-authentication-tutorial-user-login-signup-api/

# HOW TO CHANGE LARAVEL PUBLIC FOLDER
# https://developerhowto.com/2018/11/12/how-to-change-the-laravel-public-folder/
# https://laracasts.com/discuss/channels/tips/how-to-change-the-default-directory-structure

# HOW TO SYMLINK STORAGE TO PUBLIC_HTML FOLDER
# https://dev.to/ayekpleclemence/symlink-no-such-file-or-directory-laravel-3ebo
# https://laracasts.com/discuss/channels/laravel/how-to-downlod-a-stored-file-within-a-view

# HOW TO CLEAR COMPILED FILES SO THAT THE CHANGES MADE ON AppServiceProvider works
# https://stackoverflow.com/questions/28676365/laravel-appserviceprovider-is-not-called

# HOW TO CUSTOMIZE LARAVEL REGISTRATION
# https://laraveldaily.com/9-things-you-can-customize-in-laravel-registration/