# Build
FROM node:12.22.4-alpine AS build

WORKDIR /app

COPY oncafe-site-backend ./

RUN yarn install

RUN yarn dev-build

# Produção
FROM node:12.22.4-alpine

COPY --from=build /app /app

WORKDIR /app

EXPOSE 3001

CMD npx sequelize-cli db:create && \
	  npx sequelize-cli db:migrate && \
	  npx sequelize-cli db:seed:all && \
	  node build/index.js
