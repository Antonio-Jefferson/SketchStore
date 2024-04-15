# Use a imagem oficial do PHP com Apache
FROM php:8.2-apache

# Instale as dependências necessárias
RUN apt-get update && apt-get install -y \
    libzip-dev \
    zip \
    unzip \
    && docker-php-ext-install pdo_mysql zip

# Ative o módulo de reescrita do Apache
RUN a2enmod rewrite

# Copie os arquivos do seu projeto para o contêiner
COPY . /var/www/html

# Defina as permissões adequadas
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# Exponha a porta 80 do contêiner
EXPOSE 80

# Comando para iniciar o Apache
CMD ["apache2-foreground"]
