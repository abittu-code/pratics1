FROM public.ecr.aws/docker/library/php:8.2-apache

WORKDIR /var/www/html

COPY . .

RUN echo "FILES INSIDE CONTAINER:" && ls -l /var/www/html
