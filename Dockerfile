# Usa una imagen base de PHP
FROM php:8.2-apache

# Establece el directorio de trabajo
WORKDIR /var/www/html

# Copia los archivos del proyecto al directorio de trabajo
COPY . .

# Copia específicamente el archivo .env al contenedor
COPY .env .env

# Instala las dependencias de Composer
RUN apt-get update && apt-get install -y \
    unzip \
    && docker-php-ext-install pdo pdo_mysql \
    && curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer \
    && composer install

# Expone el puerto que será utilizado
EXPOSE 80

# Comando para iniciar el servidor
CMD ["apache2-foreground"]
