# Use a imagem oficial do PHP 8.1
FROM php:8.2-cli

# Instalar dependências do sistema
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libzip-dev \
    libonig-dev \
    unzip \
    curl

# Limpar cache
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

RUN docker-php-ext-configure gd --with-jpeg=/usr/include/ --with-freetype=/usr/include/

# Instalar extensões do PHP
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl gd zip

# Instalar Composer na imagem
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Definir nosso diretório de trabalho dentro do container
WORKDIR /app

# Copiar aplicativo existente para o diretório de trabalho
COPY . /app

# Instalar dependências do aplicativo
RUN composer install

# Expõe a porta 8000 e inicia o servidor PHP
EXPOSE 8000
CMD php artisan serve --host=0.0.0.0 --port=8000
