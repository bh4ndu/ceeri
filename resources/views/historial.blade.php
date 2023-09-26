<!DOCTYPE html>
<html lang="en">
<head>
    <title>CEERI</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="historial.css">
</head>
<body>
    <!-- LOGO -->
    <div class="fixed-top" style="background:skyblue">
        <div class="container">
            <!-- LOGO -->
            <div class="row align-items-start">
                <div class="col-2">
                    <img class="logo" src="img/post/1.jpg" alt="Logo">
                </div>
                <div class="col-3">
                    <h3 class="company-name">CENTRO ESPECIALIZADO <br> EN REHABILITACIÓN INTEGRAL</h3>
                </div>
                <div class="col-2 reservation-btn">
                    <button class="btn btn-primary"><a href="/agenda" class="reserva-btn">citas agendadas</a></button>
                </div>
                <div class="col-3 reservation-btn">
                    <button class="btn btn-primary"><a href="/historial" class="reserva-btn">historial de citas</a></button>                                      
                </div>
            </div>
       </div>
    </div>
    <br>

    <div class="container">
        @php
        $citasPorDocumento = [];
        @endphp
    
        @foreach ($citas as $cita)
            @php
            $numero_documento = $cita->numero_documento;
            @endphp
    
            @if (!array_key_exists($numero_documento, $citasPorDocumento))
                @php
                $citasPorDocumento[$numero_documento] = [];
                @endphp
            @endif
    
            @php
            $citasPorDocumento[$numero_documento][] = $cita;
            @endphp
        @endforeach

        @foreach ($citasPorDocumento as $numero_documento => $citasDocumento)
        <button type="button" class="btn btn-primary history" data-toggle="modal" data-target="#modal-{{ $numero_documento }}">
            {{$citasDocumento[0]->nombres}} {{$citasDocumento[0]->apellidos}} (DNI: {{ $numero_documento }})
        </button>
        
    
            <div class="modal fade" id="modal-{{ $numero_documento }}" tabindex="-1" role="dialog" aria-labelledby="modalLabel-{{ $numero_documento }}" aria-hidden="true">
                <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                        <div class="modal-header ">
                            <h5 class="modal-title" id="modalLabel-{{ $numero_documento }}">Historial de: {{ $citasDocumento[0]->nombres }} {{ $citasDocumento[0]->apellidos }}</h5>
                            <button class="elemento" type="button" class="close" data-dismiss="modal" aria-label="Cerrar">
                            </button>
                            <section class="container">
                                <div class="row">
                                    @foreach ($citasDocumento as $cita)
                                        <div class="col-md-8 cita">
                                            <div class="card col-md-9">
                                                <div class="card-body col-md-9">
                                                    <!-- Aquí muestras los detalles de cada cita -->
                                                    <h3 class="card-title">Tipo de documento: {{ $cita->tipo_documento }}</h3>
                                                    <p class="card-text">Número de documento: {{$cita->numero_documento}}</p>
                                                    <p class="card-text">Nombres: {{$cita->nombres}}</p>
                                                    <p class="card-text">Apellidos: {{$cita->apellidos}}</p>
                                                    <p class="card-text">Teléfono: {{$cita->telefono}}</p>
                                                    <p class="card-text">Especialidad: {{$cita->especialidad}}</p>
                                                    <p class="card-text">Género: {{$cita->genero}}</p>
                                                    <p class="card-text">Fecha y hora: {{$cita->fecha_hora}}</p>
                                                    <p class="card-text">estado: {{$cita->estado}}</p> 
                                                    <!-- ... otros campos de la cita ... -->
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    
    
                                                    
                                                    
</body>
</html>