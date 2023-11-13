FROM debian
LABEL maintainer="francois"
LABEL description="sitehtml"
LABEL version="1.0"
RUN apt-get update && apt-get upgrade -y
RUN apt-get install apache2 -y
COPY siteHTML.conf /etc/apache2/sites-available/000-default.conf
COPY ./syllabusHTML /var/www/siteHTML
EXPOSE 80
CMD apachectl -D FOREGROUND
