FROM debian

WORKDIR /app
COPY ./exoplanets/package.json ./exoplanets/package-lock.json ./

RUN apt-get update && apt-get upgrade -y
RUN apt-get install npm -y

RUN npm i

COPY . .

EXPOSE 80

CMD npm start
