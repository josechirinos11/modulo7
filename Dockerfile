# Usar una imagen base de PHP
FROM php:7.4-apache

# Copiar el contenido del repositorio al directorio raíz del contenedor
COPY . /var/www/html/

# Exponer el puerto 80 para acceder a la app web
EXPOSE 80
