<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Coders Free</title>

    <style>
        .color-red {
            color: red;
        }
        .color-green {
            color: green;
        }
    </style>
</head>
<body>
    
<form action="">
    <div>
        <label><input type="checkbox" @checked(true) name="paises[]" id="">Perú</label>
        <label><input type="checkbox" name="paises[]" id="">Argentina</label>
        <label><input type="checkbox" name="paises[]" id="">Chile</label>
        <label><input type="checkbox" name="paises[]" id="">Colombia</label>
    </div>

    <div>
        <input type="text" @readonly(true) >
        {{-- <input type="text" @required(true) > --}}
    </div>


<div>
    <select name="ciudad">
        <option value="1">Lima</option>
        <option value="2" selected>Cusco</option>
        <option value="3" @selected(true)>Arequipa</option>
        <option value="4">Trujillo</option>
    </select>
</div>
<button @disabled(true)>Enviar</button>

</form>
   

   
    
</body>
</html>