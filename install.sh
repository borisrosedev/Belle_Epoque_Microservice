#!/bin/bash

##making things more easily
composer require --dev symfony/maker-bundle

##install composer
php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php -r "if (hash_file('sha384', 'composer-setup.php') === 'dac665fdc30fdd8ec78b38b9800061b4150413ff2e3b6f88543c636f7cd84f6db9189d43a81e5503cda447da73c7e5b6') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
php composer-setup.php
php -r "unlink('composer-setup.php');"
##
sudo mv composer.phar /usr/local/bin/composer


###
php bin/console list make

make:command            Creates a new console command class
make:controller         Creates a new controller class
make:entity             Creates a new Doctrine entity class

[...]

make:validator          Creates a new validator and constraint class
make:voter              Creates a new security voter class


## routes
php bin/console debug:router

## template
composer require twig

##assets
composer require symfony/asset