FROM php:8.2

# Install PHP extensions and dependencies
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    curl \
    libpq-dev \
    && docker-php-ext-install pdo pdo_pgsql \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

WORKDIR /var/www/html


# Copy application code into the container
COPY . .

# Set permissions for Laravel storage and cache directories
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache 


EXPOSE 4444

CMD php artisan serve --host=0.0.0.0 --port=4444
