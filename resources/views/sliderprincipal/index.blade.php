@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">


                <div class="card-body text-center">
                <a href="{{ route('sliderprincipal.create')}}" class="btn btn-info float-right text-white"> +</a>
                   <h1> Slider Principal</h1>

                   <div class="table-responsive">
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>

                              <th scope="col">Texto</th>
                              <th scope="col">Imagen</th>
                              <th scope="col">Acciones</th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach ($sliderprincipal as $item)
                                <tr>
                                    <td> {{$item->nombre}}</td>
                                    <td> {{$item->imagen}}</td>
                                    <td>
                                        <button class="btn btn-default">editar</button>
                                        <button class="btn btn-danger">Eliminar</button>
                                        <button class="btn btn-success">Ver</button>
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
