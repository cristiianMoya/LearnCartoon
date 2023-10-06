|<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> @yield('title')</title>

    <!-- MenuNav / Carrousel----------- -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="https://kit.fontawesome.com/5191364857.js" crossorigin="anonymous"></script>
    
</head>
<body>

        <header class="header1">
            <header class="header">
                <h1 class="Titulo-Cabecera"> Learn Cartoon </h1>
                <h2 class="Subtitulo-Cabecera"> Pasos de hoy, caminos del mañana </h2>
                <img src="Images/Logo.png" class="logo">
            </header>
        </header>


                <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="#">INICIO</a>
                    </li>    
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        REGISTRARSE
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Iniciar Sesión</a></li>
                        <li><a class="dropdown-item" href="#">Recuperar Contraseña</a></li>
                      </ul>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">USUARIO LC</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      SECCIONES
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#">Números</a></li>
                      <li><a class="dropdown-item" href="#">Letras y palabras</a></li>
                      <!-- <li><hr class="dropdown-divider"></li> -->
                      <li><a class="dropdown-item" href="#">Bocetos</a></li>
                      <li><a class="dropdown-item" href="#">Dibujo</a></li>
                    </ul>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        QUIENES SOMOS
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Misión y Visión</a></li>
                      </ul>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">CONTACTENOS</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>

    @yield('content')
    
    <footer class="Footer">
      <div class="SVG" style="height: 150px; overflow: hidden;">
          <svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;">
              <path d="M0.00,50.10 C150.00,150.33 349.20,-50.10 500.00,50.10 L500.00,150.33 L0.00,150.33 Z"
                  style="stroke: none; fill: #242528;"></path>
          </svg>
      </div>
      <div class="Contacto">
           <div class="Redes">
          <h2> Nuestras Redes </h2>
          <a href="https://es-la.facebook.com/"><i class="fa-brands fa-facebook"></i></a>
          <a href="https://twitter.com/?lang=es"><i class="fa-brands fa-twitter"></i></a>
          <a href="https://www.instagram.com/"><i class="fa-brands fa-instagram"></i></a>
      </div>
      <div class="Correo">
          <h2> Contacto: </h2>
          <p> learncartoon@gmail.com </p>
      </div>
      <div class="Telefono">
          <h2> Telefono: </h2>
          <p> 01 8000 123 456 </p>
      </div>
      </div>
      <div class="Nosotros">
      </div>
      <div class="Derechos">
          <p> &reg; 2023 LEARN CARTOON, COLOMBIA, TODOS LOS DERECHOS RESERVADOS </p>
      </div>
  </footer>

</body>
</html>