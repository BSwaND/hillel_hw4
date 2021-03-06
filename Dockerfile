FROM php:7.4.1-apache

RUN docker-php-ext-install pdo_mysql

RUN pecl install xdebug \
    && docker-php-ext-enable xdebug

COPY xdebug.ini  /usr/local/etc/php/conf.d/xdebug.ini