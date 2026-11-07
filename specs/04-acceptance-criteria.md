# Criterios de aceptación

## Incremento 0 — Proyecto base

- **AC-0001:** Dado PHP 8.2 o superior, cuando ejecuto `php -S localhost:8000 -t public`, entonces la página de inicio responde sin errores PHP.
- **AC-0002:** Dado un navegador, cuando abro la raíz del servidor, entonces veo TaskFlow, la navegación, el título, el área de tareas y “Aún no tienes tareas”.
- **AC-0003:** Dado un viewport móvil, cuando cargo la página, entonces el contenido se reorganiza sin desbordamiento horizontal.
- **AC-0004:** Dado el documento HTML, cuando el navegador solicita los recursos, entonces CSS y JavaScript se cargan desde `public/assets/`.
- **AC-0005:** Dado `data/tasks.json`, cuando se valida su contenido, entonces es el arreglo JSON vacío `[]`.
- **AC-0006:** Dado el Incremento 0, cuando uso la interfaz, entonces no puedo ejecutar operaciones de crear, listar desde datos, completar, editar, eliminar o filtrar tareas.
- **AC-0007:** Dado el código y la documentación, cuando se comparan, entonces README y especificaciones describen solo las capacidades implementadas del Incremento 0 y las futuras como pendientes.

Los criterios de aceptación de SPEC-001 a SPEC-008 se mantienen junto a cada especificación en `01-requirements.md`. No se consideran satisfechos hasta que su incremento se implemente y valide.

