# syntax=docker/dockerfile:1
FROM kooldev/php:8.0-nginx
RUN apk update && apk add g++ autoconf make re2c && \
    pecl install mailparse && \
    docker-php-ext-enable mailparse && \
    apk del g++ autoconf make re2c
RUN apk add --update nodejs npm
RUN apk add --update npm

