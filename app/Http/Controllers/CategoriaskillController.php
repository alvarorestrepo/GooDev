<?php

namespace App\Http\Controllers;

use App\Categoriaskill;
use Illuminate\Http\Request;

class CategoriaskillController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categoriaskill = Categoriaskill::all();

        return view('categoriaskill.index',compact('categoriaskill'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('categoriaskill.create');
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
            'nombre'=>'required',
        ]);

        Categoriaskill::create([
            'nombre'=>$data['nombre'],
        ]);

        return redirect()->route('categoriaskill.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Categoriaskill  $categoriaskill
     * @return \Illuminate\Http\Response
     */
    public function show(Categoriaskill $categoriaskill)
    {
        return view('categoriaskill.show',compact('categoriaskill'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Categoriaskill  $categoriaskill
     * @return \Illuminate\Http\Response
     */
    public function edit(Categoriaskill $categoriaskill)
    {
        return view('categoriaskill.edit',compact('categoriaskill'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Categoriaskill  $categoriaskill
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Categoriaskill $categoriaskill)
    {
        // validando la actualizacion
        $data = request()->validate([
            'nombre'=>'required',
        ]);

        // guardando la validacion en el campo que quiero actualizar
        $categoriaskill->nombre = $data['nombre'];

        // guardando la actualizacion
        $categoriaskill->save();

        return redirect()->route('categoriaskill.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Categoriaskill  $categoriaskill
     * @return \Illuminate\Http\Response
     */
    public function destroy(Categoriaskill $categoriaskill)
    {
        $categoriaskill->delete();

        return redirect()->route('categoriaskill.index');
    }
}
