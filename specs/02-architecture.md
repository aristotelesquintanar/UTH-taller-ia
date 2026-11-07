# Arquitectura de TaskFlow

## Decisiones

- PHP sin framework mantiene el foco en fundamentos y en el flujo SDD.
- `public/` es el único document root; concentra el punto de entrada y los recursos estáticos.
- `data/` está fuera de `public/` para evitar acceso HTTP directo al JSON futuro.
- `src/` se reserva para lógica de aplicación y persistencia cuando las especificaciones la requieran; no contiene abstracciones prematuras.
- No existe acceso a datos en el Incremento 0. `tasks.json` es únicamente el contrato inicial de almacenamiento.

## Flujo actual

```text
Navegador -> public/index.php -> HTML estático
          -> assets/css/styles.css
          -> assets/js/app.js
```

## Evolución prevista

En el Incremento 1, código pequeño y cohesivo en `src/` leerá y escribirá `data/tasks.json` de acuerdo con SPEC-001, SPEC-002, SPEC-007 y SPEC-008. `public/index.php` conservará la responsabilidad de presentación y coordinación mínima. Cualquier modelo, función o archivo adicional deberá justificarse con la especificación que lo necesite.

## Seguridad

Las futuras entradas HTTP se validarán en el servidor y los valores dinámicos se escaparán al presentarse. La persistencia debe detectar y comunicar errores de JSON o de E/S sin ocultarlos ni reportar una operación como exitosa.

