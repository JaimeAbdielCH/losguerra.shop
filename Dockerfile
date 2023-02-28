FROM php:7.4-apache-bullseye
RUN apt-get update && apt-get install -y \
        libzip-dev \
        zlib1g-dev \
		libfreetype6-dev \
		libjpeg62-turbo-dev \
		libpng-dev \
	&& docker-php-ext-configure gd --with-freetype --with-jpeg \
	&& docker-php-ext-install -j$(nproc) gd \
    && docker-php-ext-install zip \
	&& docker-php-ext-install pdo pdo_mysql
RUN mkdir /lgshopapp && mkdir /storageout
COPY vhost.conf /etc/apache2/sites-available/000-default.conf
RUN chown -R www-data:www-data /lgshopapp/  \
     && chown -R www-data:www-data /storageout/ \
     && chmod 777 /storageout
RUN touch /lgshopapp/config.php
RUN a2enmod rewrite
