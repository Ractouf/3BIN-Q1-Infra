FROM debian

RUN apt-get update && apt-get upgrade -y
RUN apt-get install apache2 -y

COPY siteHTML.conf /etc/apache2/sites-available/000-default.conf
COPY ./syllabusHTML /var/www/siteHTML

EXPOSE 80

CMD apachectl -D FOREGROUND
