FROM php:7.3-fpm

RUN apt-get update --fix-missing && apt-get install -y \
    acl g++ git gnupg libfreetype6-dev \
    libicu-dev libjpeg-dev libonig-dev \
    libpng-dev libxslt1-dev libzip-dev \
    openssl procps unzip vim zlib1g-dev \
    && echo 'alias sf="php bin/console"' >> ~/.bashrc

RUN docker-php-ext-install \
    exif gd intl mbstring \
    opcache pdo pdo_mysql \
    xsl zip

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN curl -sS https://get.symfony.com/cli/installer | bash
RUN mv /root/.symfony/bin/symfony /usr/local/bin/symfony

WORKDIR /var/www/app/
