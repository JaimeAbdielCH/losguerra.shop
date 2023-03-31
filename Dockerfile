FROM php:8.2.3-apache-bullseye
ARG TIMEZONE

COPY ./opencartapp/php.ini /usr/local/etc/php/conf.d/docker-php-config.ini

RUN apt-get update && apt-get install -y \
    gnupg \
    g++ \
    procps \
    openssl \
    git \
    unzip \
    zlib1g-dev \
    libzip-dev \
    libfreetype6-dev \
    libpng-dev \
    libjpeg-dev \
    libicu-dev  \
    libonig-dev \
    libxslt1-dev \
    libjpeg62-turbo-dev \
	libpng-dev \
    libwebp-dev \
    acl \
    && echo 'alias sf="php bin/console"' >> ~/.bashrc \
	&& docker-php-ext-configure gd --with-freetype --with-jpeg --with-webp \
	&& docker-php-ext-install -j$(nproc) gd
RUN docker-php-ext-install \
    pdo pdo_mysql zip xsl intl opcache exif mbstring
RUN ln -snf /usr/share/zoneinfo/${TIMEZONE} /etc/localtime && echo ${TIMEZONE} > /etc/timezone \
    && printf '[PHP]\ndate.timezone = "%s"\n', ${TIMEZONE} > /usr/local/etc/php/conf.d/tzone.ini \
    && "date"
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
