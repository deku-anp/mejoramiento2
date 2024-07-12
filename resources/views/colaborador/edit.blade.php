<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>

<h1>Actualizar colaboradores</h1>
<br>
<form action="{{ route('collaborator.update', $collaborator) }}" method="POST" enctype="multipart/form-data">

    @csrf
    @method('put')

    <label>
        Nif
        <br>
        <input type="text" name="nif" value="{{ old('nif', $collaborator->nif) }}">
    </label>
    <br>
    <label>
        Nombre
        <br>
        <input type="text" name="nombre" value="{{ old('nombre', $collaborator->nombre) }}">
    </label>
    
    <br>
    <br>

    <button type="submit">Actualizar</button>

    </center>
</form>
</body>
</html>