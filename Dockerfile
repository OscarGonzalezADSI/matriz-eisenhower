FROM php:8.1.10-apache
RUN apt update \
	&& docker-php-ext-install \
    mysqli \
    pdo \
    pdo_mysql
USER www-data
COPY --chown=www-data:www-data src .