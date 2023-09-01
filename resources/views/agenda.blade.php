<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CEERI</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="agenda.css">
</head>
<body>
    <!-- Encabezado -->
    <div class="fixed-top bg-primary">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-2">
                    <img class="logo img-fluid" src="img/post/1.jpg" alt="Logo">
                </div>
                <div class="col-3">
                    <h3 class="company-name">CENTRO ESPECIALIZADO<br>EN REHABILITACIÓN INTEGRAL</h3>
                </div>
                <div class="col-2">
                    <button class="btn btn-light"><a href="/agenda" class="reserva-btn text-primary">Citas Agendadas</a></button>
                </div>
                <div class="col-3">
                    <button class="btn btn-light"><a href="/historial" class="reserva-btn text-primary">Historial de Citas</a></button>
                </div>
            </div>
        </div>
    </div>
    <br>

    <!-- Sección de citas -->
    <section class="container">
        <div class="row">
            @foreach ($citas as $cita)
                <div class="col-md-5">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h3 class="card-title">Tipo de documento: {{$cita->tipo_documento}}</h3>
                            <p class="card-text">Número de documento: {{$cita->numero_documento}}</p>
                            <p class="card-text">Nombres: {{$cita->nombres}}</p>
                            <p class="card-text">Apellidos: {{$cita->apellidos}}</p>
                            <p class="card-text">Teléfono: {{$cita->telefono}}</p>
                            <p class="card-text">Especialidad: {{$cita->especialidad}}</p>
                            <p class="card-text">Género: {{$cita->genero}}</p>
                            <p class="card-text">Fecha y hora: {{$cita->fecha_hora}}</p>
                            <form class="citaForm">
                                <select name="estado[]" class="form-control">
                                    <option value="cumplido">Cumplido</option>
                                    <option value="ausente">Ausente</option>
                                    <option value="cancelada">Cancelada</option>
                                </select>
                            </form>
                            <div class="mt-2">
                                <button class="btn btn-primary"><a href="#" class="text-light">Enviar al Historial</a></button>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
