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
                                    <img class="card-img-top" src="/storage/{{ $nuestrosskill->imagen }}"
                                        alt="{{ $nuestrosskill->nombre }}">
                                    <div class="card-body">
                                        <p class="card-text text-uppercase">{{ $nuestrosskill->nombre }}</p>
                                    </div>
                                    <div class="card-body">
                                        <p class="card-text text-justify text-sm">{{ $nuestrosskill->descripcion }}</p>
                                    </div>
                                    <a href="{{ route('nuestrosskill.index') }}" class="btn btn-primary">Volver</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
