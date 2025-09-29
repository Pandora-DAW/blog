<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Coders Free</title>
</head>
<body>
    <h1>Aquí se mostrará el listado de posts</h1>
    <p>Este es un párrafo</p>

    @env('local')
        <p>Estás en el entorno local</p>
    @endenv

    @production
        <p>Estás en producción</p>
    @endproduction




 











   
    
</body>
</html>