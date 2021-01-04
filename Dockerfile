FROM php:8.0-fpm-alpine

WORKDIR /var/www/html

RUN apk add --update make autoconf gcc g++

RUN pecl install xdebug && docker-php-ext-enable xdebug
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Install composer: This could be removed and run in it's own container
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# xdebug.remote_connect_back = true does NOT work in docker
COPY ./conf.d/xdebug.ini $PHP_INI_DIR/conf.d/xdebug.ini

# Xdebug
# Note that "host.docker.internal" is not currently supported on Linux. This nasty hack tries to resolve it
# Source: https://github.com/docker/for-linux/issues/264
#RUN ip -4 route list match 0/0 | awk '{print $3" host.docker.internal"}' >> /etc/hosts
RUN ip -4 route list match 0/0 | awk '{print "xdebug.client_host="$3}' >> /usr/local/etc/php/php.ini
