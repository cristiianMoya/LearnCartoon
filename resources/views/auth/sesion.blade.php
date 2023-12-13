

@extends('layouts.app')

@section('title','Sesion')

@section('content')


<!DOCTYPE html>
<html lang="es">
  <head>
    <script
      src="https://kit.fontawesome.com/4aa637978b.js"
      crossorigin="anonymous"
    ></script>
    <meta sharset="UTF-8" />
    <link rel="stylesheet" href="{{asset('css/login.css')}}">
    {{-- <link rel="stylesheet" href="assets/css/menu.css" /> --}}
  </head>
  <body class="login">
    {{-- <img src="{{asset('img/fondo_login')}}"> --}}
    <section>
      <div class="container">
        <div class="formulario">
          <form action="post">
            <h2>Iniciar Sesion</h2>
            <div class="input_container">
              <i class="fa-solid fa-envelope"></i>
              <input type="email" required >
              <label for="#">Email</label>
            </div>
            <div class="input_container">
              <i class="fa-solid fa-lock"></i>
              <input type="password" required>
              <label for="#">Contraseña</label>
              <!-- <button type="button" onclick="togglePasswordVisibility()"><img src="Images/SeePassword.webp"></button> -->
            </div>
            <div class="olvidar_contraseña">
              <label for="#">
                <input type="checkbox" />
                <a href="recuperar contraseña.html">Olvido su contraseña</a>
              </label>
            </div>
          </form>
          <div>
            <button>
              <svg
                xmlns="http://www.w3.org/2000/svg"
                height="24"
                fill="white"
                viewBox="0 -960 960 960"
                width="24"
              >
                <path
                  d="M120-160v-640l760 320-760 320Zm80-120 474-200-474-200v140l240 60-240 60v140Zm0 0v-400 400Z"
                />
              </svg>
              <span>Acceder</span>
            </button>
            <div class="registrar">
              <p>No tengo cuenta<a href="registro.html">Crear cuenta</a></p>
            </div>
          </div>
        </div>
        <div class="formulario_dos">
          <img src="{{asset('img/imagen1.png')}}" class="imagen1_login">
          <p class="bienvenido_border">WELCOME</p>
          <p class="bienvenido">WELCOME</p>
        </div>
      </div>
    </section>
  </body>
</html>
