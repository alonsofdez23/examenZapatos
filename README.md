## EXAMEN SEGUNDA EVALUACIÓN (2021/22) 7-MAR-2022
Escribir en **Laravel framework** una tienda online de zapatos.

El usuario podrá consultar el catálogo de zapatos que hay en la tienda. Si hay alguno que le interese, puede añadirlo a su carrito. En todo momento, podrá consultar su carrito a través de una opción en el menu principal de la aplicación (en la barra superior). También podrá eliminar artículos del carrito o vaciarlo completamente. Si finalmente decide comprar lo que tiene en el carrito, podrá hacerlo pulsando un botón.

Se pide:

1. (1,5 puntos) Crear la base de datos mediante migraciones con las siguientes tablas, incluyendo los modelos correspondientes y todas las relaciones adecuadas entre ellos:

    - *zapatos (**id**, **codigo**, denominacion, precio)*

        El código es el código de barras (13 dígitos) y debe ser único.
        
        El precio está en euros.

    - *carritos (**id**, **user_id**, **zapato_id**, cantidad)*

        Cada usuario tiene su propio carrito de la compra.

    - *facturas (**id**, **user_id**)*

    - *lineas (**id**, **factura_id**, **zapato_id**, cantidad)*

2. (1 puntos) Si el usuario está logueado, en el menu principal debe aparecer una opción "Ver carrito (*n*)" siendo *n* la cantidad total de artículos que hay en el carrito del usuario (NO la cantidad de artículos distintos que tiene, sino la cantidad total de unidades que hay en el carrito). Al pulsar esa opción, se deberá ir a la ruta `GET` `/carritos`.
3. (1 punto) Todas las acciones de las rutas que empiecen por `/carritos` deben ser accesibles únicamente si el usuario está logueado. En caso contrario, se requerirá al usuario que loguee previamente.
4. (2,5 puntos) En la ruta `GET` `/zapatos` deberá aparecer la lista de zapatos que hay en la tienda. Al lado de cada zapato debe aparecer un botón "Añadir al carrito" que, si se pulsa, añadirá ese zapato al carrito del usuario a través de la ruta `POST` `carritos/meter/{zapato}` y volverá de nuevo a `/zapatos`. Si ese zapato ya estaba en el carrito, se incrementará en uno su cantidad en el carrito.
5. (2 puntos) En la ruta `GET` `carritos`, mostrar el contenido del carrito del usuario. En cada línea de detalle del carrito, se debe indicar el zapato, el precio, la cantidad y el importe (cantidad x precio) de esa línea. Al lado aparecerán dos botones "+" y "-" para incrementar y decrementar la cantidad de esa línea (si es mediante AJAX, mejor). Si la cantidad de la línea queda a 0, debe borrar la línea.

---

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 2000 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[OP.GG](https://op.gg)**
- **[WebReinvent](https://webreinvent.com/?utm_source=laravel&utm_medium=github&utm_campaign=patreon-sponsors)**
- **[Lendio](https://lendio.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
