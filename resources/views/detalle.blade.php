<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Detalle</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
      crossorigin="anonymous"
    />
  </head>
<body>
    <h1>detalle</h1>
    <a href="{{ route('informacion-personal.index') }}" class="btn btn-primary mb-3">Volver a la lista</a>
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Nombre: {{ $informacionPersonal->nombre }}</h5>
        <p class="card-text">Correo electrónico: {{ $informacionPersonal->correo }}</p>
        <p class="card-text">Fecha de nacimiento: {{ $informacionPersonal->fecha_nacimiento }}</p>
      </div>
    </div>
    <hr>
    <a href="{{ 'informacion-personal.edit' }}"
</hr>
  </body>
</html>