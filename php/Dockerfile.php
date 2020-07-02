FROM php:7.2.10-fpm-alpine
RUN mkdir /app
COPY hello.php /app
COPY index.html /app
