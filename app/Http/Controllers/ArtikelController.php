<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Artikel::orderBy("created_at","desc")->paginate(10);
        return view("admin.content.artikel", compact("data"));
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
     * @param  \App\Models\ArtikelController  $artikelController
     * @return \Illuminate\Http\Response
     */
    public function show(ArtikelController $artikelController)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ArtikelController  $artikelController
     * @return \Illuminate\Http\Response
     */
    public function edit(ArtikelController $artikelController)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ArtikelController  $artikelController
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ArtikelController $artikelController)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ArtikelController  $artikelController
     * @return \Illuminate\Http\Response
     */
    public function destroy(ArtikelController $artikelController)
    {
        //
    }
}
