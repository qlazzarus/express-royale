# 베이스 이미지 정의
FROM php:8.3-fpm

# 필요한 패키지 설치
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    libpq-dev \
    libzip-dev \
    && docker-php-ext-install pdo pdo_pgsql zip \
    && pecl install xdebug \
    && docker-php-ext-enable xdebug

# Composer 설치
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# 작업 디렉토리 설정
WORKDIR /var/www/html

# 필요한 파일 복사
COPY . .

# 포트 노출
EXPOSE 8000

# 진입점 설정
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8000"]
