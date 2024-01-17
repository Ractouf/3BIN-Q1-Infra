FROM node

COPY exoplanets /var/www/exoplanets

WORKDIR /var/www/exoplanets

RUN apt-get update && apt-get upgrade -y
RUN apt-get install npm -y

RUN npm i

EXPOSE 3000

CMD ["node", "app.js"]
