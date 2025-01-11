# PHP ve Nginx için resmi imajları kullanıyoruz
FROM php:8.1-fpm

# Nginx'i kuruyoruz
RUN apt-get update && apt-get install -y nginx

# Laravel bağımlılıklarını yüklemek için Composer'ı yükle
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Çalışma dizinini oluştur
WORKDIR /var/www

# Laravel dosyalarını kopyala
COPY . .

# Laravel bağımlılıklarını yükle
RUN composer install --no-dev --optimize-autoloader

# Web sunucusunu başlatmak için gerekli portu aç
EXPOSE 80

CMD ["php-fpm"]
