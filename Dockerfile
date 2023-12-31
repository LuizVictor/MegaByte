FROM php:8.2-fpm

RUN apt-get update && apt-get install unzip

RUN pecl install xdebug && docker-php-ext-enable xdebug
RUN pecl install pcov && docker-php-ext-enable pcov

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

COPY . /app
WORKDIR /app

