FROM php:8.2-cli

RUN apt-get update && apt-get install -y libsqlite3-dev && docker-php-ext-install pdo_sqlite

WORKDIR /var/www/html
COPY . /var/www/html

EXPOSE 8000
CMD ["php", "-S", "0.0.0.0:8000"]

# ` docker build -t web-2-sessionhijack . `
# ` docker run -p 8000:8000 web-2-sessionhijack `
 

