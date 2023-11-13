## Documentación de la API

**Descripción:**

Esta API proporciona acceso a información sobre juegos. Puedes realizar operaciones como obtener la lista de todos los juegos, obtener detalles de un juego específico, agregar un nuevo juego y actualizar información existente.

**Base URL**
```plaintext
http://localhost/entrega3/api/juegos
```
### Endpoints Disponibles

**Obtener todos los juegos**

*Método*: **GET**

*Ruta*: **juegos**

Parámetros de consulta:
- **order**: Campo por el cual ordenar la lista (id, juego, desarrollador). Por defecto, ordenado por id.
- **dir**: Dirección de ordenamiento (asc, desc). Por defecto, orden ascendente (asc).
- **filterBy**: Filtrar por compañía de desarrollador. Dejar en blanco para obtener todos los juegos.
- **page**: Número de página para la paginación. Por defecto, página 1.
- **limit**: Número de juegos por página. Por defecto, 5 juegos por página.

**Ejemplo de solicitud:**

**GET**

```plaintext
http://localhost/entrega3/api/juegos?order=id&dir=asc&filterBy=nombreCompania&page=1&limit=5
```
**Obtener detalles de un juego**

*Método*: **GET**

*Ruta*: **juegos/:ID**

Parámetros de ruta:
  - **:ID**: Identificador del juego.

**Ejemplo de solicitud:**

**GET**

```plaintext
http://localhost/entrega3/api/juegos/1
```
**Agregar un nuevo juego** 

*Método*: **POST**

*Ruta*: **juegos**

*Cuerpo de la solicitud (JSON):*

```javascript
    {
      "juego": "Nombre del Juego",
      "texto": "Descripción del Juego",
      "imagen": "URL de la imagen",
      "desarrollador": "Nombre de la Compañía Desarrolladora"
    }
```

**Ejemplo de solicitud:**

**POST**

```plaintext
  http://tu-servidor.com/entrega3/api/juegos
```
**Respuestas comunes**

- Éxito (200): La solicitud se completó correctamente.
```javascript
{
    "message": "Operación exitosa",
    "data": { ... }
  }
```
- Error 404 - No encontrado:
```javascript
{
    "error": "Recurso no encontrado",
    "message": "El juego con el ID especificado no existe"
  }
```
- Error 400 - Solicitud incorrecta:
```javascript
{
    "error": "Recurso no encontrado",
    "message": "El juego con el ID especificado no existe"
  }
```

