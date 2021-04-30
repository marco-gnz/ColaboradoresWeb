# Proyecto Colaboradores

## Instrucciones para desplegar (Local)

1. Clonar o descargar proyecto y almacenarlo en la carpeta del servidor local
2. Ejecutar composer install para instalar todas las dependencias
3. Ejecutar npm install para instalar modulos de npm
4. Ejecutar npm run dev
5. Ejecutar cp .env.example .env para generar un nuevo archivo .env (Se almacenan las variables de entorno, tales como name_bd, user_bd, password_bd, keys_mail, etc)
6. Ejecutar php artisan key:generate para generar una nueva key al archivo .env
7. Crear bd en su Administrador de bd.
8. En archivo .env ingresar/configurar su bd creada.
9. Ejecutar php artisan migrate para migrar tablas a la bd.
10. Ejecutar php artisan db:seed para migrar datos ya almacenados en código a las tablas.

