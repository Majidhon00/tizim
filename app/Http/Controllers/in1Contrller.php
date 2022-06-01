<?php

namespace App\Http\Controllers;

use App\Models\cat;
use App\Models\kirim;
use App\Models\rang;
use App\Models\tur;
use Illuminate\Http\Request;

class in1Contrller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $kirimlar = kirim::all();
        $bazas = tur::all();

        return view('dashboard',['bazas'=>$bazas,'kirims'=>$kirimlar]);
    }

    /**     
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $blogs = cat::all(); 
        return view('create.in1_create',['blogs'=>$blogs]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $baza = new tur;
        $baza->create($request->all());
        return back()->with('success','Yozildi');
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
    public function edit(tur $admin)
    {
        $blog = cat::all();
        return view('update.tur',['bazas'=>$admin ,'blogs'=>$blog]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, tur $admin)
    {
        $admin->update($request->all());
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
    public function up($id)
    {
        $baza = tur::find($id);
        $baza->delete();
        return back();
    }
    public function ajaxtur(Request $request)
    {
        $baza = tur::join('cats','cats.id','=','turs.cat_id')->where('turi','LIKE',"%{$request->tur}%")->get();
        return response()->json(['turlar'=>$baza]);
    }
    public function adminedit(tur $id)
    {
        $blog = cat::all();
        return view('update.tur',['bazas'=>$id ,'blogs'=>$blog]);
    }
}
