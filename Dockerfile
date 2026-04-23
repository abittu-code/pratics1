>>>>>>> main
FROM php:8.2-apache

COPY . /var/www/html/

EXPOSE 80
=======
FROM public.ecr.aws/docker/library/php:8.2-apache

WORKDIR /var/www/html

COPY . .

RUN echo "FILES INSIDE CONTAINER:" && ls -l /var/www/html
>>>>>>> 84ff4c56290c40503e682c89203e55135e94d902
