FROM php:8.2-cli

# System deps + PHP extensions
RUN apt-get update && apt-get install -y --no-install-recommends \
        git unzip libsqlite3-dev libzip-dev libpng-dev libjpeg-dev libfreetype6-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install pdo pdo_sqlite zip gd \
    && rm -rf /var/lib/apt/lists/*

# Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /app
COPY . .

# Install PHP deps
RUN composer install --no-dev --optimize-autoloader --no-interaction

# Environment
RUN cp .env.example .env
ENV APP_ENV=production
ENV APP_DEBUG=false
ENV DB_CONNECTION=sqlite
ENV DB_DATABASE=/app/database/database.sqlite
RUN php artisan key:generate --force

# Storage symlink + DB
RUN php artisan storage:link || true
RUN mkdir -p /app/database && touch /app/database/database.sqlite
RUN php artisan migrate --force
RUN php artisan db:seed --force

EXPOSE 10000
CMD sh -c "php -S 0.0.0.0:${PORT:-8000} -t public"
