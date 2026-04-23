FROM public.ecr.aws/docker/library/php:8.2-apache

WORKDIR /var/www/html

COPY index.php /var/www/html/

EXPOSE 80
