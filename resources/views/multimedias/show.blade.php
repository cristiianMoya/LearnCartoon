@extends('layouts.app')

@section('content')

<h1>Hola desde show</h1><br><br>
<h2> Multimedia Creada 👌 </h2>

{{$multimedia}}

{{-- <iframe src="{{ 'http://localhost/LearnCartoon/public/storage/imagenes/' . $usuario->urlPdf }}"  frameborder="0"></iframe> --}}


@endsection