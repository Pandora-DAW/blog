<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Coders Free</title>
</head>
<body>
    
       @for ($i = 1; $i <= $count; $i++)

       
       @break($i % 8 == 0)
         {{-- La directiva @break nos permite salir del bucle cuando se cumple una condición específica. En este caso, si $i es múltiplo de 8, la directiva @break hará que el bucle se detenga. --}}

            <p>{{ $i }} </p>      
                
            
        @endfor 

        <p><b>Saliste del bucle</b></p>


   

   
    
</body>
</html>