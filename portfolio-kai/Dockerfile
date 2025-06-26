FROM php:8.2-apache

# Vereisten installeren
RUN apt-get update && apt-get install -y \
    zip unzip git curl libzip-dev libpng-dev libonig-dev libxml2-dev \
    && docker-php-ext-install pdo pdo_mysql zip

# Composer installeren (copy van officiële composer image)
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Werkmap instellen
WORKDIR /var/www/html

# Projectbestanden kopiëren
COPY . .

# Dependencies installeren
RUN composer install --no-dev --optimize-autoloader

# Laravel key genereren en .env klaarzetten (zorg dat .env in repo staat zonder secrets, of gebruik env vars)
RUN cp .env.example .env
RUN php artisan key:generate

# Apache herconfigureren
RUN a2enmod rewrite
RUN chown -R www-data:www-data /var/www/html/storage

EXPOSE 80
