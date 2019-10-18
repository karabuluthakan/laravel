FROM phpdockerio/php73-fpm:latest

# Fix debconf warnings upon build
ARG DEBIAN_FRONTEND=noninteractive

# Install selected extensions and other stuff
RUN apt-get update \
    && apt-get -y --no-install-recommends install vim php7.3-memcache php7.3-pgsql  php7.3-dba php7.3-odbc php-ssh2 php-yaml php7.3-bcmath php7.3-gd php7.3-gmp php7.3-imap php-pear php7.3-cli php7.3-exif php7.3-fpm php7.3-gd php7.3-mbstring

WORKDIR "/blog"
