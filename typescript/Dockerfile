FROM node:16-alpine

CMD ["sh"]

ENV PATH=${PATH}:/app/node_modules/.bin

RUN apk add --no-cache entr just

WORKDIR /app

USER node

