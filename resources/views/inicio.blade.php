<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio Proyecto1</title>
</head>

<body>
    <header>
        <h1>{{ $nombreProyecto }}</h1>

        <nav aria-label="Navegación principal">
            <a href="/inicio">Inicio</a>
        </nav>
    </header>

    <main>
        <section>
            <h2>Administración de categorías</h2>

            <p>
                {{ $descripcion }}
            </p>
        </section>

        <section>
            <h2>Módulos del sistema</h2>

            <ul>
                @forelse ($modulos as $modulo)
                    <li>{{ $modulo }}</li>
                @empty
                    <li>No existen módulos registrados.</li>
                @endforelse
            </ul>
        </section>
    </main>

    <footer>
        <p>Proyecto formativo de desarrollo web</p>
    </footer>
</body>
</html>