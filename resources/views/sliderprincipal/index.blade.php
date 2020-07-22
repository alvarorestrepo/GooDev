@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">


                <div class="card-body text-center">
                    <a href="" class="btn btn-info float-right text-white"> +</a>
                   <h1> Slider Principal</h1>

                   <div class="table-responsive">
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>

                              <th scope="col">Texto</th>
                              <th scope="col">img</th>
                              <th scope="col">Acciones</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>

                              <td>slider 1</td>
                              <td>foto1.jpg</td>
                              <td>
                                  <button class="btn btn-default">editar</button>
                                  <button class="btn btn-danger">Eliminar</button>
                                  <button class="btn btn-success">Ver</button>
                              </td>
                            </tr>
                            <tr>

                              <td>slider 1</td>
                              <td>foto1.jpg</td>
                              <td>
                                  <button class="btn btn-default">editar</button>
                                  <button class="btn btn-danger">Eliminar</button>
                                  <button class="btn btn-success">Ver</button>
                              </td>
                            </tr>
                            <tr>

                              <td>slider 1</td>
                              <td>foto1.jpg</td>
                              <td>
                                  <button class="btn btn-default">editar</button>
                                  <button class="btn btn-danger">Eliminar</button>
                                  <button class="btn btn-success">Ver</button>
                              </td>
                            </tr>
                            <tr>

                              <td>slider 1</td>
                              <td>foto1.jpg</td>
                              <td>
                                  <button class="btn btn-default">editar</button>
                                  <button class="btn btn-danger">Eliminar</button>
                                  <button class="btn btn-success">Ver</button>
                              </td>
                            </tr>

                          </tbody>
                    </table>
                  </div>

                </div>

            </div>

        </div>
    </div>
</div>
@endsection
