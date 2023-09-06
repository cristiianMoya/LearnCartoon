@extends('layouts.plantilla')

@section('content')

<h1>Hola desde show</h1>

{{$curso}}

<iframe src="{{ 'http://localhost/learncartoon/public/storage/imagenes/' . $login->urlPdf }}"  frameborder="0"></iframe>


@endsection