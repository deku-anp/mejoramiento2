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
                Codigo
                <br>
                <input type="text" name="codigo">
            </label>
            <br>
            <label>
                Telefono
                <br>
                <input type="text" name="tfno">
            </label>
            <br>
            <label>
                Domicilio
                <br>
                <input type="text" name="domicilio">
            </label>
            <br>
            <label>
                Numero social
                <br>
                <input type="text" name="num_social">
            </label>
            <br>
            <br>
            <button type="submit">Crear</button>
        </form>
    </center>
</body>
</html>