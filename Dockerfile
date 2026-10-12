# BUILD CSS, JAVASCRIPT, DAN FONT
FROM node:22-bookworm-slim AS frontend

WORKDIR /app

COPY package.json package-lock.json ./
RUN npm ci

COPY . .
RUN npm run build


# APLIKASI LARAVEL
FROM php:8.4-apache-bookworm

WORKDIR /var/www/html

RUN apt-get update \
    && apt-get install -y --no-install-recommends \
        git \
        unzip \
        libonig-dev \
        libzip-dev \
        libicu-dev \
    && docker-php-ext-install \
        mbstring \
        zip \
        intl \
        pdo_mysql \
        bcmath \
        opcache \
    && rm -rf /var/lib/apt/lists/*

COPY --from=composer:2 /usr/bin/composer /usr/local/bin/composer

ENV COMPOSER_ALLOW_SUPERUSER=1 \
    APP_ENV=production \
    APP_DEBUG=false \
    LOG_CHANNEL=stderr \
    SESSION_DRIVER=file \
    CACHE_STORE=file \
    QUEUE_CONNECTION=sync

COPY . .
COPY --from=frontend /app/public/build ./public/build

RUN mkdir -p \
        storage/framework/cache/data \
        storage/framework/sessions \
        storage/framework/views \
        storage/logs \
        bootstrap/cache \
    && composer install \
        --no-dev \
        --prefer-dist \
        --no-interaction \
        --optimize-autoloader \
    && chown -R www-data:www-data storage bootstrap/cache

# WEB SERVER
RUN a2enmod rewrite \
    && sed -i 's/Listen 80/Listen 10000/' /etc/apache2/ports.conf \
    && sed -i 's/:80>/:10000>/' /etc/apache2/sites-available/000-default.conf \
    && sed -i 's|DocumentRoot /var/www/html|DocumentRoot /var/www/html/public|' \
        /etc/apache2/sites-available/000-default.conf \
    && printf '<Directory /var/www/html/public>\nAllowOverride All\nRequire all granted\nOptions -Indexes +FollowSymLinks\n</Directory>\n' \
        > /etc/apache2/conf-available/forstaff.conf \
    && a2enconf forstaff

EXPOSE 10000

CMD ["apache2-foreground"]