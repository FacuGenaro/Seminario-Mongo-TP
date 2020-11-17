1- Tener instalado Mongo

https://www.mongodb.com/try/download/community

2- Descargar la ultima version del driver PHP para Mongo

https://pecl.php.net/package/mongodb/1.8.2/windows

3- Descomprimir dicho driver en la carpeta de PHP (en la carpeta ext)

4- Agregar esto al archivo php.ini 
	extension=php_mongodb.dll

Fuente:	https://www.php.net/manual/en/mongodb.installation.windows.php

6- Poner el contenido del repo en la carpeta htdocs de XAMMP y correr el apache server del programa

7- Entrar desde Postman al directorio http://localhost/TP/ProductsRoute.php

- Get en esa Url va a traer todos los productos
- Si al final de la url ponemos "?id=xxxxxxxxxxx" donde las X sean la id de un producto, se hace un Get del producto
- Si ponemos Post y pasamos un Json se agrega a la BD
- Si ponemos Put y una id en la url además de pasar un Json, se actualiza en la BD 
- Si ponemos Delete y una id en la rul se elimina de la base de datos

Si cambiamos la url a http://localhost/TP/SalesRoute.php

- Get en esa Url va a traer todas las ventas
- Si al final de la url ponemos una Id obtenemos dicha venta
- Si hacemos Post y pasamos un Json con una lista de Productos, se crea el pedido y se suman los precios

Dejo adjunto en el repo un archivo Json con datos de prueba

Guias/Tutoriales:
http://ualmtorres.github.io/howtos/MongoDBPHP/
https://docs.mongodb.com/php-library/current/
https://youtu.be/NHrNGCJtQ0E?list=WL
https://github.com/FacuGenaro/TPE-Web2-Genaro
Y muchas cosas de StackOverflow (benditos sean)