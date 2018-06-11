FROM phpdockerio/php56-fpm:latest
WORKDIR "/pub/www/nornik"

# Fix debconf warnings upon build
ARG DEBIAN_FRONTEND=noninteractive

# Install selected extensions and other stuff
RUN apt-get update \
    && apt-get -y install sendmail php5-memcached php5-mysql php5-imap php5-xdebug php5-gd freetype* \
    && apt-get clean; rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/* /usr/share/doc
