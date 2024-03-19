@extends('layouts.platillaSeccions')

@section('title', 'LC/Secciones/Números')
@section('nombreSeccion', 'Números')
@section('ImgSeccion')
<img src="{{asset('/storage/imagenes/R3hkYTrjYIkJKLcC8MRLyrfNLqt2RZA6SrZnjG8y.gif')}}">
@endsection

@section('prsSeccion')
<img src="{{asset('/storage/imagenes/qDgnOEruUMEn6xVoftt3XxucXeNzdMFxPlURGfot.gif')}}">
@endsection

@section('content')

<div class="Escuchar">
    <div class="contenidoEsc">
      <h2>Escuchar</h2>
      <p>En este nivel puedes aprenderte el sonido y recordar los números, para
        familiarizarte con ellos.</p>
    </div>
    <img src="{{asset('/storage/imagenes/y484u3qju6hV8QTikvLmKy32rMdN6xp68bjJTeqP.gif')}}">
    <button class="boton"><a href=""> Empieza aquí </a></button>
  </div>
  <hr noshade="" class="HR5">
  <div class="Contar">
    <div class="contenidoCont">
      <h2>Contar</h2>
      <p>Aprendete los números de manera ordenada, mejora su entendimiento, que puedan relacionar
        los números y las cantidades de manera cotidiana.</p>
    </div>
    <img src="{{asset('/storage/imagenes/y18ZJun0hu9KzVsYC5lgRvXicdRKdJoDXc8LEjPw.gif')}}">
    <button class="boton"><a href=""> Empieza aquí </a></button>
  </div>
  <hr noshade="" class="HR5">
  <div class="Matematicas">
    <div class="contenidoMat">
      <h2>Matematicas</h2>
      <p>El desarrollo intelectual, logico y numerico es importante para tu vida.
      <br>Matematica basica para niños de 5 a 10 años.</p>
    </div>
    <img src="{{asset('/storage/imagenes/CsrsqA4228omi10LYrbbnObnAr4dxqj8hsgTVmtb.gif')}}">
    <button class="boton"><a href=""> Empieza
        aquí </a></button>
  </div>
@endsection