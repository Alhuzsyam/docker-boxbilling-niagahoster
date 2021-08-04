FROM alpine:3.11

RUN apk update && apk upgrade && apk add nginx

COPY config/default.conf /etc/nginx/conf.d/

COPY config/nginx-landing.conf /etc/nginx/nginx.conf

COPY src/*.php /usr/share/nginx/localhost/htdocs
COPY src/*.html /usr/share/nginx/localhost/htdocs
COPY src/*.html /usr/share/nginx/html/
COPY src/*.jpg /usr/share/nginx/html/
COPY src/*.png /usr/share/nginx/html/
COPY src/*.svg /usr/share/nginx/html/
COPY src/*.css /usr/share/nginx/html/
COPY src/*.json /usr/share/nginx/html/

EXPOSE 80

STOPSIGNAL SIGTERM

CMD ["nginx","-g","daemon off;"]