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

        label {
            display: block;
            margin-bottom: 5px;
            color: #666;
        }

        input[type="text"],
        input[type="number"],
        input[type="file"],
        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            font-size: 16px;
            background-color: #f9f9f9; /* Fondo gris claro */
        }

        input[type="file"] {
            cursor: pointer;
        }

        .button-container {
            text-align: center;
        }

        button {
            padding: 10px 20px;
            background-color: #6a1b9a; /* Tono morado */
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #4a148c; /* Tonalidad más oscura al pasar el ratón */
        }
    </style>
    <!-- Enlace a Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">

        <h2>Registrar Carro</h2>
        <form method="POST" action="{{ route('carros.store') }}" enctype="multipart/form-data">
            @csrf

            <div>
                <label for="marca">Marca:</label>
                <input type="text" name="marca" class="form-control">
            </div>

            <div>
                <label for="modelo">Modelo:</label>
                <input type="text" name="modelo" class="form-control">
            </div>
        
            <div>
                <label for="anio">Año:</label>
                <input type="number" name="anio" class="form-control">
            </div>

            <div>
                <label for="kilometraje">Kilometraje:</label>
                <input type="number" name="kilometraje" class="form-control">
            </div>
        
            <div>
                <label for="matricula">Matrícula:</label>
                <input type="text" name="matricula" class="form-control">
            </div>

            <div>
                <label for="placa">Placa:</label>
                <input type="text" name="placa" class="form-control">
            </div>
        
            <div>
                <label for="precio">Precio:</label>
                <input type="number" name="precio" class="form-control">
            </div>

            <div>
                <label for="foto">Seleccionar foto:</label>
                <input type="file" id="foto" name="foto" class="form-control" accept="image/*">
            </div>

            <div class="button-container">
                <button type="submit" class="btn btn-primary">Guardar Carro</button>
            </div>
            <!-- Agregar botón para regresar a la lista de carros -->
            <div class="text-center">
                <a href="{{ url('carros') }}" class="btn btn-primary">Volver a la Lista de Carros</a>
            </div>
        </form>
    </div>

    <!-- Scripts de Bootstrap y jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
