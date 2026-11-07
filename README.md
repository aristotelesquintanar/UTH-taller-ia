# TaskFlow

Base inicial para un taller práctico de Desarrollo de Software con IA. TaskFlow evolucionará hacia una aplicación web para administrar tareas personales siguiendo Specification-Driven Development (SDD).

## Requisitos

- PHP 8.2 o superior.
- Un navegador web moderno.
- Git y VS Code para el taller.

No se requieren Composer, npm, frameworks, base de datos ni servicios externos.

## Iniciar la aplicación

Desde la raíz del proyecto:

```bash
php -S localhost:8000 -t public
```

Después, abre [http://localhost:8000](http://localhost:8000).

## Estructura

```text
public/             Punto de entrada y recursos web
src/                Lógica futura de aplicación
data/tasks.json     Persistencia futura en JSON
specs/              Fuente de verdad SDD
tests/              Pruebas futuras
docs/references/    Material pedagógico de referencia
.github/            Instrucciones persistentes para Copilot
```

## SDD en este proyecto

Antes de cada cambio se consulta la especificación relevante. La especificación define objetivo, reglas, criterios Given/When/Then y casos límite; el código implementa solo ese alcance; después se valida contra esos criterios. Consulta `specs/` como fuente de verdad y `specs/03-implementation-plan.md` para el orden de trabajo.

## Implementado

- Página de inicio PHP de TaskFlow.
- Interfaz responsiva con navegación, área de tareas y estado vacío.
- Recursos CSS y JavaScript locales.
- Archivo `data/tasks.json` vacío y válido.
- Documentación SDD e instrucciones para Copilot.

## Pendiente

Crear, listar, completar, editar, eliminar y filtrar tareas; leer y escribir JSON; validación de entradas, manejo de errores y pruebas de las funcionalidades. Ninguna operación CRUD está implementada en esta base.

## Ruta sugerida de aprendizaje

1. Leer `specs/01-requirements.md`, empezando por SPEC-001, SPEC-002, SPEC-007 y SPEC-008.
2. Convertir los criterios de aceptación en comprobaciones antes de modificar código.
3. Desarrollar el Incremento 1 y validar sus criterios.
4. Continuar con los incrementos en `specs/03-implementation-plan.md`.

