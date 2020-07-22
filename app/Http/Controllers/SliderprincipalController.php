<?php

namespace App\Http\Controllers;

use App\Sliderprincipal;
use Illuminate\Http\Request;

class SliderprincipalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('sliderprincipal.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Sliderprincipal  $sliderprincipal
     * @return \Illuminate\Http\Response
     */
    public function show(Sliderprincipal $sliderprincipal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Sliderprincipal  $sliderprincipal
     * @return \Illuminate\Http\Response
     */
    public function edit(Sliderprincipal $sliderprincipal)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Sliderprincipal  $sliderprincipal
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sliderprincipal $sliderprincipal)
    {
        //
    }
}
