FROM php:7.4-apache

ARG flag
ENV FLAG=$flag

ARG user_password
ENV USER_PASSWORD=$user_password

ARG admin_password
ENV ADMIN_PASSWORD=$admin_password

COPY ./app /var/www/html