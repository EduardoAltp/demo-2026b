<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registros</title>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
        crossorigin="anonymous"
    />
</head>
<body>
 <h1>Registros recibidos</h1>
    <a href="{{ route('informacion-personal.create') }}" class="btn btn-primary mb-3">Agregar nuevo registro</a>

    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Correo</th>
                <th>Fecha de Nacimiento</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($informacionPersonal as $renglon)
                <tr>
                    <td>{{ $renglon->id }}</td>
                    <td>{{ $renglon->nombre }}</td>
                    <td>{{ $renglon->correo }}</td>
                    <td>{{ $renglon->fecha_nacimiento }}</td>
                    <td>
                        <a href="{{ route('informacion-personal.show', $renglon->id) }}" class="btn btn-sm btn-info">Ver</a>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" class="text-center">No hay registros todavía.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

</body>
</html>