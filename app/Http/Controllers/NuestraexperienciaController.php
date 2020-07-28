<?php

namespace App\Http\Controllers;

use App\Nuestraexperiencia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class NuestraexperienciaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nuestraexperiencia = Nuestraexperiencia::all();
        return view('nuestraexperiencia.index',compact('nuestraexperiencia'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('nuestraexperiencia.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Obtener la validacion
        $data = request()->validate([
            'link'=>'required|min:4',
            'imagen'=>'required|image'
        ]);

        // Obtengo la ruta de la imagen y la guardo en una variable
        $ruta_imagen = $request['imagen']->store('upload-nuestraexperiencia','public');

        //inserto los datos en la base de datos
        Nuestraexperiencia::create([
            'link'=>$data['link'],
            'imagen'=>$ruta_imagen
        ]);

        return redirect()->route('nuestraexperiencia.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Nuestraexperiencia  $nuestraexperiencia
     * @return \Illuminate\Http\Response
     */
    public function show(Nuestraexperiencia $nuestraexperiencia)
    {
        return view('nuestraexperiencia.show',compact('nuestraexperiencia'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Nuestraexperiencia  $nuestraexperiencia
     * @return \Illuminate\Http\Response
     */
    public function edit(Nuestraexperiencia $nuestraexperiencia)
    {
        return view('nuestraexperiencia.edit',compact('nuestraexperiencia'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Nuestraexperiencia  $nuestraexperiencia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Nuestraexperiencia $nuestraexperiencia)
    {
        // Obtener la validacion
        $data = request()->validate([
            'link'=>'required|min:4'
        ]);

        $nuestraexperiencia->link = $data['link'];

        if (request('imagen')) {

            // obtengo la ruta y la guardo en una variable
            $ruta_imagen = $request['imagen']->store('upload-nuestraexperiencia','public');

            // elimino de la carpeta de laravel
            Storage::delete('public/'.$nuestraexperiencia->imagen);

            $nuestraexperiencia->imagen = $ruta_imagen;
        }

        $nuestraexperiencia->save();

        return redirect()->route('nuestraexperiencia.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Nuestraexperiencia  $nuestraexperiencia
     * @return \Illuminate\Http\Response
     */
    public function destroy(Nuestraexperiencia $nuestraexperiencia)
    {
        // eliminar imagen
        Storage::delete('public/'.$nuestraexperiencia->imagen);

        $nuestraexperiencia->delete();

        return redirect()->route('nuestraexperiencia.index');
    }
}
