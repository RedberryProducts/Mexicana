FROM ubuntu:20.04

WORKDIR /app

RUN \
    apt-get update \
    && DEBIAN_FRONTEND=noninteractive apt-get install software-properties-common -y \
    && DEBIAN_FRONTEND=noninteractive add-apt-repository ppa:ondrej/php \
    && apt-get install php8.0 php8.0-mbstring php8.0-xml php8.0-mysql -y \
    && apt-get install curl zip unzip mysql-client -y

RUN rm /etc/apache2/sites-*/*
COPY ./devcontainer/site.conf /etc/apache2/sites-available/
RUN a2ensite site.conf && a2enmod rewrite

CMD [ "apachectl", "-D", "FOREGROUND" ]