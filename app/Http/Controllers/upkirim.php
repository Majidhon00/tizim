<?php

namespace App\Http\Controllers;

use App\Models\kirim;
use App\Models\rang;
use Illuminate\Http\Request;

class upkirim extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // 
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, rang $upkirim)
    {
        if($request->tip=='1')
        {
            $upkirim->miqdori = $upkirim->miqdori - $request->miqdor2;
            $upkirim->miqdori = $upkirim->miqdori + $request->miqdor;
            $upkirim->rulon = $upkirim->rulon - $request->r_soni2;
            $upkirim->rulon = $upkirim->rulon + $request->r_soni;

        }else{
            $upkirim->miqdori = $upkirim->miqdori + $request->miqdor2-$request->miqdor;
            $upkirim->rulon = $upkirim->rulon + $request->r_soni2-$request->r_soni;   
        }

        $upkirim->rang = $upkirim->rang;
        $upkirim->tur_id = $upkirim->tur_id;
        $upkirim->cat_id = $upkirim->cat_id;
        $upkirim->update();

        $baza = kirim::find($request->id); 
        $baza->rang_id = $baza->rang_id;
        $baza->tip = $baza->tip;
        $baza->cat_id =  $baza->cat_id;
        $baza->tur_id = $baza->tur_id;
        $baza->miqdor = $request->miqdor;
        $baza->r_soni = $request->r_soni;
        
      
        $baza->update();
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
