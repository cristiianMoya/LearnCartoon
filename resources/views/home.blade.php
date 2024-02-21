@extends('layouts.hmf')

@section('title', 'Learn Cartoon')

@section('content')

{{-- <h1 class="text-5xl text-center pt-40">Bienvenido a Learn Cartoon</h1> --}}

<div class="InfoSecciones">
    <h2 class="InicioPP">¡Aprende y Diviértete!</h2>

    <!-- ---------------Carrusel--------------- -->

    <div class="Carrusel">
      <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img
              src="Images/llegare a tiempo2.webp"
              class="d-block w-100"
              alt="Banner 1"
            />
          </div>
          <div class="carousel-item">
            <img
              src="Images/llegare a tiempo5.webp"
              class="d-block w-100"
              alt="Banner 2"
            />
          </div>
          <div class="carousel-item">
            <img
              src="Images/llegare a tiempo3.webp"
              class="d-block w-100"
              alt="Banner 3"
            />
          </div>
        </div>
        <button
          class="carousel-control-prev"
          type="button"
          data-bs-target="#carouselExampleAutoplaying"
          data-bs-slide="prev"
        >
          <span
            class="carousel-control-prev-icon"
            aria-hidden="true"
          ></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button
          class="carousel-control-next"
          type="button"
          data-bs-target="#carouselExampleAutoplaying"
          data-bs-slide="next"
        >
          <span
            class="carousel-control-next-icon"
            aria-hidden="true"
          ></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>

    <!-- ----------------------------------------------- -->
    <section class="Introduccion1">
      {{-- @if($multimedia)
      <img src="{{ asset($multimedia->url) }}" alt="Imagen de Goku" />
      @else
      <p>No se encontro la Imagen</p>
      @endif --}}
      
      <p>
        Nos enfocamos en caracterisarnos por nuestro interes y compromiso al
        brindar nuestros servicios con secciones, cada una con niveles de
        dificultad como también:<br><br>
        - Juegos didacticos y divertidos.<br>
        - Plantillas y dibujos.<br>
        - Interacción con personajes de anime y animaciones.<br>
      </p>
    </section>

    <section class="Introduccion2">
      <p>
        A través de plataformas digitales, videos, imagenes, juegos entre
        otros contenidos eduactivos. La tecnología brinda a los niños la
        oportunidad de explorar nuevos conociminetos, desarrollar
        habilidades y expandir su creatividad con los que evidencian con
        esta mundo tecnologico educativo desde cualquier lugar y momento.
      </p>
      <img src="Images/Niños.gif" alt="Imagen Educativa" />
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

@endsection