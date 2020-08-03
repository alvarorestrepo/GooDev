<?php

namespace App\Http\Controllers;

use App\Asociate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AsociateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $asociate = Asociate::all();
        return view ('asociate.index',compact('asociate'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('asociate.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Obtener la validacion de los datos
        $data = request()->validate([
            'titulo'=>'required',
            'descripcion'=>'required|min:6',
            'telefono'=>'required',
            'email'=>'required|min:6',
            'imagen'=>'required|image'
        ]);

        // obtener la ruta de la imagen
        $ruta_imagen = $request ['imagen']->store('upload-asociate','public');

        // guardar en base de datos
        Asociate::create([
            'titulo'=>$data['titulo'],
            'descripcion'=>$data['descripcion'],
            'telefono'=>$data['telefono'],
            'email'=>$data['email'],
            'imagen'=>$ruta_imagen
        ]);

            return redirect()->route('asociate.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Asociate  $asociate
     * @return \Illuminate\Http\Response
     */
    public function show(Asociate $asociate)
    {
        return view('asociate.show',compact('asociate'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Asociate  $asociate
     * @return \Illuminate\Http\Response
     */
    public function edit(Asociate $asociate)
    {
        return view('asociate.edit',compact('asociate'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Asociate  $asociate
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Asociate $asociate)
    {
        $data = request()->validate([
            'titulo'=>'required',
            'descripcion'=>'required|min:6',
            'telefono'=>'required',
            'email'=>'required|min:6',
        ]);

        $asociate->titulo = $data['titulo'];
        $asociate->descripcion = $data['descripcion'];
        $asociate->telefono = $data['telefono'];
        $asociate->email = $data['email'];

        if (request('imagen')) {
             // obtener la ruta de la imagen y guardarla en una variable
             $ruta_imagen = $request['imagen']->store('upload-asociate','public');

             //eliminar de la carpeta storage
             Storage::delete('public/'.$asociate->imagen);

             $asociate->imagen = $ruta_imagen;
        }
        $asociate->save();
        return redirect()->route('asociate.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Asociate  $asociate
     * @return \Illuminate\Http\Response
     */
    public function destroy(Asociate $asociate)
    {
         //eliminar de la carpeta storage
         Storage::delete('public/'.$asociate->imagen);

        $asociate->delete();
        return redirect()->route('asociate.index');
    }
}
