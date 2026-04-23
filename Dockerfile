FROM public.ecr.aws/docker/library/php:8.2-apache

RUN echo "<h1>NOW IT WORKS 🚀</h1>" > /var/www/html/index.html
