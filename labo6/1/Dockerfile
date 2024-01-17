FROM node

COPY nodejs_ipshow /var/www/nodejs_ipshow

WORKDIR /var/www/nodejs_ipshow

RUN apt-get update && apt-get upgrade -y
RUN apt-get install npm -y

RUN npm i

EXPOSE 3000

CMD ["node", "index.js"]
