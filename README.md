
# Project Laravel


## Resumen

Aplicación web realizada con laravel.
Cuenta con 3 CRUD pertenecientes a las entidades siguientes:

 - Usuarios
 - Moviles
 - Portatiles
 
Tiene dos roles que ven más o menos opciones:
                                        
            'email' => 'sup@sup.sup', pass=>'supervisor'

            'name' => 'usuario', 'email' => 'usu@usu.usu',
 
## Intrucciones

En primer lugar renombramos env.example a env. y modificamos nuestros datos por ejemplo a la base de datos homestead, usuario root y contraseña vacia (en mi caso).

Abro xamp y activo apache y mysql, y voy pulso admin de mysql para crear una base de datos llamada homestead, en mi caso el nombre que le voy a dar.

Por consola introducirmos `composer install`, tardara un rato.

Por consola introducirmos `php artisan key:generate`, que generara una nueva key en el env.

Por consola introducirmos `php artisan migrate` para migrar y `php artisan migrate --seed` para tener datos en las tablas creadas.

Tras esto podemos utilizar la ruta de localhost seguido del nombre de la carpeta del proyecto (si esta en httdocs) o `php artisan serve` lo que nos genera un servidor con `http://localhost:8000/`


