@extends('layouts.hmf')

@section('title', 'LC/Multimedias')

@section('content')
<br>
<h2> Welcome to multimedia </h2>
{{-- <img src="{{ asset('/storage/imagenes/hVPDwLAVZWWn9WtDifKLRyBkrFMRDIjgkTc6wqQB.jpg') }}"> --}}
<br>

<div class="container">
    <div class="row">
        {{-- <div class="col">

            <div class="card-columns">

                @foreach ($multimedias as $multimedia)
                    <div class="card">
                        <img class="card-img-top" src="{{asset($multimedia->url)}}" alt="">
                    </div>
                @endforeach

            </div>

        </div> --}}

        @foreach ($multimedias as $multimedia)
            <div class="col-4">
                <div class="card">
                    <img src="{{asset($multimedia->url)}}" class="img-fluid">
                    <div class="card-footer">
                        <a href="{{route('multimedia.show',$multimedia->id)}}" class="btn btn-primary">Detalles</a>
                        <form action="" class="d-inline">
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

@endsection