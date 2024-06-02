FROM node:12.22.4-alpine

WORKDIR /app

COPY streaming ./

RUN yarn install

RUN apk add --no-cache ffmpeg

EXPOSE 8000
EXPOSE 1935

CMD ["node", "app.js"]
