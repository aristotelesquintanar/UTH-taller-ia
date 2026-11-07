# Visión y alcance de TaskFlow

## Visión

TaskFlow es una aplicación web educativa para administrar tareas personales. Sirve como base de un taller universitario de Desarrollo de Software con IA, donde los estudiantes desarrollarán capacidades progresivas mediante Specification-Driven Development (SDD) y GitHub Copilot CLI.

## Usuarios

- Persona que organiza sus tareas personales.
- Estudiante que implementa incrementos guiado por especificaciones.

## Alcance del producto final

El producto final permitirá crear, listar, completar, editar, eliminar y filtrar tareas, con persistencia local en JSON y manejo de validaciones y errores.

## Alcance implementado: Incremento 0

- Página de inicio de TaskFlow servida por PHP.
- Encabezado, navegación informativa, área de tareas y estado vacío.
- Interfaz responsiva y recursos CSS/JavaScript locales.
- Archivo `data/tasks.json` inicializado con un arreglo vacío.
- Estructura inicial para presentación, lógica futura, datos, pruebas y especificaciones.

## Fuera del alcance del Incremento 0

- CRUD de tareas.
- Lectura o escritura de `tasks.json`.
- Formularios, rutas, peticiones HTTP o controles operativos de tareas.
- Autenticación, cuentas, base de datos, dependencias externas y framework.

