FROM php:7.0-apache
RUN docker-php-ext-install -j$(nproc) pdo
RUN docker-php-ext-install -j$(nproc) pdo_mysql
RUN echo "ServerName servidor" >> /etc/apache2/apache2.conf
EXPOSE 80