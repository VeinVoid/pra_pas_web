<?php

namespace App\Http\Controllers;

use App\Models\Husbando;
use Illuminate\Http\Request;

class HusbandoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.husbando_page.show_all',[
            'title' => 'a',
            'husbandos' => Husbando::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store($husbando)
    {
        
    }

    /**
     * Display the specified resource.
     */
    public function show($husbando)
    {
        return view('pages.husbando_page.show_detail',[
            'title' => 'a',
            'husbando' => Husbando::find($husbando)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Husbando $husbando)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Husbando $husbando)
    {
        //
    }
}
