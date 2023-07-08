<!DOCTYPE html>
<html>
<head>
    <title>Página Web</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- LOGO -->
    <div class="fixed-top">
        <div class="container">
            <!-- LOGO -->
            <div class="row align-items-start">
                <div class="col-4">
                    <img class="logo" src="img/1.jpg" alt="Logo">
                </div>
                <div class="col-3">
                    <h3 class="company-name">CENTRO ESPECIALIZADO <br> EN REHABILITACIÓN INTEGRAL</h3>
                </div>
                <div class="col-3 reservation-btn">
                    <button class="btn btn-primary"><a href="http://localhost/Conexion-a-mysql-con-php/" class="reserva-btn">reserva</a></button>
                </div>
                <div class="col-2">
                    <a href="https://api.whatsapp.com/send?phone=51933924456" target="_blank">
                        <i class="fab fa-whatsapp whatsapp-icon"></i>
                    </a>                                        
                </div>
            </div>
        </div>
    
        <!-- MENÚ -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#Nosotros">Nosotros</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Servicios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#Galeria">Galeria</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="http://localhost/Conexion-a-mysql-con-php/">Reserva</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    

    <!-- BANNER -->
    <div class="banner">
        <div class="slide">
          <img src="img/2.jpg" alt="Imagen 1">
          <div class="slide-content">
            <h2>Centro de terapia física y rehabilitación</h2>
            <p>CEERI</p>
            <a href="http://localhost/Conexion-a-mysql-con-php/" class="reserva-btn">RESERVAR</a>
          </div>
        </div>
        <div class="slide">
          <img src="img/4.jpg" alt="Imagen 2">
          <div class="slide-content">
            <h2>Centro de terapia física y rehabilitación</h2>
            <p>CEERI</p>
            <a href="http://localhost/Conexion-a-mysql-con-php/" class="reserva-btn">RESERVAR</a>
          </div>
        </div>
        <div class="slide">
          <img src="img/5.jpg" alt="Imagen 3">
          <div class="slide-content">
            <h2>Centro de terapia física y rehabilitación</h2>
            <p>CEERI</p>
            <a href="http://localhost/Conexion-a-mysql-con-php/" class="reserva-btn">RESERVAR</a>
          </div>
        </div>
      </div>
      
      

    <!-- CONTENIDO 1-->

    <div class="container">
        <div class="row align-items-start">
            <div class="col-12">
                <h2 class="contenido1" id="Nosotros">Conocenos un poco más</h2>
                <hr style="border-color: black; border-width: 2px; margin-top: 10px;">
            </div>
            <div class="col-8">
                <p class="descripcion1">
                    Somos un centro dedicado a la atención de <br>
                    pacientes con Alteraciones motoras temporales y/o <br>
                    permanentes, Preocurando su bienestar a travéz de <br>
                    un tratamiento multidisciplinado enfocado en <br>
                    eliminar el dolor y recuperar su movibilidad. <br>
                    Contamos con equipos disioterapéuticos de la más <br>
                    avanzada tecnología, Magneto, Láser, Corrientes <br>
                    TENS, Ultrasonido y Agentes físicos de calor y frío.
                </p>
            </div>
            <div class="col-4 reservation-btn">
                <img class="imagen1" src="img/3.jpg" alt="">
            </div>
        </div>
    </div>
    
    <!-- CONTENIDO 2  -->

    <div class="container">
        <div class="row align-items-start">
            <div class="col-12">
                <h2 class="contenido2">Lo que ofrecemos</h2>
                <hr style="border-color: black; border-width: 2px; margin-top: 10px;">
            </div>
                <div class="col-4 reservation-btn">
                    <img src="img/N1.jpg" alt="Descripción de la imagen" class="imagen-con-borde">
                </div>
            <div class="col-6">
                <h2 class="titulo2">Terapia Física y Rehabilitación</h2>    
                <p class="descripcion2">
                    Tratamiento que se enfoca en mejorar la <br>
                    función física, la movilidad y la calidad de <br>
                    vida de las personas.
                </p>
            </div>

    <!-- CONTENIDO 3         -->

            <div class="col-6">
                <h2 class="titulo3">Terapia de lenguaje</h2>    
                <p class="descripcion3">
                    Tratamiento que se enfoca en mejorar la <br>
                    función física, la movilidad y la calidad de <br>
                    vida de las personas.
                </p>

            </div>
            <div class="col-4 reservation-btn">
                <img src="img/N2.jpg" alt="Descripción de la imagen" class="imagen-con-borde1">
            </div>

    <!-- CONTENIDO4-->        

            <div class="col-4 reservation-btn">
                <img src="img/N3.jpg" alt="Descripción de la imagen" class="imagen-con-borde">
            </div>

        <div class="col-6">
            <h2 class="titulo2">Terapia Ocupacional</h2>    
            <p class="descripcion2">
                Tratamiento que se enfoca en mejorar la <br>
                función física, la movilidad y la calidad de <br>
                vida de las personas.
            </p>
        </div>

    <!-- CONTENIDO5    -->

        <div class="col-6">
            <h2 class="titulo3">Terapia infantil</h2>    
            <p class="descripcion3">
                Tratamiento que se enfoca en mejorar la <br>
                función física, la movilidad y la calidad de <br>
                vida de las personas.
            </p>

        </div>
        <div class="col-4 reservation-btn">
            <img src="img/N4.jpg" alt="Descripción de la imagen" class="imagen-con-borde1">
        </div>


    <!-- CONTENIDO6     -->
        <div class="col-4 reservation-btn">
            <img src="img/N5.jpg" alt="Descripción de la imagen" class="imagen-con-borde">
        </div>
    <div class="col-6">
        <h2 class="titulo2">Psicología</h2>    
        <p class="descripcion2">
            Tratamiento que se enfoca en mejorar la <br>
            función física, la movilidad y la calidad de <br>
            vida de las personas.
        </p>
    </div>
            </div>
        </div>
    </div>


    <!-- CARRUSEL -->

    <div class="container" id="Galeria">
        <div class="row align-items-start">
            <div class="col-12">
                <h2 class="carrusel">Mira lo que hacemos</h2>
                <hr style="border-color: black; border-width: 2px; margin-top: 10px;">
            </div>
        </div>       

    
    <!-- js -->

    <div class="slider">
        <div class="slide">
          <img src="img/G1.jpg" alt="Imagen 1">
        </div>
        <div class="slide">
          <img src="img/G2.jpg" alt="Imagen 2">
        </div>
        <div class="slide">
            <img src="img/G3.jpg" alt="Imagen 2">
          </div>
          <div class="slide">
            <img src="img/G4.jpg" alt="Imagen 2">
          </div>
        <div class="slide">
            <img src="img/G5.jpg" alt="Imagen 2">
          </div>
        <div class="slide">
            <img src="img/G6.jpg" alt="Imagen 2">
          </div>
        <div class="slide">
            <img src="img/G7.jpg" alt="Imagen 2">
          </div>
          <div class="slide">
            <img src="img/G8.jpg" alt="Imagen 2">
          </div>
          <div class="slide">
            <img src="img/G9.jpg" alt="Imagen 2">
          </div>
          <div class="slide">
            <img src="img/G10.jpg" alt="Imagen 2">
          </div>  
    </div>    


      <!-- FOOTER -->

      <!-- FALTA MEJORAR EL FOOTER Y RESPONSIVE -->

      <footer>
        <div class="row">
          <div class="col-12 col-md-9">
            <h4>¿Te interesa reservar una cita?</h4>
          </div>
        </div>
        <div class="row">
          <div class="col-12 col-md-6">
            <button class="btn btn-primary"><a href="http://localhost/Conexion-a-mysql-con-php/" class="reserva-btn">reserva</a></button>
            <hr style="border-color: black; border-width: 2px; margin-top: 10px;">
          </div>
        </div>
        <div class="informacion">
          <div class="row">
            <div class="col-6 col-md-2">
              <p>Síguenos:</p>
            </div>
            <div class="col-6 col-md-2">
              <p>Contactanos:</p>
            </div>
            <div class="col-6 col-md-2">
              <p>Te puede interesar:</p>
            </div>
          </div>
          <div class="row">
            <div class="col-6 col-md-2">
              <a href="#"><i class="fab fa-facebook"></i></a>
              <a href="#"><i class="fab fa-instagram"></i></a>
              <a href="#"><i class="fab fa-whatsapp"></i></a>
            </div>
            <div class="col-6 col-md-2">
              <p>Información de contacto</p>
              <p>Información de contacto</p>
            </div>
            <div class="col-6 col-md-2">
              <p>Inicio</p>
              <p>Reserva</p>
            </div>
            <div class="col-12 col-md-6">
              <img class="img" src="img/F1.jpg" alt="Imagen" style="width: 400px; height:300px;">
            </div>
          </div>
        </div>
      </footer>
      

    <!-- LINKS JS   -->
      
          <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
      
          <script text="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
          <script type="text/javascript">
            $(document).ready(function() {
              $('.slider').slick({
                infinite: true,
                slidesToShow: 3,
                arrows: true,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 2000,
                prevArrow: '<button type="button" class="slick-prev"><i class="fas fa-chevron-left"></i></button>',
                nextArrow: '<button type="button" class="slick-next"><i class="fas fa-chevron-right"></i></button>',
                responsive: [
                  {
                    breakpoint: 768, // Tamaño de pantalla en el que deseas cambiar la configuración
                    settings: {
                      slidesToShow: 1, // Número de slides a mostrar en la vista de móvil
                      slidesToScroll: 1 // Número de slides a desplazar en la vista de móvil
                    }
                  }
                ]
              });
            });
          </script>
          


          <script>
            $(document).ready(function() {
              $('.banner').slick({
                infinite: true,
                slidesToShow: 1,
                arrows: false,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 2000,
                responsive: [
                  {
                    breakpoint: 768, // Tamaño de pantalla en el que deseas cambiar la configuración
                    settings: {
                      slidesToShow: 1, // Número de slides a mostrar en la vista de móvil
                      slidesToScroll: 1 // Número de slides a desplazar en la vista de móvil
                    }
                  }
                ]
              });
            });
          </script>
          

    <!-- LINKS NO TOCAR -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>


