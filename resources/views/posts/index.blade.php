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

       @if ($i % 3 == 0)
       @continue
       @endif

            <p>{{ $i }} </p>      
                
            
        @endfor 


   

   
    
</body>
</html>