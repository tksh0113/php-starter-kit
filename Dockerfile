FROM php:8.1-fpm

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

RUN apt update && apt install -y zlib1g-dev libzip-dev libonig-dev zip unzip git procps

WORKDIR /var/www/html
