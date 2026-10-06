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
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Correo</th>
            <th>Fecha de Nacimiento</th>
        </tr>
    </thead>
    <tbody>

        @foreach ($informacionPersonal as $renglon)
            <tr>
                <td>{{ $renglon->correo }}</td>
                <td>{{ $renglon->nombre }}</td>
                <td>{{ $renglon->fecha_nacimiento }}</td>
            </tr>
        @endforeach
    </tbody>
</body>
</html>