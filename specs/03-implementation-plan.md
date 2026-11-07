# Plan de implementación por incrementos

| Incremento | Resultado | Especificaciones | Dependencias |
|---|---|---|---|
| 0 | Base visual, documentación SDD, estructura y JSON vacío | Base del proyecto | Ninguna |
| 1 | Creación y listado con la primera persistencia JSON segura | SPEC-001, SPEC-002, SPEC-007, SPEC-008 | 0 |
| 2 | Cambio de estado de tareas | SPEC-003, SPEC-007, SPEC-008 | 1 |
| 3 | Edición y eliminación | SPEC-004, SPEC-005, SPEC-007, SPEC-008 | 1 |
| 4 | Filtros y mejoras de UX | SPEC-006, SPEC-008 | 1, 2, 3 |
| 5 | Pruebas, refactorización y revisión de calidad | Todas las especificaciones | 1, 2, 3, 4 |

## Incremento 0

1. Crear la estructura mínima y proteger `data/` dejándolo fuera de `public/`.
2. Documentar visión, requisitos, arquitectura, criterios y la ruta de incrementos.
3. Crear la página de inicio, estilos responsivos y JavaScript sin operaciones de tareas.
4. Inicializar `data/tasks.json` con `[]`.
5. Crear las instrucciones persistentes para GitHub Copilot y el README.
6. Ejecutar las validaciones del Incremento 0 y reportar las no ejecutables como pendientes.

## Secuencia de aprendizaje sugerida

1. Leer SPEC-001, SPEC-002, SPEC-007 y SPEC-008 antes de implementar el Incremento 1.
2. Convertir criterios Given/When/Then en pruebas y validaciones manuales.
3. Implementar una capacidad por incremento, actualizar especificaciones y validar antes de continuar.

