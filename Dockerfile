# Use a imagem base do PHP com Apache
FROM php:7.4-apache

# Atualiza os pacotes e instala dependências necessárias
RUN apt-get update \
    && apt-get install -y \
        libzip-dev \
        unzip \
        libpng-dev \
        libjpeg-dev \
        libfreetype6-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(nproc) gd zip pdo_mysql mysqli \
    && a2enmod rewrite

# Define o diretório de trabalho como /var/www/html
WORKDIR /var/www/html

# Copia todos os arquivos do diretório atual para dentro do container
COPY . .

# Configura o Apache para ler .htaccess
RUN sed -i '/<Directory \/var\/www\/>/,/<\/Directory>/ s/AllowOverride None/AllowOverride All/' /etc/apache2/apache2.conf

# Expõe a porta 80 do container
EXPOSE 80

# Inicia o Apache quando o container for iniciado
CMD ["apache2-foreground"]
