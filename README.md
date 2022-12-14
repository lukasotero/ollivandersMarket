# Ollivander's Market :mage:

_Junto con un compañero decidimos crear desde cero un proyecto en el cual se pueda desempeñar un carrito de compras con la temática de Harry Potter. El mismo fue pedido para la materia Producción Web._

## Construido con 🛠️

_Tecnologias utilizadas_

- [Javascript](https://devdocs.io/javascript/) - Vanilla JS (sin frameworks)
- [PHP](https://www.php.net/) - Versión: 8.1.6
- [MariaDB](https://mariadb.org/) - Versión: 10.4.24
- [Bootstrap](https://getbootstrap.com/) - Versión: 5.2 (utilizado en el dashboard para el diseño rápido)

## Configuraciones previas :gear:

Ya que el proyecto no se encuentra en un servidor se deberan aplicar algunas configuraciones previas para su correcto funcionamiento.

**_Para la base de datos:_** <br>
:point_right: El archivo SQL se encuentra en la raiz del repositorio `database/ollivanders_market.sql` <br>
:point_right: Las configuraciones estan en `assets/config/config.php` <br>

**_Para el envio del formulario:_** <br>
:point_right: Se deberá cambiar la dirección de correo electrónico donde el servidor o localhost apunta. Este archivo se encuentra en la raiz del proyecto `contacto.php`, más precisamente en la linea 24 del mismo. <br>

**_Para el servidor:_** <br>
:point_right: El archivo `.htaccess` se encuentra en la raiz del repositorio. <br>

## Consideración previa :raised_hands:

:point_right: En la base de datos no existe ningun usuario, por lo tanto, únicamente el primer usuario que se registre va a ser el `administrador`, los demas usuarios van a tener el rol de `comprador`.
