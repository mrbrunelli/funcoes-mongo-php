FROM php:7.2-apache

# Instalar biblioteca de drivers
RUN apt-get update && apt-get install --yes --no-install-recommends \
    libssl-dev

# Instalar driver do mongodb e habilitar a extensão no php.ini
RUN pecl install mongodb \
    && docker-php-ext-enable mongodb


# Ativar mod_rewrite do .htaccess
RUN cp /etc/apache2/mods-available/rewrite.load /etc/apache2/mods-enabled/