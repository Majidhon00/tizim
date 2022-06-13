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
 
        // $kirimlar = kirim::where('kirims.tur_id','=','turs.id')->get();
        $bazas = tur::paginate(10);

        return view('dashboard',['bazas'=>$bazas]);
    }

    /**     
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $blogs = cat::orderBy('id','DESC')->get(); 
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
        $baz = $request->validate([
            'narxi'=>'required',
            'turi'=>'required',
            'cat_id'=>'required'
        ]);
        $baza->turi = $baz['turi'];
        $baza->narxi = $baz['narxi'];
        $baza->c_id = $baz['c_id'];
        $baza->save();
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
        $blog = cat::orderBy('id','DESC')->get();
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
        $baza = tur::join('cats','cats.id','=','turs.cat_id')->where('turi','LIKE',"%{$request->tur}%")->limit(10)->get();
        return response()->json(['turlar'=>$baza]);
    }
    public function adminedit(tur $id)
    {
        $blog = cat::orderBy('id','DESC')->get();
        return view('update.tur',['bazas'=>$id ,'blogs'=>$blog]);
    }
}
