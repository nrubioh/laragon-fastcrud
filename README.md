# Fast Laravel CRUD - Task Management
**Switch to:**
[Español](#fast-laravel-crud---gestión-de-tareas)

This README documents a simple Laravel 10 project that implements a **CRUD (Create, Read, Update, Delete)** system for managing tasks.

### Features:

* **Clean and intuitive interface**: Built with Bootstrap 5, providing a sleek and responsive user experience.
* **Three key views**:
    * **Index**: View a list of all tasks with status and due date information.
    * **Create**: Add new tasks with title, description, and optional due date and status.
    * **Edit**: Update existing tasks with the ability to modify all details.
* **Database connection**: Connected to a database table named `tasks`, allowing persistent storage and retrieval of task data.
* **Task data**: Manage tasks with the following fields:
    * **Title**: Descriptive name of the task.
    * **Description**: Optional detailed explanation of the task.
    * **Due Date**: Optional deadline for completing the task.
    * **Status**: Choose from `Pending`, `In progress...`, or `Completed` to track task progress.
* **Basic CRUD functionalities**: Create, read, update, and delete tasks through dedicated routes and actions.

### Project Structure:

- `vendor`: Houses Laravel and other dependencies.
- `resources`: Contains view files for each layout and page.
        - `views`:
            - `layouts`: Base layout (`base.blade.php`) used by all pages.
            - `tasks`: Individual views for specific actions.
                - `index.blade.php`: Display list of tasks.
                - `create.blade.php`: Add a new task.
                - `edit.blade.php`: Update an existing task.
- `routes`: Route definition files for different actions (e.g., view tasks, create task, etc.).
- `app`: Application core files, including controllers, models, and configurations.
        - `Models`: Contains the `Task` model representing data stored in the `tasks` table.
        - `Controllers`: Houses controllers for managing different CRUD operations.
        - `Http`: Route configuration files for specific actions.
- `Migrations`: Contains the database migration file for the `tasks` table.

### Installation and Usage:

1. Clone the repository or download the zip file.
2. Install Laravel dependencies using `composer install`.
3. Set up the database connection by configuring `.env` file and creating the `tasks` table using the provided migration file.
4. Run Laravel migrations with `php artisan migrate`.
5. Start the Laravel development server with `php artisan serve`.
6. Access the application in your browser at http://localhost:8000.

![List](./imgrd/fast_laravel_crud.png?width=70)
![Creation](./imgrd/fast_laravel_crud2.png?width=70)
![SQL](./imgrd/fast_laravel_crud.png?width=70)

### Further Development:

This project provides a basic CRUD system for managing tasks. You can extend it further by:

* Implementing user authentication and authorization for secure access.
* Adding filters and search options to refine task listing.
* Integrating task priorities and categories for advanced organization.
* Building notification systems for reminders and due dates.

This is just a starting point. Feel free to explore and enhance your CRUD system to fit your specific needs and preferences!

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

---

# Fast Laravel CRUD - Gestión de Tareas

Este README documenta un proyecto simple de Laravel 10 que implementa un sistema **CRUD (Create, Read, Update, Delete)** para la gestión de tareas.

### Características:

* **Interfaz limpia e intuitiva**: Construida con Bootstrap 5, proporcionando una experiencia de usuario elegante y receptiva.
* **Tres vistas clave**:
    * **Índice**: Muestra una lista de todas las tareas con información sobre el estado y la fecha de vencimiento.
    * **Crear**: Agrega nuevas tareas con título, descripción y fecha de vencimiento y estado opcionales.
    * **Editar**: Actualiza tareas existentes con la capacidad de modificar todos los detalles.
* **Conexión a la base de datos**: Conectada a una tabla de base de datos llamada `tasks`, permitiendo el almacenamiento y recuperación persistente de datos de tarea.
* **Datos de tarea**: Gestiona tareas con los siguientes campos:
    * **Título**: Nombre descriptivo de la tarea.
    * **Descripción**: Explicación detallada opcional de la tarea.
    * **Fecha de vencimiento**: Plazo opcional para completar la tarea.
    * **Estado**: Elige entre `Pendiente`, `En progreso...` o `Completada` para realizar un seguimiento del progreso de la tarea.
* **Funcionalidades básicas de CRUD**: Crear, leer, actualizar y eliminar tareas a través de rutas y acciones dedicadas.

### Estructura del Proyecto:

- `vendor`: Contiene Laravel y otras dependencias.
- `resources`: Contiene archivos de vista para cada diseño y página.
        - `views`:
            - `layouts`: Diseño base (`base.blade.php`) utilizado por todas las páginas.
            - `tasks`: Vistas individuales para acciones específicas.
                - `index.blade.php`: Muestra la lista de tareas.
                - `create.blade.php`: Agrega una nueva tarea.
                - `edit.blade.php`: Actualiza una tarea existente.
- `routes`: Archivos de definición de rutas para diferentes acciones (por ejemplo, ver tareas, crear tarea, etc.).
- `app`: Archivos centrales de la aplicación, incluidos controladores, modelos y configuraciones.
        - `Models`: Contiene el modelo `Task` que representa los datos almacenados en la tabla `tasks`.
        - `Controllers`: Contiene controladores para gestionar diferentes operaciones CRUD.
        - `Http`: Archivos de configuración de rutas para acciones específicas.
- `Migrations`: Contiene el archivo de migración de la base de datos para la tabla `tasks`.

### Instalación y Uso:

1. Clona el repositorio o descarga el archivo zip.
2. Instala las dependencias de Laravel con `composer install`.
3. Configura la conexión a la base de datos mediante la configuración del archivo `.env` y crea la tabla `tasks` utilizando el archivo de migración proporcionado.
4. Ejecuta las migraciones de Laravel con `php artisan migrate`.
5. Inicia el servidor de desarrollo de Laravel con `php artisan serve`.
6. Accede a la aplicación en tu navegador en http://localhost:8000.

![Lista](./imgrd/fast_laravel_crud.png?width=70)
![Creación](./imgrd/fast_laravel_crud2.png?width=70)
![SQL](./imgrd/fast_laravel_crud.png?width=70)

### Desarrollo Adicional:

Este proyecto proporciona un sistema básico de CRUD para gestionar tareas. Puedes extenderlo aún más:

* Implementando autenticación y autorización de usuarios para un acceso seguro.
* Agregando filtros y opciones de búsqueda para refinar la lista de tareas.
* Integrando prioridades y categorías de tareas para una organización avanzada.
* Construyendo sistemas de notificación para recordatorios y fechas de vencimiento.

Esto es solo un punto de partida. ¡Siéntete libre de explorar y mejorar tu sistema CRUD para adaptarlo a tus necesidades y preferencias específicas!

## Licencia

El framework Laravel es software de código abierto con licencia [MIT](https://opensource.org/licenses/MIT).
