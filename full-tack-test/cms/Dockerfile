FROM php:8.1-apache

# FROM php:8.0-fpm

RUN apt-get update && apt-get install -y \
    build-essential \
    libzip-dev \
    zip \
    unzip \
    libpq-dev \
    libonig-dev \
    libjpeg-dev \
    libpng-dev \
    libfreetype6-dev \
    locales \
    nodejs \
    npm \
    git

RUN pecl install xdebug && docker-php-ext-enable xdebug

RUN docker-php-ext-configure gd --with-freetype --with-jpeg

RUN docker-php-ext-install pdo pdo_mysql zip mbstring exif pcntl gd bcmath

RUN curl -sL https://deb.nodesource.com/setup_18.x | bash -

RUN apt-get install -y nodejs

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

ENV COMPOSER_ALLOW_SUPERUSER 1

WORKDIR /app

COPY . .

RUN composer install

RUN npm install && npm run dev

RUN php artisan key:generate

CMD php artisan serve --host=0.0.0.0 --port=8000