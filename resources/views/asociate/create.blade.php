@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">

                    <div class="card-body">
                        <h1 class="text-center">Nuevo Asociate </h1>

                        <form action="{{ route('asociate.store') }}" method="POST" enctype="multipart/form-data"
                            novalidate>
                            @csrf
                            <div class="form-group">

                                <label for="titulo">Titulo</label>
                                <input type="text" class="form-control  @error('titulo') is-invalid @enderror" id="titulo"
                                    name="titulo" placeholder="Escriba el titulo " value="{{ old('titulo') }}">
                                @error('titulo')
                                <span class="invalid-feedback d-block" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror

                                <div class="form-group mt-2">
                                    <label for="descripcion">Descripcion</label>
                                    <textarea name="descripcion" class="form-control  @error('descripcion') is-invalid @enderror" id="descripcion" value={{old('descripcion')}} ></textarea>
                                  </div>
                                  @error('descripcion')
                                <span class="invalid-feedback d-block" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror

                                <label class="" for="img">Imagen</label>
                                <input type="file" class="form-control-file  @error('imagen') is-invalid @enderror"
                                name="imagen" id="img">
                                @error('imagen')
                                <span class="invalid-feedback d-block" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror

                                <label for="telefono">Telefono</label>
                                <input type="number" class="form-control  @error('telefono') is-invalid @enderror" id="telefono"
                                    name="telefono" placeholder="Escriba el telefono " value="{{ old('telefono') }}">
                                @error('telefono')
                                <span class="invalid-feedback d-block" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror

                                <label for="email">Email</label>
                                <input type="text" class="form-control  @error('email') is-invalid @enderror" id="email"
                                    name="email" placeholder="Escriba el email " value="{{ old('email') }}">
                                @error('email')
                                <span class="invalid-feedback d-block" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror

                            </div>
                            <input type="submit" class="btn btn-primary mt-2" value="Agregar">
                            <a href="{{ route('asociate.index') }}" class="btn btn-success float-right">Volver</a>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
