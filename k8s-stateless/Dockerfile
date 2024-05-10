FROM php:8.3-apache

RUN apt-get update && apt-get install -y \
    libpng-dev \
    zlib1g-dev \
    libjpeg-dev \
    libfreetype6-dev \
    git \
    unzip \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(nproc) gd mysqli pdo pdo_mysql \
    && php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" \
    && php composer-setup.php --install-dir=/usr/local/bin --filename=composer \
    && php -r "unlink('composer-setup.php');"

COPY ./src/private /var/www/private
COPY ./src/public/* /var/www/html/

RUN chown -R www-data:www-data /var/www/html \
    && chown -R www-data:www-data /var/www/private \
    && a2enmod rewrite

COPY ./src/env.sh /usr/local/bin/env.sh

RUN chmod +x /usr/local/bin/env.sh

ENV COMPOSER_ALLOW_SUPERUSER=1

RUN --mount=type=secret,id=.env \
    cd /var/www/private/app \
    && composer config -g github-oauth.github.com "$(/usr/local/bin/env.sh GITHUB_TOKEN)" \
    && composer update --optimize-autoloader --no-interaction

WORKDIR /var/www

CMD ["apache2-foreground"]
