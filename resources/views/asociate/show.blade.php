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
                                    <img class="card-img-top" src="/storage/{{ $asociate->imagen }}"
                                        alt="{{ $asociate->nombre }}">
                                    <div class="card-body">
                                        <p class="card-text text-uppercase">{{ $asociate->titulo }}</p>
                                    </div>
                                    <div class="card-body">
                                        <p class="card-text text-justify text-sm">Descripcion: {{ $asociate->descripcion }}</p>
                                    </div>
                                    <div class="card-body">
                                        <p class="card-text text-justify text-sm">Telefono: {{ $asociate->telefono }}</p>
                                    </div>
                                    <div class="card-body">
                                        <p class="card-text text-justify text-sm">Email: {{ $asociate->email }}</p>
                                    </div>
                                    <a href="{{ route('asociate.index') }}" class="btn btn-primary">Volver</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
