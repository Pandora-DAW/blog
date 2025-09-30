<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Coders Free</title>
</head>
<body>
    @switch($dia)
        @case(1)
            <p>Hoy es lunes</p>            
            @break
        @case(2)
            <p>Hoy es martes</p>
            @break
        @case(3)
            <p>Hoy es miércoles</p>
            @break
        @case(4)
            <p>Hoy es jueves</p>
            @break
        @case(5)
            <p>Hoy es viernes</p>
            @break
        @case(6)
            <p>Hoy es sábado</p>
            @break
        @case(7)
            <p>Hoy es domingo</p>
            @break
        @default
            <p>Hoy no es un día válido</p>
    @endswitch

   
    
</body>
</html>