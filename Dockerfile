FROM php:7.1

RUN docker-php-ext-install pdo pdo_mysql

ENV PATH /the-employees/vendor/bin:$PATH

RUN curl -sS https://getcomposer.org/installer | php && \
	  mv composer.phar /usr/local/bin/composer

WORKDIR /the-employees
