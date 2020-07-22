<?php

namespace App\Http\Controllers;

use App\Sliderprincipal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class SliderprincipalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliderprincipal = Sliderprincipal::all();
        return view('sliderprincipal.index', compact('sliderprincipal'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sliderprincipal.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // obtener validacion
        $data = request()->validate([
            'titulo'=>'required|min:6',
            'imagen'=>'required|image',
        ]);

        // obtener la ruta de la imagen y guardarla en una variable
        $ruta_imagen = $request['imagen']->store('upload-sliderprincipal','public');


        // insertar en la base de datos
            Sliderprincipal::create([
            'titulo'=> $data['titulo'],
            'imagen'=>$ruta_imagen,
        ]);

        return redirect()->route('sliderprincipal.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Sliderprincipal  $sliderprincipal
     * @return \Illuminate\Http\Response
     */
    public function show(Sliderprincipal $sliderprincipal)
    {
        return view('sliderprincipal.show',compact('sliderprincipal'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Sliderprincipal  $sliderprincipal
     * @return \Illuminate\Http\Response
     */
    public function edit(Sliderprincipal $sliderprincipal)
    {
        return view('sliderprincipal.edit', compact('sliderprincipal'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Sliderprincipal  $sliderprincipal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sliderprincipal $sliderprincipal)
    {
        // obtener validacion
        $data = request()->validate([
            'titulo'=>'required|min:6',
        ]);

        $sliderprincipal->titulo = $data['titulo'];

        if (request('imagen')) {
            // obtener la ruta de la imagen y guardarla en una variable
            $ruta_imagen = $request['imagen']->store('upload-sliderprincipal','public');

            //eliminar de la carpeta storage
            Storage::delete('public/'.$sliderprincipal->imagen);

            $sliderprincipal->imagen = $ruta_imagen;
        }

        $sliderprincipal->save();
        return redirect()->route('sliderprincipal.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Sliderprincipal  $sliderprincipal
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sliderprincipal $sliderprincipal)
    {
        //eliminar de la carpeta storage
        Storage::delete('public/'.$sliderprincipal->imagen);

        //eliminar de la base de datos
        $sliderprincipal->delete();

        return redirect()->route('sliderprincipal.index');
    }
}
