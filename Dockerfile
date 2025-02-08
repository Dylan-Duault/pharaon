FROM serversideup/php:8.3-fpm-nginx

USER root

# Install node lts
RUN apt-get update -y
RUN apt-get install -y curl

run curl -fsSL https://deb.nodesource.com/setup_20.x | bash -

RUN apt-get install -y nodejs

USER www-data