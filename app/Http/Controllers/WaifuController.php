<?php

namespace App\Http\Controllers;

use App\Models\Waifu;
use Illuminate\Http\Request;

class WaifuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.waifu_page.show_all',[
            'title' => 'a',
            'waifus' => Waifu::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store($waifu)
    {
        return view('pages.waifu_page.show_detail',[
            'title' => 'a',
            'waifu' => Waifu::find($waifu)
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Waifu $waifu)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Waifu $waifu)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Waifu $waifu)
    {
        //
    }
}
