FROM php:8.3-apache

RUN docker-php-ext-install mysqli pdo pdo_mysql

COPY src/rf-001-login/ /var/www/html/

RUN chown -R www-data:www-data /var/www/html

EXPOSE 80