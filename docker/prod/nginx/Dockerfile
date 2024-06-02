# Build
FROM node:12.22.4-alpine AS build

WORKDIR /app

COPY oncafe-site-frontend ./

RUN yarn install

RUN yarn build

# Produção
FROM nginx:1.15-alpine

COPY --from=build /app/build /usr/share/nginx/html

WORKDIR /usr/share/nginx/html

COPY docker/prod/nginx/nginx.conf /etc/nginx/conf.d/default.conf

EXPOSE 80

CMD ["nginx", "-g", "daemon off;"]
