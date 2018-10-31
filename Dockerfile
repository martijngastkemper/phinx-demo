FROM php:7.1

RUN apt-get update && apt-get install -y \
        zlib1g-dev \
        unzip

RUN docker-php-ext-install pdo pdo_mysql zip

ENV PATH /the-employees/vendor/bin:$PATH
ENV COMPOSER_ALLOW_SUPERUSER 1

COPY --from=composer /usr/bin/composer /usr/bin/composer

WORKDIR /the-employees
