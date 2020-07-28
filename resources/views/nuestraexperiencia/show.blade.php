@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body  text-center ">
                        <div class="container">
                            <div class="row">
                                <div class="col card imgshow">
                                    <img class="card-img-top" src="/storage/{{ $nuestraexperiencia->imagen }}"
                                        alt="{{ $nuestraexperiencia->link }}">
                                    <div class="card-body">
                                        <p class="card-text text-uppercase">{{ $nuestraexperiencia->link }}</p>
                                    </div>
                                    <a href="{{ route('nuestraexperiencia.index') }}" class="btn btn-primary">Volver</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
