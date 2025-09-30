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

       
       @continue($i % 2 == 0)
         {{-- La directiva @continue nos permite saltar a la siguiente iteración del bucle cuando se cumple una condición específica. En este caso, si $i es múltiplo de 3, la directiva @continue hará que el bucle salte esa iteración y continúe con la siguiente. --}}

            <p>{{ $i }} </p>      
                
            
        @endfor 


   

   
    
</body>
</html>