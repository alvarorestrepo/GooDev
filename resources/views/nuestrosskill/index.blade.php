@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body text-center">
                        <a href="{{ route('nuestrosskill.create') }}" class="btn btn-info float-right text-white"> +</a>
                        <h1> Nuestros Skills</h1>
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">Nombre</th>
                                        <th scope="col">Descripcion</th>
                                        <th scope="col">Imagen</th>
                                        <th scope="col">Categoria</th>
                                        <th scope="col">Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($nuestrosskill as $item)
                                        <tr>
                                            <td> {{ $item->nombre }}</td>
                                            <td> {{ $item->descripcion }}</td>
                                            <td> <img class="imgtable" src="/storage/{{ $item->imagen }}"
                                                alt="{{ $item->nombre }}"> </td>
                                            <td> {{ $item->categoriaskills->nombre }}</td>
                                            <td>
                                                <a href="{{ route('nuestrosskill.edit', ['nuestrosskill' => $item->id])  }}"
                                                    class="btn btn-default d-inline-flex btn-sm">editar</a>
                                                <div class="d-inline-flex">

                                                    <form
                                                        action="{{ route('nuestrosskill.destroy', ['nuestrosskill' => $item->id]) }}"
                                                        method="POST" class="d-inline-flex">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button onclick="return confirm('Desea eliminar el skill?')"
                                                            class="btn btn-danger d-inline-flex btn-sm">Eliminar</button>
                                                    </form>
                                                </div>
                                                <a href="{{ route('nuestrosskill.show', ['nuestrosskill' => $item->id]) }}"
                                                    class="btn btn-success d-inline-flex btn-sm">Ver</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
