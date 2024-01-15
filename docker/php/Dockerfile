FROM php:8.1-fpm

RUN docker-php-ext-install mysqli
# from image composer 2.6.6v, copy composer to our container
COPY --from=composer:2.6.6 /usr/bin/composer /usr/bin/composer

RUN pecl install xdebug \
    && docker-php-ext-enable xdebug

COPY conf.d/* $PHP_INI_DIR/conf.d/