@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body  text-center ">
                        <div class="container">
                            <div class="row">
                                    <div class="card-body">
                                        <p class="card-text">{{ $categoriaskill->nombre }}</p>
                                    </div>
                                </div>
                                <a href="{{ route('categoriaskill.index') }}" class="btn btn-primary">Volver</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
