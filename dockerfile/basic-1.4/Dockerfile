FROM php:8.1.0-apache

ARG CONTAINER_STATISCHER_WERT
ENV CONTAINER_STATISCHER_WERT=${CONTAINER_STATISCHER_WERT}
RUN docker-php-ext-install pdo pdo_mysql
RUN mkdir /var/www/html/mount
COPY ./php-code/index.php /var/www/html
EXPOSE 80