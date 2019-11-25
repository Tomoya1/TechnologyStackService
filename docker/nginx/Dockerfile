FROM nginx:1.17-alpine

ENV PHP_APP_HOST=127.0.0.1

#ADD docker/nginx/default.conf /etc/nginx/default.conf

RUN envsubst '$$PHP_APP_HOST'< /etc/nginx/conf.d/default.template > /etc/nginx/conf.d/default.conf