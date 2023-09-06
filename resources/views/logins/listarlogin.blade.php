@extends('layouts.plantilla')

@section('title','larav2319')

@section('content')

<div class ="container">
    <table id="idPqrsd" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Id curso</th>
                <th>Nombre</th>
                <th>Descripcion</th>
                <th>UrlPdf</th>
                <th>Detalle</th>
                <th>Eliminar</th>
            </tr>
        </thead>
        <tbody>
          @foreach ($logins  as $login)
              <tr>
                  <td>{{$login->id}}</td>
                  <td>{{$login->name}}</td>
                  <td>{{$login->descripcion}}</td>
                  <td>{{$login->urlPdf}}</td>
                  
                  <td><a href="{{route('login.show',$login->id)}}">Detalle</a></td>
                 <td>
                    <form method="post" action="{{route('login.destroy',$login->id)}}">
                        @method('delete')
                        @csrf
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                 </td>
             
                 
                 
                  {{-- <td><a href="{{route('curso.destroy',$curso->id)}}">Eliminar</a></td> --}}
                  
    
              </tr>
          @endforeach
        </tbody>
        <!-- <tfoot>
            <tr>
                <th>Id Pqrsd</th>
                <th>esAnomina</th>
                <th>TipoPQRSD</th>
                <th>Estado</th>
                <th>Creada</th>
                <th>Responder</th>
                <th>Detalle</th>
            </tr>
        </tfoot> -->
    </table>
    
    </div>