FROM wordpress

WORKDIR /var/www/html

ARG USER_ID=1000
ARG GROUP_ID=1000

RUN usermod -u $USER_ID www-data && groupmod -g $GROUP_ID www-data
