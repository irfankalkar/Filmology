# # Laravel için PHP 8.2 ve Composer içeren Docker imajı
# FROM php:8.2-fpm

# # Gerekli Paketlerin Yüklenmesi
# RUN apt-get update && apt-get install -y \
#     git \
#     unzip \
#     libpng-dev \
#     libjpeg-dev \
#     libfreetype6-dev \
#     && docker-php-ext-configure gd --with-freetype --with-jpeg \
#     && docker-php-ext-install gd pdo pdo_mysql

# # Composer Kurulumu
# COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# # Çalışma Dizini Ayarı
# WORKDIR /var/www

# # Laravel için gerekli izinler
# RUN chown -R www-data:www-data /var/www \
#     && chmod -R 775 /var/www/storage /var/www/bootstrap/cache





# # Laravel için PHP tabanlı bir Docker imajı
# FROM php:8.2-fpm

# # Çalışma dizinini ayarla
# WORKDIR /var/www/html

# # Composer ve gerekli araçları yükle
# RUN apt-get update && apt-get install -y \
#     unzip git curl && \
#     curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# # Proje dosyalarını kopyala
# COPY . .

# # Composer ile bağımlılıkları yükle
# RUN composer install --no-dev --optimize-autoloader

# # Gerekli izinleri ayarla
# RUN chown -R www-data:www-data /var/www/html

# # Servisi başlatmak için default CMD komutu
# CMD ["php-fpm"]





FROM richarvey/nginx-php-fpm:latest 

COPY . .

# Image config
ENV SKIP_COMPOSER 1
ENV WEBROOT /var/www/html/public
ENV PHP_ERRORS_STDERR 1
ENV RUN_SCRIPTS 1
ENV REAL_IP_HEADER 1

# Laravel config
ENV APP_ENV staging
ENV APP_DEBUG true
ENV LOG_CHANNEL stderr

# Allow composer to run as root
ENV COMPOSER_ALLOW_SUPERUSER 1

CMD ["/start.sh"]