@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">

                    <div class="card-body">
                        <h1 class="text-center">Nuevo Skill </h1>

                        <form action="{{ route('nuestrosskill.store') }}" method="POST" enctype="multipart/form-data"
                            novalidate>
                            @csrf
                            <div class="form-group">

                                <label for="nombre">Nombre de skill</label>
                                <input type="text" class="form-control  @error('nombre') is-invalid @enderror" id="nombre"
                                    name="nombre" placeholder="Escriba el nombre del skill" value="{{ old('nombre') }}">
                                @error('nombre')
                                <span class="invalid-feedback d-block" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror

                                <div class="form-group mt-2">
                                    <label for="descripcion">Descripcion de Skill</label>
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

                                <label class="mt-2" for="categoria">Seleccione una categoria</label>

                                <select name="categoriaskills_id" id="categoria" class="form-control">
                                    <option disabled selected>Selectiones una Categoria</option>
                                    @foreach($categoriaskill as $item)
                                        <option value="{{ $item->id }}">{{ $item->nombre }}</option>
                                    @endforeach
                                </select>
                                @error('categoriaskills_id')
                                <span class="invalid-feedback d-block" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror

                            </div>
                            <input type="submit" class="btn btn-primary mt-2" value="Agregar">
                            <a href="{{ route('sliderprincipal.index') }}" class="btn btn-success float-right">Volver</a>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
