FROM php:8.1-fpm-alpine

RUN set -ex \ 
    && apk --no-cache add postgresql-dev \
    && docker-php-ext-install pdo pdo_pgsql
    

