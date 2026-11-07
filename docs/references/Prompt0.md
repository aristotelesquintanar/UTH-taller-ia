Actúa como un arquitecto de software senior, especialista en PHP, ingeniería de software y Specification-Driven Development (SDD).

CONTEXTO
Estamos preparando un taller práctico de Desarrollo de Software con IA para estudiantes universitarios de último semestre de Ingeniería en Sistemas.

El proyecto se llama "TaskFlow" y es una aplicación web sencilla para administrar tareas personales. El proyecto será utilizado como punto de partida para que los estudiantes desarrollen nuevas funcionalidades con GitHub Copilot CLI y VS Code, siguiendo SDD.

OBJETIVO
Preparar un repositorio base funcional, pedagógico, simple y extensible, sin implementar todavía las funcionalidades principales del gestor de tareas. Es fundamental dejar trabajo real para realizar durante el taller.

STACK OBLIGATORIO
- PHP 8.2 o superior, sin framework.
- HTML5, CSS3 y JavaScript vanilla.
- Persistencia futura mediante archivo JSON local, sin base de datos.
- Sin Laravel, React, Vue, npm frontend, Composer ni servicios externos.
- Compatible con el servidor de desarrollo integrado de PHP.
- VS Code como IDE y Git como control de versiones.

METODOLOGÍA OBLIGATORIA: SDD
Implementa el proceso en el siguiente orden:
1. Visión y alcance.
2. Especificaciones funcionales y no funcionales.
3. Criterios de aceptación verificables.
4. Diseño y decisiones de arquitectura.
5. Plan de implementación por incrementos.
6. Implementación exclusivamente del proyecto base.
7. Validación contra los criterios de aceptación correspondientes.

Primero analiza y propón un plan. NO escribas código ni generes archivos de implementación hasta que yo apruebe explícitamente el plan.

ALCANCE FUNCIONAL DEL PROYECTO FINAL (DOCUMENTAR, NO IMPLEMENTAR)
- Crear tareas.
- Listar tareas.
- Marcar tareas como completadas.
- Editar tareas.
- Eliminar tareas.
- Filtrar tareas por estado.
- Persistir tareas en JSON.
- Validar entradas y manejar errores.

ALCANCE DEL PROYECTO BASE (SÍ IMPLEMENTAR)
- Aplicación PHP que arranque y muestre correctamente una página de inicio.
- Interfaz limpia, responsiva y presentable llamada TaskFlow.
- Encabezado, navegación sencilla, título y área preparada para listar tareas.
- Estado vacío amigable: "Aún no tienes tareas".
- Componentes o secciones visuales preparados para futuras funcionalidades.
- Estilos CSS organizados y JavaScript mínimo.
- Estructura preparada para separar presentación, lógica y persistencia futura, sin sobrediseñar.
- Un archivo data/tasks.json inicializado con [] y sin información sensible.
- Ningún CRUD de tareas implementado todavía.
- No implementar formularios o botones funcionales de tareas antes del taller. Si hay controles visuales, dejarlos claramente deshabilitados o identificados como pendientes.
- Código PHP seguro, legible y apropiado para estudiantes.

ARQUITECTURA Y CARPETAS
Propón una estructura pequeña como:
/
  public/
    index.php
    assets/
      css/
      js/
  src/
  data/
    tasks.json
  specs/
    00-vision.md
    01-requirements.md
    02-architecture.md
    03-implementation-plan.md
    04-acceptance-criteria.md
  tests/
  .github/
    copilot-instructions.md
  README.md
  .gitignore

Puedes ajustar la estructura si existe una justificación técnica y pedagógica clara. No generes capas, clases o interfaces innecesarias. Deja preparadas las carpetas vacías solo si aportan valor, utilizando archivos .gitkeep cuando corresponda.

ESPECIFICACIONES
Cada funcionalidad futura debe documentarse con:
- Identificador (SPEC-001, SPEC-002, etc.).
- Objetivo.
- Historia de usuario.
- Reglas de negocio.
- Criterios de aceptación en formato Given/When/Then.
- Casos límite.
- Estado: pendiente, en progreso o implementada.

Distingue explícitamente el alcance del proyecto base de los incrementos futuros. No marques como implementada una funcionalidad que solo está documentada.

INSTRUCCIONES PARA COPILOT
Crea .github/copilot-instructions.md con reglas persistentes:
- Leer especificaciones relevantes antes de modificar código.
- No implementar funcionalidades sin especificación.
- Proponer cambios en la especificación cuando existan ambigüedades.
- Trabajar en incrementos pequeños.
- Respetar la arquitectura existente.
- No agregar dependencias sin justificación.
- Aplicar validación de entradas, escape de salidas y buenas prácticas de seguridad.
- Mantener documentación y pruebas sincronizadas con el código.
- No declarar una funcionalidad terminada sin comprobar sus criterios de aceptación.
- No adelantarse a funcionalidades posteriores del taller.

DOCUMENTACIÓN
El README debe incluir requisitos, instalación, estructura, comandos para iniciar el servidor, explicación resumida de SDD, funcionalidades implementadas, funcionalidades pendientes y ruta sugerida de aprendizaje.

PLAN DE IMPLEMENTACIÓN
Organiza los incrementos:
Incremento 0: proyecto base y documentación SDD.
Incremento 1: creación y listado de tareas.
Incremento 2: completar tareas.
Incremento 3: edición y eliminación.
Incremento 4: filtros y mejoras de UX.
Incremento 5: pruebas, refactorización y revisión de calidad.

Estos incrementos son una propuesta inicial; documenta dependencias y ordénalos de manera que puedan desarrollarse progresivamente durante el taller.

VALIDACIÓN
Para el Incremento 0:
- La aplicación inicia con php -S localhost:8000 -t public.
- La página carga sin errores PHP.
- El diseño se adapta a dispositivos móviles.
- Los recursos CSS y JS se cargan correctamente.
- tasks.json contiene un arreglo JSON válido y vacío.
- No se puede ejecutar todavía ninguna operación CRUD.
- Las especificaciones y el README son consistentes con el código.
- Ejecuta comprobaciones de sintaxis PHP cuando el entorno lo permita.
- Si una validación no puede ejecutarse, repórtala como pendiente, no como exitosa.

ENTREGABLES
Al finalizar la implementación, proporciona:
1. Resumen de archivos creados.
2. Árbol del proyecto.
3. Decisiones técnicas principales.
4. Resultado de validaciones ejecutadas.
5. Funcionalidades implementadas y pendientes.
6. Comando exacto para iniciar la aplicación.
7. Siguiente especificación que deberán desarrollar los estudiantes.

INSTRUCCIÓN FINAL
Comienza exclusivamente con el análisis de requisitos, especificaciones y plan del Incremento 0. Muéstrame el plan, identifica dudas o riesgos relevantes y espera mi aprobación antes de generar el proyecto. No implementes aún el CRUD.