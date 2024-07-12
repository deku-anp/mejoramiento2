<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>

<h1>Actualizar clientes</h1>
<br>
<form action="{{ route('client.update', $client) }}" method="POST" enctype="multipart/form-data">

    @csrf
    @method('put')

    <label>
        Codigo
        <br>
        <input type="text" name="codigo" value="{{ old('codigo', $client->codigo) }}">
    </label>
    <br>
    <label>
        Telefono
        <br>
        <input type="text" name="tfno" value="{{ old('tfno', $client->tfno) }}">
    </label><br>
    <label>
        Domicilio
        <br>
        <input type="text" name="domicilio" value="{{ old('domicilio', $client->domicilio) }}">
    </label><br>
    <label>
        Numero social
        <br>
        <input type="text" name="num_social" value="{{ old('num_social', $client->num_social) }}">
    </label>

    <br>
    <br>

    <button type="submit">Actualizar</button>

    </center>
</form>
</body>
</html>