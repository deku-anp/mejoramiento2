<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <center>
        <h1>Crear Formulario</h1>
        
        <form action="{{route('client.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            
            <label>
                Nif
                <br>
                <input type="text" name="nif">
            </label>
            <br>
            <label>
                Nombre
                <br>
                <input type="text" name="nombre">
            </label>
            <br>
            <br>
            <button type="submit">Crear</button>
        </form>
    </center>
</body>
</html>