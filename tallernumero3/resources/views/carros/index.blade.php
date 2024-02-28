<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Concesionario JeeimyPantoja</title>
    <!-- Estilos CSS -->
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5fa; /* Fondo lila */
            color: #333;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 800px;
            margin: auto;
            padding: 20px;
            background-color: #fff; /* Fondo blanco */
            border-radius: 10px; /* Bordes redondeados */
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1); /* Sombra suave */
        }

        h2 {
            margin-bottom: 20px;
            color: #6a1b9a; /* Tono morado */
            text-align: center;
        }

        /* Estilos para la tabla utilizando Bootstrap */
        .table {
            margin-top: 20px;
            background-color: #fff;
            border-radius: 10px;
            overflow: hidden; /* Evitar que las esquinas redondeadas se vean afectadas por el borde de la tabla */
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }

        th {
            background-color: #6a1b9a; /* Encabezado de tabla en tono morado */
            color: #fff;
        }

        img {
            max-width: 100px;
            height: auto;
            border-radius: 5px;
        }
    </style>
    <!-- Enlace a Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2 class="text-center mt-5">Lista de Carros</h2>
        <!-- Utiliza la clase "table" de Bootstrap para estilizar la tabla -->
        <div class="text-center mb-3">
            <a href="{{ route('carros.create') }}" class="btn-primary">Registrar Nuevo Carro</a>
        </div>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Marca</th>
                    <th>Modelo</th>
                    <th>Año</th>
                    <th>Kilometraje</th>
                    <th>Matrícula</th>
                    <th>Placa</th>
                    <th>Precio</th>
                    <th>Foto</th>
                </tr>
            </thead>
            <tbody>
                <!-- Itera sobre la lista de carros y muestra la información en filas de la tabla -->
                @foreach ($carros as $carro)
                    <tr>
                        <td>{{ $carro->id_carr0 }}</td>
                        <td>{{ $carro->marca }}</td>
                        <td>{{ $carro->modelo }}</td>
                        <td>{{ $carro->anio }}</td>
                        <td>{{ $carro->kilometraje }}</td>
                        <td>{{ $carro->matricula }}</td>
                        <td>{{ $carro->placa }}</td>
                        <td>${{ number_format($carro->precio) }}</td>
                        <td><img src="{{ $carro->foto }}" alt="Foto del carro"></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Scripts de Bootstrap y jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
