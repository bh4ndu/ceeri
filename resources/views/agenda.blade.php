<html lang="en">
<head>
    <title>CEERI</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="agenda.css">
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
    
        <section class="container">
            <div class="row align-items-start">
                @foreach ($citas as $cita)
                    <div class="tarjeta col-md-5">
                        <h3>tipo de documento: {{$cita->tipo_documento}}</h3>
                        <h3>numero de documento: {{$cita->numero_documento}}</h3>
                        <h3>nombres: {{$cita->nombres}}</h3>
                        <h3>apellidos: {{$cita->apellidos}}</h3>
                        <h3>telefono: {{$cita->telefono}}</h3>
                        <h3>especialidad: {{$cita->especialidad}}</h3>
                        <h3>genero: {{$cita->genero}}</h3>
                        <h3>fecha y hora: {{$cita->fecha_hora}}</h3>
                       
                        <form id="citaForm">
                            <select name="estado[]" class="estadoSelect">
                                <option value="cumplido">cumplido</option>
                                <option value="ausente">ausente</option>
                                <option value="cancelada">cancelada</option>
                            </select>
                        </form>
                        <div class="reservation-btn">
                            <button class="btn btn-primary"><a class="reserva-btn">enviar al historial</a></button>                                      
                        </div>
                        <br>
                    </div>
                @endforeach 
            </div>         
        </section>
<script>
    // Obtener todos los elementos select con la clase "estadoSelect"
    const estadoSelects = document.querySelectorAll('.estadoSelect');

    // Iterar sobre todos los selectores y aplicar el script a cada uno
    estadoSelects.forEach((estadoSelect, index) => {
        // Generar una clave única para cada selector basada en su índice
        const storageKey = `selectedValue_${index}`;

        const storedValue = localStorage.getItem(storageKey);

        if (storedValue) {
            estadoSelect.value = storedValue;
        }

        estadoSelect.addEventListener('change', function() {
            const selectedValue = estadoSelect.value;
            localStorage.setItem(storageKey, selectedValue);
        });
    });
</script>
</body>
</html>