FROM php:fpm

RUN /usr/local/bin/docker-php-ext-install pdo pdo_mysql

RUN mkdir /www/hello -p

ADD ./conf/www.conf /usr/local/etc/php-fpm.d/www.conf

ADD  ./conf/php.ini /usr/local/etc/php/php.ini

EXPOSE 9000/tcp

