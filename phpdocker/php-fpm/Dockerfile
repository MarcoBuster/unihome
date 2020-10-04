FROM phpdockerio/php73-fpm:latest
WORKDIR "/usr/src/app/"

# Fix debconf warnings upon build
ARG DEBIAN_FRONTEND=noninteractive

# Install selected extensions and other stuff
RUN apt-get update \
    && apt-get -y --install-recommends install php7.3-pgsql php7.3-redis \
    && apt-get clean; rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/* /usr/share/doc/*

# Composer deps
RUN composer require sentry/sdk:2.0.3
RUN composer install
