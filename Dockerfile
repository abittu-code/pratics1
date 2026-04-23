FROM public.ecr.aws/docker/library/php:8.2-apache

WORKDIR /var/www/html

RUN echo "<h1>STATIC TEST WORKING ✅</h1>" > /var/www/html/index.html

EXPOSE 80
