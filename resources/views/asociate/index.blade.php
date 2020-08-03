@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body text-center">
                        <a href="{{ route('asociate.create') }}" class="btn btn-info float-right text-white"> +</a>
                        <h1> Asociate</h1>
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">Titulo</th>
                                        <th scope="col">Descripcion</th>
                                        <th scope="col">Imagen</th>
                                        <th scope="col">Telefono</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($asociate as $item)
                                        <tr>
                                            <td> {{ $item->titulo }}</td>
                                            <td> {{ $item->descripcion }}</td>
                                            <td> <img class="imgtable" src="/storage/{{ $item->imagen }}"
                                                    alt="{{ $item->titulo }}"> </td>
                                            <td> {{ $item->telefono }}</td>
                                            <td> {{ $item->email }}</td>
                                            <td>
                                                <a href="{{ route('asociate.edit', ['asociate' => $item->id]) }}"
                                                    class="btn btn-default d-inline-flex btn-sm">editar</a>
                                                <div class="d-inline-flex">

                                                    <form
                                                        action="{{ route('asociate.destroy',$item->id) }}"
                                                        method="POST" class="d-inline-flex">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button onclick="return confirm('Desea eliminar asociate?')"
                                                            class="btn btn-danger d-inline-flex btn-sm">Eliminar</button>
                                                    </form>
                                                </div>
                                                <a href="{{ route('asociate.show', $item->id) }}"
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
