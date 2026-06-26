FROM php:5.6-fpm

RUN ln -sf /usr/share/zoneinfo/America/Araguaina /etc/localtime

RUN printf 'deb [trusted=yes] http://archive.debian.org/debian stretch main contrib non-free\n' > /etc/apt/sources.list \
    && printf 'deb [trusted=yes] http://archive.debian.org/debian-security stretch/updates main contrib non-free\n' >> /etc/apt/sources.list \
    && printf 'Acquire::Check-Valid-Until "false";\nAcquire::Retries "3";\n' > /etc/apt/apt.conf.d/99no-check-valid-until \
    && apt-get update -o Acquire::Check-Valid-Until=false \
    && DEBIAN_FRONTEND=noninteractive apt-get install -y --no-install-recommends \
        git \
        curl \
        zip \
        unzip \
        libpng-dev \
        libjpeg-dev \
        libfreetype6-dev \
        libmcrypt-dev \
        libxml2-dev \
    && docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/ \
    && docker-php-ext-install mbstring mcrypt pdo_mysql mysqli gd opcache \
    && rm -rf /var/lib/apt/lists/*

RUN curl -L https://getcomposer.org/download/latest-1.x/composer.phar -o /usr/local/bin/composer \
    && chmod +x /usr/local/bin/composer

WORKDIR /var/www/html

COPY src /var/www/html
COPY docker/entrypoint.sh /usr/local/bin/entrypoint.sh
RUN chmod +x /usr/local/bin/entrypoint.sh

RUN mkdir -p /var/www/html/storage /var/www/html/bootstrap/cache
RUN chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache

ENTRYPOINT ["/usr/local/bin/entrypoint.sh"]
CMD ["php-fpm"]
