FROM php:latest

RUN apt-get update && \
    apt-get install -y libsqlite3-dev && \
    docker-php-ext-install pdo_sqlite

WORKDIR /var/www/html

COPY . .

EXPOSE 80

CMD ["php", "-S", "0.0.0.0:80"]
