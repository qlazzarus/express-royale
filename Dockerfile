FROM php:7.4-fpm-alpine

WORKDIR /var/www/html

RUN docker-php-ext-install pdo pdo_mysql \
    && pecl install xdebug-2.8.1 \
    && docker-php-ext-enable xdebug
