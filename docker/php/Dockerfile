FROM php:8.3-fpm

# Define diretório de trabalho
WORKDIR /var/www

# Remove a pasta html padrão (opcional)
RUN rm -rf /var/www/html

# Instala dependências e extensões PHP
RUN apt-get update && apt-get install -y \
    build-essential \
    libpng-dev \
    libjpeg62-turbo-dev \
    libfreetype6-dev \
    locales \
    zip \
    jpegoptim optipng pngquant gifsicle \
    vim \
    unzip \
    git \
    curl \
    libzip-dev \
    libonig-dev \
    libpq-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install pdo pdo_pgsql pgsql mbstring zip exif gd \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

# Instala Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Instala o nano e limpa cache do apt
RUN apt-get update && apt-get install -y nano && apt-get clean

# Expor a porta padrão do php-fpm
EXPOSE 9000

# Comando padrão
CMD ["php-fpm"]
