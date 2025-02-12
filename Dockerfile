# Use an official PHP runtime as a parent image
FROM php:8.1-cli

# Set the working directory
WORKDIR /app

# Install system dependencies and PHP extensions
RUN apt-get update \
    && apt-get install -y \
        git \
        unzip \
        libzip-dev \
        libonig-dev \
        libxml2-dev \
        libpng-dev \
        libjpeg-dev \
        libfreetype6-dev \
        libwebp-dev \
        libpq-dev \
    && docker-php-ext-install pdo_mysql mysqli zip mbstring exif pcntl bcmath gd \
    && docker-php-ext-install pgsql pdo_pgsql \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/*

# Copy the application files
COPY . .

# Expose port 8000
EXPOSE 8000

# Run the PHP development server
CMD ["php", "-S", "0.0.0.0:8000"]
