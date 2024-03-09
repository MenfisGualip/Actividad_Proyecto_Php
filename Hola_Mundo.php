<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hola Mundo</title>
    <style>
        body {
            background-color: lightblue; /* Cambia el color de fondo según tu preferencia */
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }
        .container {
            text-align: center;
            margin-top: 50px;
            max-width: 600px; /* Establece un ancho máximo */
            margin-left: auto;
            margin-right: auto;
            padding: 0 20px; /* Agrega un poco de relleno a los lados */
        }
        img {
            max-width: 100%; /* La imagen se ajustará al ancho máximo del contenedor */
            height: auto; /* La altura se ajustará automáticamente */
        }
    </style>
</head>
<body>
    <div class="container">
        <?php
            echo "<h1>Hola Mundo, Soy Menfis Victoriano Gualip Ordoñez</h1>";
            echo "<img src='Menfis.jpg' alt='Imagen Menfis'>";
        ?>
    </div>
</body>
</html>
