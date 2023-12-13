<!DOCTYPE html>
<html lang="es">
  <head>
    <meta sharset="UTF-8" />
    <title>@yield('title')Laravel</title>
    {{-- <link rel="stylesheet" href="assets/css/style.css" /> --}}
    <link rel="stylesheet" href="{{asset('css/menu.css')}}">
  </head>
  <body>
    @yield('content')

    <header>
      <a href="index.html"
        ><img src="{{asset('img/imagen1.png')}}" class="imagen1"></a>
      <h2 class="logo">Learn Cartoon</h2>
      <nav class="navegacion">
        <ul>
          <li><a href="#" class="menu">Inicio</a></li>
          <li>
            <a href="registro.html" class="menu">Registrarse</a>
            <ul class="submenu">
              <li><a href="login.html" class="menu">Iniciar sesión</a></li>
              <li>
                <a href="recuperar contraseña.html" class="menu"
                  >Recuperar contraseña</a
                >
              </li>
              <li>
                <a href="cerrar sesion.html" class="menu">Cerrar sesion</a>
              </li>
            </ul>
          </li>
          <li>
            <a href="cuentaLC.html" class="menu">Usuario LC</a>
            <!-- <li>
                    <ul class="submenu">
                        <li><a href="cuentaLC.html" class="menu
                            ">Usuario LC</a></li>
                        <li><a href="miembros.html">Miembros</a></li>
                    </ul>
                </li> -->
          </li>

          <li>
            <a href="#" class="menu">Secciones</a>
            <ul class="submenu">
              <li><a href="Numeros.html" class="menu">Numeros</a></li>
              <li>
                <a href="Letras y palabras.html" class="menu"
                  >Letras y palabras</a
                >
              </li>
              <li><a href="Bocetos.html" class="menu">Bocetos</a></li>
              <li><a href="Dibujos.html" class="menu">Dibujos</a></li>
            </ul>
          </li>
          <li>
            <a href="#" class="menu">Quienes Somos</a>
            <ul class="submenu">
              <li><a href="Mision.html" class="menu">Mision</a></li>
              <li><a href="Vision.html" class="menu">Vision</a></li>
            </ul>
          </li>
          <li><a href="#" class="menu">Contactenos</a></li>
        </ul>
      </nav>
      <li class="logins">
        <a href="{{route('registro.index')}}" class="logins">Register</a>
        <a href="{{route('sesion.index')}}" class="logins">Log in</a>
      </li>
    </header>
  </body>
</html>