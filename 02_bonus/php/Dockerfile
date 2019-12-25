ARG PHP_VERSION

FROM php:${PHP_VERSION}

RUN apt-get update && apt-get install -y

RUN docker-php-ext-install mysqli pdo_mysql
