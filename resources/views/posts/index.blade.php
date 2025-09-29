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

    @if(true)
        <p>Este mensaje se mostrará si el valor de la condicional es verdadero</p>
    @else
        <p>Este mensaje se mostrará si el valor de la condicional es falso</p>
    @endif


    @unless(false)
        <p>Le has pasado el valor de false a la directiva unless</p>
    @endunless

    @isset($prueba)
        <p>La variable existe y tiene un valor asignado</p>
    @else
        <p>La variable no existe o no tiene un valor asignado</p>
    @endisset

    @empty($prueba)
        <p>La variable no existe o está vacía</p>
    @endempty

 











   
    
</body>
</html>