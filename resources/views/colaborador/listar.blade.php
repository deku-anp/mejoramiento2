<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <center>

    <h1>Lista de colaboradores</h1>
    <br>
    <a href="{{ route('collaborator.create') }}">registrar colaborador</a>
    <br>
    <br>
    <br>
    <table class="table" >
        <td>
            <h4>Id
        </td>
        <td>
            <h4>Nif
        </td>
        <td>
            <h4>Nombre
        </td>
        
        <td></td>
        <td></td>
        <td></td>

        @foreach ($collaborators as $collaborator)

            <tr>
                <td>{{ $collaborator->id}}</td>
                <td>{{ $collaborator->nif}}</td>
                <td>{{ $collaborator->nombre}}</td>
        
                <td><a href="{{ route('collaborator.show', $collaborator->id) }}">Mostrar</a></td>
                <td><a href="{{ route('collaborator.edit', $collaborator->id) }}">Editar</a></td>
                <td>
                    <form action="{{ route('collaborator.destroy', $collaborator->id) }}" method="POST">

                        @csrf
                        @method('delete')

                        <button type="submit">Eliminar</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    </center>

</body>
</html>