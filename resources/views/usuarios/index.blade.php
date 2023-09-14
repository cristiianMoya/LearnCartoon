<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Learn Cartoon - WEB </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

    @vite(['resources/css/app.css'])
    <link rel="icon" href="Images/Logo LC Final-modified.png">
    <script src="https://kit.fontawesome.com/5191364857.js" crossorigin="anonymous"></script>
</head>

<body class="index-page">

    <div class="#">

        <header class="header1">
            <header class="header">
                <h1 class="Titulo-Cabecera"> Learn Cartoon </h1>
                <h2 class="Subtitulo-Cabecera"> Pasos de hoy, caminos del mañana </h2>
                <img src="Images/Logo.png" class="logo">
            </header>
        </header>

        <nav class="navegacion1">
            <nav class="navegacion">
                <ul class="menu-horizontal">
                    <li><a href="Index.html"> INICIO </a></li>

                    <li><a href="Registro.html"> REGISTRARSE </a>
                        <ul class="menu-vertical">
                            <li><a href="Iniciar Sesion.html">Iniciar Sesion</a></li>
                            <li><a href="Recuperar Contraseña.html">Recuperar Contraseña</a></li>
                        </ul>
                    </li>

                    <li><a href="Usuario LC.html"> USUARIO LC </a></li>

                    <li><a href="PagSecciones.html"> SECCIONES </a>
                        <ul class="menu-vertical">
                            <li><a href="PagNumeros.html">Numeros</a></li>
                            <li><a href="PagLyP.html">Letras y palabras</a></li>
                            <li><a href="PagBocetos.html">Bocetos</a></li>
                            <li><a href="PagDibujo.html">Dibujo</a></li>
                        </ul>
                    </li>

                    <li><a href="SobreNos.html"> QUIENES SOMOS</a>
                        <ul class="menu-vertical">
                            <li><a href="Mision.html">Misión y Visión</a></li>
                        </ul>
                    </li>

                    <li><a href="Contactenos.html"> CONTACTENOS </a></a></li>
                    <li><a href="#"> MENU </a></a>
                        <ul class="menu-vertical">
                             <li ><a href="Usuario LC.html">Perfil</a></li>
                              <li ><a href="Ayuda.html">Ayuda</a></li>
                              <li ><a href="Cambiar contraseña.html">Cambiar contraseña</a></li>
                              <li ><a href="Cerrar sesion.html">Cerrar Sesion</a></li>
                        </ul>
                    
                    </li>
                </ul>
            </nav>
        </nav>

        <section class="contenido">
            <div class="InfoSecciones">
                <h2 class="InicioPP"> ¡Aprende y Diviértete!</h2>
                
                <!-- ---------------Carrusel--------------- -->
                
                <div class="Carrusel">
                    <div id="carouselExample" class="carousel slide">
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <img src="Images/llegare a tiempo2.png" class="d-block w-100" alt="Benner 1">
                          </div>
                          <div class="carousel-item">
                            <img src="Images/llegare a tiempo5.png" class="d-block w-100" alt="Banner 2">
                          </div>
                          <div class="carousel-item">
                            <img src="Images/llegare a tiempo3.png" class="d-block w-100" alt="Banner 3">
                          </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Next</span>
                        </button>
                      </div>
                </div>

                <!-- ----------------------------------------------- -->

                <section class="Introduccion1">
                    <img src="Images/Goku-A.gif" alt="Imagen de Goku">
                    <p> Nos enfocamos en caracterisarnos por nuestro interes y
                        compromiso al brindar nuestros servicios:<br><br>

                        - Secciones, cada una con niveles de dificultad.<br>
                        - Juegos didacticos y divertidos.<br>
                        - Plantillas y dibujos.<br>
                        - Interacción con personajes de anime y animaciones.<br>
                    </p>
                </section>
                <section class="Introduccion2">
                    <p> A través de plataformas digitales, videos, imagenes, juegos entre 
                        otros contenidos eduactivos. La tecnología brinda a los niños la
                        oportunidad de explorar nuevos conociminetos, desarrollar habilidades
                        y expandir su creatividad con los que evidencian con esta mundo 
                        tecnologico educativo desde cualquier lugar y momento.
                    </p>
                    <img src="Images/Niños.gif" alt="Imagen Educativa">
                </section>

                <main class="ContenidoAdicional">
                    <section class="banner">
                      <h2>Contenido que te podría gustar</h2>
                      <p>Explora nuestro mundo interactivo lleno de juegos educativos y actividades emocionantes.</p>
                      <a href="PagSecciones.html" class="cta-button">¡Comienza ahora!</a>
                    </section>
                    
                    <section class="features">
                      <div class="feature">
                        <a href="PagDibujo.html"> <img src="Images/dibujo1.gif" alt="Juegos"></a>
                        <h3> Colorea y pinta. 🎨</h3>
                        <p>Disfruta de usar tu imaginación. Todos los colores disponibles al uso 
                            que quieras.
                        </p>
                      </div>
                      
                      <div class="feature">
                        <a href="PagBocetos.html"><img src="Images/Bocetos1.gif" alt="Actividades"></a>
                        <h3>Escoje a tu preferencia.</h3>
                        <p> Si deseas una guia no te preocupes tienes la ayuda necesaria para empezar 
                            tus pinturas.
                        </p>
                      </div>
                      
                      <div class="feature2">
                        <a href=""><img src="Images/llegare a tiempoo.gif" alt="Premios"></a>
                        <h3>Diviértete y aprende.</h3>
                        <p>Supera desafíos, recuerda que siempre hay seguir aprendiendo.</p>
                      </div>
                    </section>
                  </main>
                
            </div>
        </section>

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
    </div>

</body>

</html>




