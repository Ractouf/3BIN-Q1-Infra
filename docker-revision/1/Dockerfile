FROM debian

RUN apt-get update
RUN apt-get install apache2 -y

COPY test.conf /etc/apache2/sites-available/000-default.conf
COPY test /var/www/test

EXPOSE 80

CMD apachectl -D FOREGROUND

