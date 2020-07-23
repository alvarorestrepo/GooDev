@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body text-center">
                        <a href="{{ route('categoriaskill.create') }}" class="btn btn-info float-right text-white"> +</a>
                        <h1> Categorias Skills</h1>
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">Nombre</th>
                                        <th scope="col">Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($categoriaskill as $item)
                                        <tr>
                                            <td> {{ $item->nombre }}</td>
                                            <td>
                                                <a href="{{ route('categoriaskill.edit', ['categoriaskill' => $item->id])  }}"
                                                    class="btn btn-default d-inline-flex btn-sm">editar</a>
                                                <div class="d-inline-flex">

                                                    <form
                                                        action="{{ route('categoriaskill.destroy', ['categoriaskill' => $item->id]) }}"
                                                        method="POST" class="d-inline-flex">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button onclick="return confirm('Desea eliminar la categoria?')"
                                                            class="btn btn-danger d-inline-flex btn-sm">Eliminar</button>
                                                    </form>
                                                </div>
                                                <a href="{{ route('categoriaskill.show', ['categoriaskill' => $item->id]) }}"
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
