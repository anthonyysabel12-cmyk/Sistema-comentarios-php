# Portal Comercial - Sistema de Comentarios

Práctica grupal de Desarrollo Web: Sistema para recibir, almacenar y publicar comentarios usando HTML, CSS (Bootstrap), JavaScript y PHP.

## Enlace de Github

- https://github.com/anthonyysabel12-cmyk/Sistema-comentarios-php.git

## Enlaces de CodeSandbox

- Enlace de visualización: https://vr4r5l-8080.csb.app/
- Enlace de estructura: https://codesandbox.io/p/devbox/vr4r5l

## Datos del trabajo

| Campo | Información |
|---|---|
| Nombre del trabajo | Proyecto Grupal - Deja tu comentario |
| Asignatura | Programación Web |
| Profesor | Daniel Parra |
| Fecha | 28 de noviembre del 2026 |
| Enlace del proyecto (CodeSandbox) | [Pegar aquí el enlace cuando esté publicado] |

## Integrantes y responsabilidades

| # | Integrante | Responsabilidad | Estado |
|---|---|---|---|
| 1 | Anthony Anderson Ysabel Alcántara 2023-1938 | Diseño y apariencia (plantilla Bootstrap, menú, estilos) | ✅ Terminado |
| 2 | Yemary De La Cruz 2025-1244 | Formulario de comentarios y validación con JavaScript | ✅ Terminado |
| 3 | Julio Enrique Rijo Cabral 2025-0018 | Backend: recibir y almacenar los comentarios con PHP | ✅ Terminado |
| 4 | Luis Kevin Díaz 2025-2012 | Mostrar los comentarios publicados y actualizar el contador | ✅ Terminado |
| 5 | Tom Samuel Natera gil 2024-1806 | Publicación en CodeSandbox y pruebas finales | ✅ Terminado |

## Lo que se ha hecho

### Integrante 1: Diseño y apariencia
- ✅ Plantilla basada en Bootstrap 5.
- ✅ Menú de navegación (Inicio, Tiendas, Categorías, Ofertas y Contactos).
- ✅ Estilos personalizados en `css/estilos.css`.
- ✅ Estructura visual de la página (`index.php`).

### Integrante 2: Formulario de comentarios
- ✅ Campo para escribir el nombre.
- ✅ Área para escribir el comentario.
- ✅ Botón Enviar.
- ✅ Validación con JavaScript (`js/validacion.js`): los campos no pueden estar vacíos y se marcan en rojo o verde.
- ✅ El formulario envía por método POST a `guardar_comentario.php` con los campos `nombre` y `comentario`.

### Integrante 3: Backend (PHP)
- ✅ Recibir y validar `nombre` y `comentario` en `guardar_comentario.php`.
- ✅ Guardar los comentarios con PDO y SQLite y redirigir a `index.php`.

### Integrante 4: Visualización de comentarios
- ✅ Leer los comentarios guardados.
- ✅ Mostrarlos en la zona "Comentarios publicados" de `index.php`.
- ✅ Actualizar el contador "Total" con la cantidad real de comentarios.

### Integrante 5: Publicación y pruebas
- ✅ Subir el proyecto a CodeSandbox.
- ✅ Copiar el enlace y pegarlo en la tabla de datos del trabajo.
- ✅ Probar el sistema completo en el servidor remoto.

## Estructura del proyecto

```
Sistema-comentarios-php/
├── index.php                  # Página principal
├── guardar_comentario.php     # Recibe y guarda los comentarios
├── conexion.php               # Conexión y esquema SQLite
├── css/
│   └── estilos.css            # Estilos personalizados
├── js/
│   └── validacion.js          # Validación del formulario
└── README.md
```

## Cómo ejecutar el proyecto en local

Se requiere PHP con las extensiones PDO y PDO SQLite habilitadas. El directorio
que contiene el proyecto debe permitir que PHP cree una carpeta hermana llamada
`<nombre-del-proyecto>-data`, donde se guarda `comentarios.sqlite`. Configura el
servidor para que solo el directorio del proyecto sea público, no su directorio
padre ni la carpeta de datos.

```bash
php -S localhost:8000
```

Luego abre http://localhost:8000/index.php en el navegador.

### Consulta para el integrante 4

Incluye `conexion.php` y utiliza `obtenerConexion()` para consultar la tabla
`comentarios`: `id` (entero), `nombre` (texto), `comentario` (texto) y `fecha`
(texto UTC en formato `YYYY-MM-DD HH:MM:SS`). Por ejemplo:

```php
require_once __DIR__ . '/conexion.php';
$comentarios = obtenerConexion()->query(
    'SELECT id, nombre, comentario, fecha FROM comentarios ORDER BY id DESC'
)->fetchAll(PDO::FETCH_ASSOC);
```

Al mostrar nombre o comentario en HTML, escapa ambos valores con
`htmlspecialchars` para evitar que se interpreten como código HTML.

## Tecnologías

- HTML5
- CSS3 y Bootstrap 5.3
- JavaScript
- PHP
