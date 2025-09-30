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
        
    @forelse ($posts as $post)
        <li>
            <h2>{{ $post['title'] }}</h2>
            <p>{{ $post['content'] }}</p>
        </li>

        @empty
            <li>No hay posts disponibles.</li>

    @endforelse
    </ul>
   
    
</body>
</html>