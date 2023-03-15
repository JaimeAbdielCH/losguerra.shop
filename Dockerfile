FROM php:8.2.3-apache-bullseye
RUN apt-get update && apt-get install -y \
        libzip-dev \
        zlib1g-dev \
		libfreetype6-dev \
		libjpeg62-turbo-dev \
		libpng-dev \
        libwebp-dev \
	&& docker-php-ext-configure gd --with-freetype --with-jpeg --with-webp \
	&& docker-php-ext-install -j$(nproc) gd \
    && docker-php-ext-install zip \
	&& docker-php-ext-install pdo pdo_mysql
RUN a2enmod ssl \
    && a2enmod headers \
    && a2enmod rewrite \
    && a2enmod proxy_fcgi \
    && a2enmod http2 \
    && a2enmod proxy \
    && a2enmod proxy_http \
    && c_rehash /etc/ssl/certs/
RUN mkdir /opencartapp && mkdir /storageout
COPY vhost.conf /etc/apache2/sites-available/000-default.conf
RUN chown -R www-data:www-data /opencartapp/  \
     && chown -R www-data:www-data /storageout/ \
     && chmod 777 /storageout
RUN touch /opencartapp/config.php

