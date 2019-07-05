FROM php:7.3-alpine3.10

ENV COMPOSER_ALLOW_SUPERUSER 1
COPY --from=composer:1.8 /usr/bin/composer /usr/bin/composer

COPY . /app
WORKDIR /app

CMD [ "tail", "-f", "/dev/null" ]
