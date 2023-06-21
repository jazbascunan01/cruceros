# **<h1>CRUCEROS</h1>**
## **Página de Cruceros**

Esta es una aplicación web para explorar y administrar información sobre cruceros y tours. Proporciona una vista pública para que los usuarios puedan explorar los cruceros disponibles y reservar tours, así como una vista administrativa para gestionar los cruceros y tours.
## **<h2>Usuario y Contraseña del Administrador</h2>**

    Usuario: admin@admin.com
    Contraseña: admin
   
## **<h2>Relación de las Tablas de la Base de Datos</h2>**

La aplicación utiliza una base de datos MySQL con dos tablas principales: cruceros y tours. Estas tablas están relacionadas en una relación de uno a muchos (1:N), donde un crucero puede tener varios tours asociados, pero un tour puede tener solo un crucero asociado.
## **<h4>Tabla cruceros</h4>**

La tabla cruceros almacena la información de los cruceros disponibles. Tiene los siguientes campos:

    id (clave primaria): Identificador único del crucero.
    nombre: Nombre del crucero.
    compania: Compañía naviera a la que pertenece el crucero.
    capacidad: Capacidad máxima de pasajeros del crucero.
    origen: Origen del crucero.
    img1: Ruta de la imagen principal del crucero.
    img2: Ruta de una imagen adicional del crucero.
    descripcion: Descripción del crucero.
    detalles: Detalles adicionales del crucero.

## **<h4>Tabla tours</h4>**

La tabla tours almacena la información de los tours asociados a cada crucero. Tiene los siguientes campos:

    id (clave primaria): Identificador único del tour.
    id_crucero (clave foránea): Identificador del crucero al que pertenece el tour.
    destino: Destino del tour.
    fecha_salida: Fecha de salida del tour.
    precio: Precio del tour.
    descripcion: Descripción del tour.
    img1: Ruta de la imagen principal del tour.
    img2: Ruta de una imagen adicional del tour.
    detalles: Detalles adicionales del tour.

## **La relación entre las tablas se establece mediante la columna id_crucero en la tabla tours, que es una clave foránea que hace referencia al campo id en la tabla cruceros. Esto permite asociar varios tours a un crucero específico.**


## **<h4>Características</h4>**

- Vista Pública:
  - Explorar cruceros disponibles.
  - Ver detalles de cada crucero, incluyendo descripción, imágenes y tours relacionados.
  - Filtrar los tours en base a los cruceros disponibles.

- Vista Administrativa:
  - Iniciar sesión.
  - Administrar Cruceros:
    - Agregar nuevos cruceros.
    - Editar la información de cruceros existentes.
    - Eliminar cruceros.
  - Administrar Tours:
    - Agregar nuevos tours relacionados con los cruceros.
    - Editar información de tours existentes.
    - Eliminar tours.
