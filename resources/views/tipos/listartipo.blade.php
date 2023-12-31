@extends('layouts.app')

@section('title','lear cartoon')

@section('content')

<div class ="container">
    <table id="idPqrsd" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Id usuario</th>
                <th>nombre_tipo</th>
                <th>url</th>
                <th>Detalle</th>
                <th>Eliminar</th>
            </tr>
        </thead>
        <tbody>
          @foreach ($tipos  as $tipo)
              <tr>
                  <td>{{$tipo->id}}</td>
                  <td>{{$tipo->nombre_tipo}}</td>
                  <td>{{$tipo->url}}</td>
                  
                  <td><a href="{{route('tipo.show',$tipo->id)}}">Detalle</a></td>
                 <td>
                    <form method="post" action="{{route('tipo.destroy',$tipo->id)}}">
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
    











@endsection

@section('js')


<script type="text/javascript">

   $(document).ready(function() {
    // $('#idPqrsd').DataTable();
  
    // Enable DataTables: https://datatables.net/examples/basic_init/
    try {
      if ($.fn.dataTable.isDataTable("#idPqrsd")) {
        $("#idPqrsd").DataTable()
      } else {
        $("#idPqrsd").DataTable({
          language: {
            url:
              "https://cdn.datatables.net/plug-ins/1.10.22/i18n/Spanish.json",
          },
        })
      }
    } catch (error) {
      console.log(
        "Unable to add Filters to a table from this page - " + error.name
      )
    }


} );
</script>

@endsection
