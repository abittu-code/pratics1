FROM public.ecr.aws/docker/library/php:8.2-apache

RUN echo "<h1>APP IS DEFINITELY WORKING 🚀</h1>" > /var/www/html/index.html

EXPOSE 80
