<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
</head>

<body>
    <header>
        <h1>Pintura Lab</h1>
        <nav aria-label="Navegación principal">
            <a href="/inicio">Inicio</a> |
            <a href="/productos/crear">Registrar producto</a>
        </nav>
    </header>

    <main>
        <h2>Catálogo de productos</h2>

        @if (session('exito'))
            <p><strong>{{ session('exito') }}</strong></p>
        @endif

        <table border="1" cellpadding="6">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Precio</th>
                    <th>Inventario</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($productos as $producto)
                    <tr>
                        <td>{{ $producto->id }}</td>
                        <td>{{ $producto->nombre }}</td>
                        <td>{{ $producto->descripcion }}</td>
                        <td>${{ number_format($producto->precio, 2) }}</td>
                        <td>{{ $producto->stock }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5">No hay productos registrados.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </main>

    <footer>
        <p>Proyecto formativo de desarrollo web</p>
    </footer>
</body>
</html>
