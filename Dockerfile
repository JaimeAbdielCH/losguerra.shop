FROM php:8.2.1-apache-bullseye
RUN mkdir /lgshopapp
COPY vhost.conf /etc/apache2/sites-available/000-default.conf
RUN chown -R www-data:www-data /lgshopapp && a2enmod rewrite
WORKDIR /lgshopapp