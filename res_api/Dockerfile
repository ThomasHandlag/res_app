# Use the official PHP image as the base image
FROM php:8.0-apache

# Set the working directory in the container
WORKDIR /var/www/html

# Copy the application files to the container
COPY . .

# Install dependencies
RUN apt-get update && apt-get install -y \
    libonig-dev \
    libxml2-dev \
    libzip-dev \
    zip \
    && docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath opcache zip \
    && a2enmod rewrite

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Set the required environment variables
ENV APP_ENV production
ENV APP_KEY <your_app_key>

# Install the Composer dependencies
RUN composer install --no-dev --optimize-autoloader

# Generate the application key
RUN php artisan key:generate

# Build the React assets
RUN npm install
RUN npm run production

# Expose port 80 for HTTP traffic
EXPOSE 80

# Start the Apache server
CMD ["apache2-foreground"]