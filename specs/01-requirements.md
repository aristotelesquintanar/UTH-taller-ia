# Requisitos de TaskFlow

## Requisitos no funcionales

- **RNF-001:** usar PHP 8.2 o superior, sin framework, Composer, npm frontend ni servicios externos.
- **RNF-002:** usar HTML5, CSS3 y JavaScript vanilla; la aplicación debe funcionar con el servidor integrado de PHP.
- **RNF-003:** almacenar las tareas futuras en `data/tasks.json`, sin base de datos.
- **RNF-004:** mantener el código legible, seguro y adecuado para estudiantes; validar entradas y escapar salidas al implementar datos de usuario.
- **RNF-005:** mantener una interfaz adaptable a pantallas móviles y recursos locales accesibles.

## Especificaciones funcionales futuras

### SPEC-001 — Crear tareas

- **Objetivo:** permitir registrar una tarea personal.
- **Historia de usuario:** Como persona usuaria, quiero crear una tarea para recordar una actividad pendiente.
- **Reglas de negocio:** el título es obligatorio tras recortar espacios; no se creará una tarea con título vacío; la nueva tarea inicia pendiente.
- **Criterios de aceptación:**
  - **Dado** un título válido, **cuando** envío el formulario de creación, **entonces** se registra una tarea pendiente.
  - **Dado** un título vacío o formado solo por espacios, **cuando** intento crear la tarea, **entonces** se informa la validación y no se persiste.
- **Casos límite:** espacios iniciales/finales; caracteres especiales; título excesivamente largo según el límite que defina el incremento.
- **Estado:** pendiente.

### SPEC-002 — Listar tareas

- **Objetivo:** mostrar las tareas persistidas.
- **Historia de usuario:** Como persona usuaria, quiero ver mis tareas para conocer qué debo hacer.
- **Reglas de negocio:** cada tarea muestra al menos título y estado; una colección vacía muestra el estado vacío.
- **Criterios de aceptación:**
  - **Dado** tareas válidas en el archivo JSON, **cuando** abro la aplicación, **entonces** veo cada tarea con su estado.
  - **Dado** un arreglo vacío, **cuando** abro la aplicación, **entonces** veo “Aún no tienes tareas”.
- **Casos límite:** JSON inexistente, vacío, malformado o con registros inválidos; se definirán mensajes y recuperación seguros antes de implementar.
- **Estado:** pendiente.

### SPEC-003 — Completar tareas

- **Objetivo:** actualizar el estado de una tarea entre pendiente y completada.
- **Historia de usuario:** Como persona usuaria, quiero marcar una tarea terminada para seguir mi progreso.
- **Reglas de negocio:** solo se modifica una tarea existente; el cambio debe persistir de forma segura.
- **Criterios de aceptación:**
  - **Dado** una tarea pendiente existente, **cuando** la marco como completada, **entonces** se guarda y se muestra como completada.
  - **Dado** un identificador inexistente, **cuando** intento cambiar su estado, **entonces** se informa un error sin modificar otras tareas.
- **Casos límite:** solicitud repetida, actualización simultánea y JSON no disponible.
- **Estado:** pendiente.

### SPEC-004 — Editar tareas

- **Objetivo:** permitir corregir una tarea existente.
- **Historia de usuario:** Como persona usuaria, quiero editar una tarea para mantener su información actualizada.
- **Reglas de negocio:** la edición valida el título igual que la creación y solo modifica la tarea identificada.
- **Criterios de aceptación:**
  - **Dado** una tarea existente y un título válido, **cuando** guardo una edición, **entonces** se actualiza únicamente esa tarea.
  - **Dado** un identificador inexistente, **cuando** intento editar la tarea, **entonces** se informa un error sin modificar otras tareas.
- **Casos límite:** identificador inexistente, título inválido y fallo de persistencia.
- **Estado:** pendiente.

### SPEC-005 — Eliminar tareas

- **Objetivo:** permitir retirar una tarea existente.
- **Historia de usuario:** Como persona usuaria, quiero eliminar una tarea para mantener mi lista actualizada.
- **Reglas de negocio:** la eliminación solo afecta a la tarea identificada y requiere confirmación explícita de la persona usuaria.
- **Criterios de aceptación:**
  - **Dado** una tarea existente, **cuando** confirmo su eliminación, **entonces** deja de aparecer y no permanece en JSON.
  - **Dado** una eliminación cancelada, **cuando** vuelvo a la lista, **entonces** la tarea permanece sin cambios.
- **Casos límite:** identificador inexistente, cancelación de eliminación y fallo de persistencia.
- **Estado:** pendiente.

### SPEC-006 — Filtrar por estado

- **Objetivo:** limitar la lista a tareas pendientes, completadas o todas.
- **Historia de usuario:** Como persona usuaria, quiero filtrar por estado para enfocarme en las tareas relevantes.
- **Reglas de negocio:** el filtro no modifica datos; “todas” es el estado predeterminado.
- **Criterios de aceptación:**
  - **Dado** tareas de ambos estados, **cuando** selecciono “pendientes”, **entonces** solo se muestran tareas pendientes.
  - **Dado** un filtro sin resultados, **cuando** lo aplico, **entonces** veo un mensaje claro.
- **Casos límite:** valor de filtro inválido y colección vacía.
- **Estado:** pendiente.

### SPEC-007 — Persistencia en JSON

- **Objetivo:** conservar las tareas de forma local entre solicitudes.
- **Historia de usuario:** Como persona usuaria, quiero que mis tareas se guarden para encontrarlas cuando vuelva a abrir la aplicación.
- **Reglas de negocio:** las tareas se almacenan exclusivamente en `data/tasks.json`; cada modificación conserva un arreglo JSON válido; el archivo nunca se expone directamente desde el document root.
- **Criterios de aceptación:**
  - **Dado** un archivo JSON válido, **cuando** una operación modifica tareas, **entonces** se conserva un arreglo JSON válido.
  - **Dado** una nueva solicitud, **cuando** existen tareas previamente guardadas, **entonces** pueden leerse para mostrarse según la especificación de listado.
- **Casos límite:** permisos insuficientes, archivo ausente, JSON malformado y concurrencia.
- **Estado:** pendiente.

### SPEC-008 — Validación de entradas y manejo de errores

- **Objetivo:** asegurar que las operaciones rechacen datos inválidos y comuniquen fallos de forma clara.
- **Historia de usuario:** Como persona usuaria, quiero recibir mensajes claros y no perder datos ante entradas o almacenamiento inválidos.
- **Reglas de negocio:** todas las entradas se validan en servidor; las salidas dinámicas se escapan; los fallos de lectura o escritura no se presentan como éxito.
- **Criterios de aceptación:**
  - **Dado** una entrada inválida, **cuando** se procesa una operación, **entonces** se informa la validación y no se modifica el estado persistido.
  - **Dado** un error de lectura, escritura o formato, **cuando** se procesa una operación, **entonces** se informa un error sin confirmar una acción inexistente.
- **Casos límite:** datos maliciosos, caracteres especiales, peticiones incompletas y errores de persistencia.
- **Estado:** pendiente.

