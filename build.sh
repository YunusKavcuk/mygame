#!/bin/bash
# PHP ve Composer'ı kur
apt-get update
apt-get install -y php-cli unzip curl
curl -sS https://getcomposer.org/installer | php
mv composer.phar /usr/local/bin/composer

# Laravel bağımlılıklarını yükle
composer install
