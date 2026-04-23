FROM public.ecr.aws/docker/library/php:8.2-apache

WORKDIR /var/www/html
COPY . .
EXPOSE 80