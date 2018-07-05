FROM php:7.1-alpine

RUN docker-php-ext-install pdo pdo_mysql

ENV PATH /the-employees/vendor/bin:$PATH

WORKDIR /the-employees
