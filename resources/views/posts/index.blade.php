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
              <li>
            
                <h2>{{ $post['title'] }}

                    (Iteración restantes: {{ $loop->remaining }})
                    

                    {{--  (Indice: {{ $loop->index }}) --}}

                </h2>
                <p>{{ $post['content'] }}</p>

                <ul>
                    @foreach ($post['tags'] as $tag)
                        <li>{{ $tag }}</li>
                    @endforeach
                </ul>
                </li>  
        @endforeach
       
                    
    </ul>
    



   

   
    
</body>
</html>