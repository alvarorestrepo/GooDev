@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body text-center">
                        <a href="{{ route('nuestraexperiencia.create') }}" class="btn btn-info float-right text-white"> +</a>
                        <h1> Nuestras Experiencias</h1>
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">Link</th>
                                        <th scope="col">Imagen</th>
                                        <th scope="col">Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($nuestraexperiencia as $item)
                                        <tr>
                                            <td> {{ $item->link }}</td>
                                            <td> <img class="imgtable" src="/storage/{{ $item->imagen }}"
                                                alt="{{ $item->link }}"> </td>
                                            <td>
                                                <a href="{{ route('nuestraexperiencia.edit', ['nuestraexperiencia' => $item->id])  }}"
                                                    class="btn btn-default d-inline-flex btn-sm">editar</a>
                                                <div class="d-inline-flex">

                                                    <form
                                                        action="{{ route('nuestraexperiencia.destroy', ['nuestraexperiencia' => $item->id]) }}"
                                                        method="POST" class="d-inline-flex">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button onclick="return confirm('Desea eliminar el skill?')"
                                                            class="btn btn-danger d-inline-flex btn-sm">Eliminar</button>
                                                    </form>
                                                </div>
                                                <a href="{{ route('nuestraexperiencia.show', ['nuestraexperiencia' => $item->id]) }}"
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
