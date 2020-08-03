@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">


                    <div class="card-body text-center">
                        <a href="{{ route('descubreservicio.create') }}" class="btn btn-info float-right text-white"> +</a>
                        <h1> Descubre nuestros servicios</h1>

                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead class="thead-dark">
                                    <tr>

                                        <th scope="col">Texto</th>
                                        <th scope="col">Imagen</th>
                                        <th scope="col">Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($descubreservicio as $item)
                                        <tr>
                                            <td> {{ $item->titulo }}</td>
                                            <td> <img class="imgtable" src="/storage/{{ $item->imagen }}"
                                                    alt="{{ $item->titulo }}"> </td>
                                            <td>
                                                <a href="{{ route('descubreservicio.edit', ['descubreservicio' => $item->id]) }}"
                                                    class="btn btn-default d-inline-flex btn-sm">editar</a>
                                                <div class="d-inline-flex">

                                                    <form
                                                        action="{{ route('descubreservicio.destroy', ['descubreservicio' => $item->id]) }}"
                                                        method="POST" class="d-inline-flex">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button onclick="return confirm('Desea eliminar el slider?')" class="btn btn-danger d-inline-flex btn-sm">Eliminar</button>
                                                    </form>
                                                </div>
                                            <a href="{{route('descubreservicio.show',['descubreservicio'=>$item->id])}}" class="btn btn-success d-inline-flex btn-sm">Ver</a>

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
