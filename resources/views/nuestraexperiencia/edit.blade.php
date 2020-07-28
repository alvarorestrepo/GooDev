@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">

                    <div class="card-body">
                        <h1 class="text-center">editar Experiencia </h1>

                        <form action="{{ route('nuestraexperiencia.update',['nuestraexperiencia'=>$nuestraexperiencia->id]) }}" method="POST" enctype="multipart/form-data"
                            novalidate>
                            @csrf
                            @method('PUT')
                            
                            <div class="form-group">

                                <label for="link">Link</label>
                                <input type="text" class="form-control  @error('link') is-invalid @enderror" id="link"
                                    name="link" placeholder="Escriba el link aqui" value="{{ $nuestraexperiencia->link }}">
                                @error('link')
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
                                <div>
                                    <p>Imagen Actual:</p>

                                    <img class="imgtable" src="/storage/{{ $nuestraexperiencia->imagen }}"
                                        alt="{{ $nuestraexperiencia->link }}">
                                </div>

                            </div>
                            <input type="submit" class="btn btn-primary mt-2" value="Agregar">
                            <a href="{{ route('nuestraexperiencia.index') }}" class="btn btn-success float-right">Volver</a>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
