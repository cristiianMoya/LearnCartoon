@extends('layouts.plantilla')

@section('content')

<h1>Registrarse</h1>
<form action="{{route('usuarios.store')}}" method="POST" enctype="multipart/form-data">

    @csrf
    <label>
        Nombre:
        <br>
        <input type="text" name="nombre_usuario">
    </label>
    <br>
    <label>
        Correo:
        <br>
        <input type="text" name="correo">
    </label>
    <br>
    <label>
        Contraseña:
        <br>
        <input type="text" name="contraseña">
    </label>
    <br>
    <label>
        Rol:
        <br>
        <input type="text" name="rol">
    </label>
    {{-- <br><br>
    <label >Adjuntar archivo PDF</label>
    <br><br>
    <input type="file" name="urlPdf" class="form-control-file" accept="pdf/*"> --}}
    
    
    <br><br>
    <button type="submit">Enviar Formulario:</button>