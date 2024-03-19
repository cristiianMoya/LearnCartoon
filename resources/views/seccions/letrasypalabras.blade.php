@extends('layouts.platillaSeccions')

@section('title', 'LC/Secciones/Letras y Palabras')
@section('nombreSeccion', 'Letras y Palabras')
@section('ImgSeccion')
    <img src="{{asset('/storage/imagenes/RjWkK4qKP2MoyzDeuKg45F6Gq22R9f7OnbKl0XY2.gif')}}">
@endsection

@section('prsSeccion')
    <img src="{{asset('/storage/imagenes/sJIbPnpU0VjlTBXhRnB6veqpimviBVsNBnnDzIhv.gif')}}">
@endsection

@section('content')

<p class="StarSec">"¡Hola amiguitos! Sabías que la comunicación es muy importante para todos?
 ¡Sí, para todos! Esto significa que hablar y compartir tus ideas y sentimientos es algo
  muy valioso. Las palabras son como pequeñas herramientas que te ayudarán a comunicarte
  con los demás y a expresar todo lo que sientes. Así que, nunca tengas miedo de hablar
   y usar tus palabras.</p>
   <hr noshade="" class="HR5">
   <div class="Vocales">
    <div class="contenidoVoc">
        <h2>Vocales</h2>
        <p>Empezemos por la facil escritura y lectura, la
            contrucción de palabras como también familiarizarse con ellas.</p>
    </div>
    <img src="{{asset('/storage/imagenes/bnVv6gSDlxzZkZpLNzmCggPIAv6iCGtc5uQ2Pu0C.gif')}}">
    <button class="boton"><a href=""> Empieza aquí </a></button>
</div>
<hr noshade="" class="HR5">
<div class="Abecedario">
    <div class="contenidoAbce">
        <h2>Abecedario</h2>
        <p>Aumenta el nivel guerrrero y tu aprendizaje tambien por eso agregamos nuevas
            letras para expandir tu memoria, vocabulario, comprensión.</p>
    </div>
    <img src="{{asset('/storage/imagenes/Wx0tPYV85aV8iRDirUs7o83OSPxwJZC8hqyWeSaE.gif')}}">
    <button class="boton"><a href=""> Empieza aquí </a></button>
</div>
<hr noshade="" class="HR5">
<div class="OracionesCom">
    <div class="contenidoOra">
        <h2>Oraciones Completas</h2>
        <p>Finalmente las oraciones te sirvira para comunicarte de manera mas efectiva
            desarrollaras habilidades que siempre te serviran en tu vida.
        </p>
    </div>
    <img src="{{asset('/storage/imagenes/AXY6Yewqexj61q8IHWfDZ0GwWQJb2fI10yqqNRtA.gif')}}">
    <button class="boton"><a href=""> Empieza aquí </a></button>
</div>
@endsection