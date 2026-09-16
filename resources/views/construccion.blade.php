<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página en Construcción</title>
    <style>
        /* Eliminamos márgenes por defecto del navegador */
        body, html {
            margin: 0;
            padding: 0;
            height: 100%;
            overflow: hidden; /* Opcional: evita barras de desplazamiento */
        }

        .fondo-construccion {
            /* Referencia correcta a la imagen usando la URL generada por Laravel */
            background-image: url("{{ asset('construccion.jpeg') }}");

            /* Centrar la imagen */
            background-position: center;

            /* No repetir la imagen */
            background-repeat: no-repeat;

            /* Ajustar para cubrir todo el área, manteniendo proporción */
            background-size: cover;

            /* Ocupar todo el alto de la ventana del navegador (viewport height) */
            height: 100vh;
            width: 100%;
        }
    </style>
</head>
<body>

    <!-- Este div contendrá la imagen de fondo -->
    <div class="fondo-construccion">
        <!-- Aquí puedes poner contenido encima de la imagen si quieres, o dejarlo vacío -->
    </div>

</body>
</html>