<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CEERI</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
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
                <div class="col-2">
                    <h3 class="company-name">CENTRO ESPECIALIZADO<br>EN REHABILITACIÓN INTEGRAL</h3>
                </div>
                <div class="col-2">
                    <button class="btn btn-light"><a href="/agenda" class="reserva-btn text-primary">Citas Agendadas</a></button>
                </div>
                <div class="col-2">
                    <button class="btn btn-light"><a href="/historial" class="reserva-btn text-primary">Historial de Citas</a></button>
                </div>
                <div class="col-4">
                    <!-- Agrega la barra de búsqueda aquí -->
                    <form action="/agenda" method="GET">
                        <input  class="barra"type="text" name="texto" placeholder="Buscar...">
                        <button  class="barra-button"type="submit">Buscar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <br>
    


    <!-- Sección de citas -->
    <section class="container">
        <div class="">
            @foreach ($citas as $cita)
                <form  method="POST"  action="{{ route('guardar.historial') }}" id="citaForm{{$loop->index}} cita">
                    @csrf
                    <div class="col-md-8 cita">
                        <div class="card col-md-7">
                            <div class="card-body col-md-10"> 
                                <input type="hidden" name="cita_id" value="{{$cita->id}}">
                                <input type="hidden" name="tipo_documento" value="{{$cita->tipo_documento}}">
                                <input type="hidden" name="numero_documento" value="{{$cita->numero_documento}}">
                                <input type="hidden" name="nombres" value="{{$cita->nombres}}">
                                <input type="hidden" name="apellidos" value="{{$cita->apellidos}}">
                                <input type="hidden" name="telefono" value="{{$cita->telefono}}">
                                <input type="hidden" name="especialidad" value="{{$cita->especialidad}}">
                                <input type="hidden" name="genero" value="{{$cita->genero}}">
                                <input type="hidden" name="fecha_hora" value="{{$cita->fecha_hora}}">                        
                                <h3 class="card-title">Tipo de documento: {{$cita->tipo_documento}}</h3>
                                <p class="card-text">Número de documento: {{$cita->numero_documento}}</p>
                                <p class="card-text">Nombres: {{$cita->nombres}}</p>
                                <p class="card-text">Apellidos: {{$cita->apellidos}}</p>
                                <p class="card-text">Teléfono: {{$cita->telefono}}</p>
                                <p class="card-text">Especialidad: {{$cita->especialidad}}</p>
                                <p class="card-text">Género: {{$cita->genero}}</p>
                                <p class="card-text">Fecha y hora: {{$cita->fecha_hora}}</p>
                                <select name="estado" id="estadoSelect{{$loop->index}}" >
                                    <option value="cumplido">cumplido</option>
                                    <option value="ausente">ausente</option>
                                    <option value="cancelada">cancelada</option>
                                </select>  
                                <div class="mt-2">
                                    <button type="submit" class="btn btn-primary">Enviar al Historial</button>
                                </div>                                          
                            </div>
                        </div>
                    </div>
                </form>    
            @endforeach
        </div>
    </section>

    <!-- Scripts -->
    
<script>
 // Función para guardar el valor seleccionado en localStorage
function saveSelectedValue(index) {
    const selectElement = document.getElementById(`estadoSelect${index}`);
    if (selectElement) {
        const selectedValue = selectElement.value;
        localStorage.setItem(`selectedValue${index}`, selectedValue);
    }
}

// Función para restaurar el valor seleccionado desde localStorage
function restoreSelectedValue(index) {
    const selectElement = document.getElementById(`estadoSelect${index}`);
    if (selectElement) {
        const storedValue = localStorage.getItem(`selectedValue${index}`);
        if (storedValue !== null) {
            selectElement.value = storedValue;
        }
    }
}

// Asigna un evento "change" a cada select para guardar su valor seleccionado
document.addEventListener("DOMContentLoaded", function () {
    @foreach ($citas as $index => $cita)
        (function () {
            const selectElement = document.getElementById(`estadoSelect{{$loop->index}}`);
            if (selectElement) {
                restoreSelectedValue({{$loop->index}});
                selectElement.addEventListener("change", function () {
                    saveSelectedValue({{$loop->index}});
                });
            }
        })();
    @endforeach
});


</script>

    
</body>
</html>
