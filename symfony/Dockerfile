FROM composer:1.7 as builder

COPY symfony-demo .
RUN composer install

FROM php:7.2.10-fpm-alpine

RUN apk add --update icu-dev && docker-php-ext-install intl
RUN docker-php-ext-install pdo pdo_mysql

RUN mkdir /project
COPY symfony-demo /project
RUN mkdir /project/vendor
COPY --from=builder app/vendor /project/vendor
WORKDIR /project