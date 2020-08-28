FROM php:7.4-fpm

RUN apt-get update && apt-get install -y\
    apt-utils \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
    supervisor \
    && docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

#_______Install XDebug REDIS
RUN pecl install xdebug redis
RUN docker-php-ext-enable xdebug redis


#_______Install Composer
RUN curl -sL https://getcomposer.org/installer | php -- --install-dir /usr/bin --filename composer

#_______Config Supervisor
COPY PHP/laravel-supervisor-redis.conf /etc/supervisor/conf.d/supervisord.conf

#_______Config PHP with PHP_XDebug
ADD PHP/php.ini $PHP_INI_DIR/php.ini

# Node.js
#RUN curl -sL https://deb.nodesource.com/setup_14.x | bash -
#RUN apt-get install nodejs -y
#RUN apt-get install npm -y
#RUN npm install


ARG UID
ARG GID
ARG NGINX_WORK_DIR
USER $UID:$GID

CMD ["/usr/bin/supervisord", "-n", "-c", "/etc/supervisor/conf.d/supervisord.conf"]

WORKDIR $NGINX_WORK_DIR