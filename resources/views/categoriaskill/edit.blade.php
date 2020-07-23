@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">

                    <div class="card-body">
                        <h1 class="text-center">Editar Categoria Skill </h1>

                        <form action="{{ route('categoriaskill.update', ['categoriaskill' => $categoriaskill->id]) }}"
                            method="POST" novalidate>
                            @csrf
                            @method('PUT')
                            <div class="form-group">

                                <label for="nombre">Categoria del Skill</label>
                                <input type="text" class="form-control  @error('nombre') is-invalid @enderror" id="nombre"
                                    name="nombre" placeholder="Escriba la categoria" value="{{ $categoriaskill->nombre }}">
                                @error('nombre')
                                <span class="invalid-feedback d-block" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror

                            </div>
                            <input type="submit" class="btn btn-primary mt-2" value="Agregar">
                            <a href="{{ route('categoriaskill.index') }}" class="btn btn-success float-right">Volver</a>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
