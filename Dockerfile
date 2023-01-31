FROM php:8.2.1-apache-bullseye
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
RUN mkdir /lgshopapp
RUN mkdir /storage-out
COPY vhost.conf /etc/apache2/sites-available/000-default.conf
RUN sudo chown -R www-data:www-data /lgshopapp
RUN sudo chown -R www-data:www-data /storage-out
RUN a2enmod rewrite
WORKDIR /lgshopapp