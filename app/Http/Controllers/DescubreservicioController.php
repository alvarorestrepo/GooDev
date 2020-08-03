<?php

namespace App\Http\Controllers;

use App\Descubreservicio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DescubreservicioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $descubreservicio = Descubreservicio::all();
        return view('descubreservicio.index', compact('descubreservicio'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('descubreservicio.create');
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
        $ruta_imagen = $request['imagen']->store('upload-descubreservicio','public');


        // insertar en la base de datos
            Descubreservicio::create([
            'titulo'=> $data['titulo'],
            'imagen'=>$ruta_imagen,
        ]);

        return redirect()->route('descubreservicio.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Descubreservicio  $descubreservicio
     * @return \Illuminate\Http\Response
     */
    public function show(Descubreservicio $descubreservicio)
    {
        return view('descubreservicio.show',compact('descubreservicio'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Descubreservicio  $descubreservicio
     * @return \Illuminate\Http\Response
     */
    public function edit(Descubreservicio $descubreservicio)
    {
        return view('descubreservicio.edit', compact('descubreservicio'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Descubreservicio  $descubreservicio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Descubreservicio $descubreservicio)
    {
        // obtener validacion
        $data = request()->validate([
            'titulo'=>'required|min:6',
        ]);

        $descubreservicio->titulo = $data['titulo'];

        if (request('imagen')) {
            // obtener la ruta de la imagen y guardarla en una variable
            $ruta_imagen = $request['imagen']->store('upload-descubreservicio','public');

            //eliminar de la carpeta storage
            Storage::delete('public/'.$descubreservicio->imagen);

            $descubreservicio->imagen = $ruta_imagen;
        }

        $descubreservicio->save();
        return redirect()->route('descubreservicio.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Descubreservicio  $descubreservicio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Descubreservicio $descubreservicio)
    {
        Storage::delete('public/'.$descubreservicio->imagen);

        //eliminar de la base de datos
        $descubreservicio->delete();

        return redirect()->route('descubreservicio.index');
    }
}
