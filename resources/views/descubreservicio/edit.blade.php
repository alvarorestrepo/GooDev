@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">

                    <div class="card-body">
                        <h1 class="text-center">Editar Descubre Servicio </h1>

                        <form action="{{ route('descubreservicio.update', ['descubreservicio' => $descubreservicio->id]) }}"
                            method="POST" enctype="multipart/form-data" novalidate>
                            @method('PUT')
                            @csrf
                            <div class="form-group">

                                <label for="titulo">Titulo Servicio</label>
                                <input type="text" class="form-control  @error('imagen') is-invalid @enderror" id="titulo"
                                    name="titulo" placeholder="Escriba el titulo servicio"
                                    value="{{ $descubreservicio->titulo }}">
                                @error('titulo')
                                <span class="invalid-feedback d-block" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror

                                <label class="mt-2" for="img">Imagen</label>
                                <input type="file" class="form-control-file  @error('imagen') is-invalid @enderror"
                                    name="imagen" id="img">
                                @error('imagen')
                                <span class="invalid-feedback d-block" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div>
                                <p>Imagen Actual:</p>

                                <img class="imgtable" src="/storage/{{ $descubreservicio->imagen }}"
                                    alt="{{ $descubreservicio->titulo }}">
                            </div>
                            <input type="submit" class="btn btn-primary mt-2" value="Agregar">
                            <a href="{{ route('descubreservicio.index') }}" class="btn btn-success float-right">Volver</a>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
