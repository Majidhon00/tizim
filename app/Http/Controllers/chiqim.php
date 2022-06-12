<?php

namespace App\Http\Controllers;

use App\Models\kirim as kirims;
use App\Models\rang;
use Illuminate\Http\Request;

class chiqim extends Controller
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
    public function update(Request $request, rang $chiqim)
    {
        if( 0 > $request->miqdor)
        {
            return back()->with('success' , 'Siz manfiy son kirityapsiz');
        }
        else{

            if($request->miqdor==NULL)
            {
            $chiqim->miqdori = $chiqim->miqdori-0;
        }
        else{
            $chiqim->miqdori = $chiqim->miqdori-$request->miqdor;
        }
        $chiqim->rang = $chiqim->rang;
        $chiqim->rulon = $chiqim->rulon-$request->r_soni;
        $chiqim->tur_id = $chiqim->tur_id;
        $chiqim->cat_id = $chiqim->cat_id;
        $chiqim->update();

        $baza = new kirims();
        $baza->rang_id = $request->rang_id;
        if($request->miqdor==NULL)
        {
            $baza->miqdor = 0;
        }
        else{
            $baza->miqdor = $request->miqdor;
        }
        $baza->tip = $request->tip;
        $baza->cat_id = $request->cat_id;
        $baza->tur_id = $request->tur_id;
        $baza->cat_id = $request->cat_id;
        $baza->r_soni = $request->r_soni;
        $baza->save();
        
        return redirect()->route('rang.index');
    }
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
