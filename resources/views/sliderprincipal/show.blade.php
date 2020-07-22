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
                                    <img class="card-img-top" src="/storage/{{ $sliderprincipal->imagen }}"
                                        alt="{{ $sliderprincipal->titulo }}">
                                    <div class="card-body">
                                        <p class="card-text">{{ $sliderprincipal->titulo }}</p>
                                    </div>
                                    <a href="{{ route('sliderprincipal.index') }}" class="btn btn-primary">Volver</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
