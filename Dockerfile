FROM serversideup/php:8.3-fpm-nginx

USER root

# Install node lts
RUN apt-get update -y
RUN apt-get install -y curl

run curl -fsSL https://deb.nodesource.com/setup_20.x | bash -

RUN apt-get install -y nodejs

# Create a user vhan thatbelongs to group www-data and has uid 1000
RUN useradd -M -u 1000 vhan -g www-data
RUN mkdir -p /home/vhan
RUN chown -R vhan:www-data /home/vhan

USER www-data