<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar producto</title>
</head>

<body>
    <header>
        <h1>Pintura Lab</h1>
        <nav aria-label="Navegación principal">
            <a href="/inicio">Inicio</a> |
            <a href="/productos">Ver productos</a>
        </nav>
    </header>

    <main>
        <h2>Registrar producto</h2>

        @if ($errors->any())
            <div>
                <p>Corrige los siguientes errores:</p>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="/productos" method="POST">
            @csrf

            <p>
                <label for="nombre">Nombre:</label><br>
                <input type="text" id="nombre" name="nombre" value="{{ old('nombre') }}">
            </p>

            <p>
                <label for="descripcion">Descripción:</label><br>
                <textarea id="descripcion" name="descripcion" rows="4" cols="40">{{ old('descripcion') }}</textarea>
            </p>

            <p>
                <label for="precio">Precio:</label><br>
                <input type="number" id="precio" name="precio" step="0.01" value="{{ old('precio') }}">
            </p>

            <p>
                <label for="stock">Cantidad en inventario:</label><br>
                <input type="number" id="stock" name="stock" value="{{ old('stock', 0) }}">
            </p>

            <button type="submit">Guardar producto</button>
        </form>
    </main>

    <footer>
        <p>Proyecto formativo de desarrollo web</p>
    </footer>
</body>
</html>
