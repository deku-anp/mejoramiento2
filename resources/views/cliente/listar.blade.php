<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <center>

    <h1>Lista de clientes</h1>
    <br>
    <a href="{{ route('client.create') }}">registrar cliente</a>
    <br>
    <br>
    <br>
    <table class="table" >
        <td>
            <h4>Id
        </td>
        <td>
            <h4>Codigo
        </td>
        <td>
            <h4>Telefono
        </td>
        <td>
            <h4>Domicilio
        </td>
        <td>
            <h4>Numero social
        </td>
        
        <td></td>
        <td></td>
        <td></td>

        @foreach ($clients as $client)

            <tr>
                <td>{{ $client->id}}</td>
                <td>{{ $client->codigo}}</td>
                <td>{{ $client->tfno}}</td>
                <td>{{ $client->domicilio}}</td>
                <td>{{ $client->num_social}} </td>
                <td><a href="{{ route('client.show', $client->id) }}">Mostrar</a></td>
                <td><a href="{{ route('client.edit', $client->id) }}">Editar</a></td>
                <td>
                    <form action="{{ route('client.destroy', $client->id) }}" method="POST">

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