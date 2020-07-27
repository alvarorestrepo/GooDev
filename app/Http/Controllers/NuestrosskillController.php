<?php

namespace App\Http\Controllers;

use App\Nuestrosskill;
use App\Categoriaskill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class NuestrosskillController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nuestrosskill = Nuestrosskill::all();
        return view ('nuestrosskill.index', compact('nuestrosskill'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categoriaskill = Categoriaskill::all();
        return view ('nuestrosskill.create', compact('categoriaskill'));
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
            'nombre'=>'required|min:4',
            'descripcion'=>'required|min:6',
            'categoriaskills_id'=>'required',
            'imagen'=>'required|image',
        ]);

        // obtener la ruta de la imagen y guardarla en una variable
        $ruta_imagen = $request['imagen']->store('upload-nuestrosskills','public');


        // insertar en la base de datos
            Nuestrosskill::create([
            'nombre'=> $data['nombre'],
            'descripcion'=> $data['descripcion'],
            'categoriaskills_id'=> $data['categoriaskills_id'],
            'imagen'=>$ruta_imagen,
        ]);

        return redirect()->route('nuestrosskill.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Nuestrosskill  $nuestrosskill
     * @return \Illuminate\Http\Response
     */
    public function show(Nuestrosskill $nuestrosskill)
    {
        return view ('nuestrosskill.show',compact('nuestrosskill'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Nuestrosskill  $nuestrosskill
     * @return \Illuminate\Http\Response
     */
    public function edit(Nuestrosskill $nuestrosskill)
    {
        $categoriaskill = Categoriaskill::all();
        return view('nuestrosskill.edit',compact('nuestrosskill','categoriaskill'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Nuestrosskill  $nuestrosskill
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Nuestrosskill $nuestrosskill)
    {
         // obtener validacion
         $data = request()->validate([
            'nombre'=>'required|min:4',
            'descripcion'=>'required|min:6',
        ]);

        $nuestrosskill->nombre = $data['nombre'];
        $nuestrosskill->descripcion = $data['descripcion'];

        if (request('imagen')) {
            // obtener la ruta de la imagen y guardarla en una variable
            $ruta_imagen = $request['imagen']->store('upload-nuestrosskills','public');

            //eliminar de la carpeta storage
            Storage::delete('public/'.$nuestrosskill->imagen);

            $nuestrosskill->imagen = $ruta_imagen;
        }

        $nuestrosskill->save();
        return redirect()->route('nuestrosskill.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Nuestrosskill  $nuestrosskill
     * @return \Illuminate\Http\Response
     */
    public function destroy(Nuestrosskill $nuestrosskill)
    {
         //eliminar de la carpeta storage
         Storage::delete('public/'.$nuestrosskill->imagen);

         //eliminar de la base de datos
         $nuestrosskill->delete();

        return redirect()->route('nuestrosskill.index');
    }
}
