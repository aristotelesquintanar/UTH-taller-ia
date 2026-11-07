<?php

declare(strict_types=1);

$pageTitle = 'TaskFlow | Tus tareas, en orden';
?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="TaskFlow, una aplicación para organizar tareas personales.">
    <title><?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8') ?></title>
    <link rel="stylesheet" href="assets/css/styles.css">
    <script src="assets/js/app.js" defer></script>
</head>
<body>
    <header class="site-header">
        <div class="container header-content">
            <a class="brand" href="/" aria-label="TaskFlow, inicio">TaskFlow</a>
            <nav aria-label="Navegación principal">
                <ul class="navigation">
                    <li><a aria-current="page" href="/">Inicio</a></li>
                    <li><span class="navigation-pending" aria-disabled="true">Mis tareas <small>Próximamente</small></span></li>
                </ul>
            </nav>
        </div>
    </header>

    <main>
        <section class="hero container" aria-labelledby="page-title">
            <p class="eyebrow">Organiza lo importante</p>
            <h1 id="page-title">Tus tareas, en un solo lugar.</h1>
            <p class="intro">TaskFlow te ayudará a organizar tu trabajo personal paso a paso.</p>
        </section>

        <section class="tasks-section container" aria-labelledby="tasks-title">
            <div class="section-heading">
                <div>
                    <p class="eyebrow">Vista general</p>
                    <h2 id="tasks-title">Mis tareas</h2>
                </div>
                <button class="button button-primary" type="button" disabled aria-describedby="create-task-note">
                    Crear tarea
                </button>
            </div>
            <p id="create-task-note" class="pending-note">Disponible durante el siguiente incremento del taller.</p>

            <div class="empty-state" aria-live="polite">
                <div class="empty-state-icon" aria-hidden="true">✓</div>
                <h3>Aún no tienes tareas</h3>
                <p>Cuando crees tu primera tarea, aparecerá aquí.</p>
            </div>
        </section>

        <section class="future-features container" aria-labelledby="future-features-title">
            <h2 id="future-features-title">Próximamente</h2>
            <div class="feature-list">
                <article>
                    <h3>Organiza tareas</h3>
                    <p>Crea y consulta tus tareas personales.</p>
                </article>
                <article>
                    <h3>Sigue tu progreso</h3>
                    <p>Marca las tareas terminadas cuando las completes.</p>
                </article>
                <article>
                    <h3>Encuentra lo importante</h3>
                    <p>Filtra tus tareas según su estado.</p>
                </article>
            </div>
        </section>
    </main>

    <footer class="site-footer">
        <div class="container">
            <p>TaskFlow · Taller práctico de Desarrollo de Software con IA</p>
        </div>
    </footer>
</body>
</html>
