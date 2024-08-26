FROM node:22-alpine3.20

RUN apk update

RUN apk add git

WORKDIR /usr/src/app