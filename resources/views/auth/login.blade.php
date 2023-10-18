@extends('layouts.app')

@section('title', 'Login')

@section('content')
<div class="block mx-auto my-12 p-8 bg-white w-1/3 border border-gray-200 rounded-lg shadow-lg">

<h1 class="text-3xl text-center font-bold">Login</h1>
<form class="mt-4" method="POST" action="">
<input type="email" class=" border border-gray-200 rounded-md bg-gray-200 w-full tex-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Correo" 
id="email" name="email">

<input type="passwork" class=" border border-gray-200 rounded-md bg-gray-200 w-full tex-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Contraseña" 
id="passwork" name="passwork">









</form>

@endsection