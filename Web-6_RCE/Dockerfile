FROM php:7.4-apache

WORKDIR /var/www/html

COPY . /var/www/html

COPY 000-default.conf /etc/apache2/sites-available/

COPY php.ini /usr/local/etc/php/conf.d/php.ini

RUN sed -i '2i Timeout 10' /etc/apache2/apache2.conf

RUN a2enmod rewrite

ENV APACHE_RUN_USER www-data
ENV APACHE_RUN_GROUP www-data

RUN chown -R root:www-data /var/www/html && chmod -R 750 /var/www/html

RUN find /var/www/html -type f -exec chmod a-w {} \;

RUN mkdir -p uploads && chown -R www-data:www-data uploads

RUN mkdir -p /var/www/html/flag && chmod 555 /var/www/html/flag

RUN echo "CTF{yguyg7g7tycy}" > /var/www/html/flag/flag.txt 
RUN chmod a-w /var/www/html/flag/flag.txt 

EXPOSE 80

CMD ["apache2-foreground"]
