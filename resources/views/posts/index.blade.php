<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Coders Free</title>
</head>
<body>

    <ul>
        @foreach ($posts as $post)
            
                <h2>{{ $post['title'] }}

                    (Iteración: {{ $loop->iteration }})
                    

                    {{--  (Indice: {{ $loop->index }}) --}}

                </h2>
                <p>{{ $post['content'] }}</p>
            
        @endforeach
                    
    </ul>
    



   

   
    
</body>
</html>