# Use an official PHP runtime as a parent image
FROM php:8.1-cli

# Set the working directory
WORKDIR /app

# Copy the current directory contents into the container
COPY . .

# Install dependencies (if using Composer)
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN composer install --no-dev --optimize-autoloader

# Expose port 8000
EXPOSE 8000

# Run the PHP development server
CMD ["php", "-S", "0.0.0.0:8000"]