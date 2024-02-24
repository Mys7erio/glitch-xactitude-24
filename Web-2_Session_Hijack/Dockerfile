FROM php:8.2-apache

RUN apt-get update && apt-get install -y libsqlite3-dev && docker-php-ext-install pdo_sqlite

WORKDIR /var/www/html
COPY . /var/www/html

RUN chown -R root:www-data /var/www/html
RUN chmod -R g+rw /var/www/html

RUN docker-php-ext-install pdo_sqlite
#RUN echo "ServerName localhost:80" >> /etc/apache2/apache2.conf

EXPOSE 80
CMD ["/usr/sbin/apache2ctl", "-D", "FOREGROUND"]

# development only
#CMD ["php", "-S", "0.0.0.0:8000"]

# ` docker build . -t web-2-sessionhijack  `
# ` sudo docker run --rm -d -p 80:80 web-2-sessionhijack `
 

