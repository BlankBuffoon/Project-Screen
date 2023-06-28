# base image
FROM node:16-alpine

# Create app directory
WORKDIR /usr/src/app

# Install app dependencies
COPY . .

RUN npm install

EXPOSE 8080

CMD [ "npm", "run", "dev"]
