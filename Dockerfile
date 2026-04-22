FROM public.ecr.aws/docker/library/php:8.2-apache

COPY . /var/www/html/

EXPOSE 80
