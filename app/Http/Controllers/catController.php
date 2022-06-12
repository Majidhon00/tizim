<?php

namespace App\Http\Controllers;

use App\Models\cat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class catController extends Controller
{
    /**
     * Di splay a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $baza = cat::paginate(10);
        return view('kategorya',['bazas'=>$baza]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create.kategorya');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $baza = new cat;
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
    
    public function catedit(cat $catedit)
    {
        return view('update.kategoryaUp',['bazas'=>$catedit]);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, cat $cat)
    {
        $cat->update($request->all());
        return redirect()->route('cat.index');
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
    public function catdel(cat $id)
    {
        $id->delete();
        return back();
    }
    public function ajaxkat(Request $request)
    {
        if($request->catb=='all')
        {
            $cats = cat::orderBy('id','DESC')->get();
        }   
        if($request->cata=='all')
        {
            $cats = cat::orderBy('id','DESC')->get();
        } else
        {
            $cats = cat::where('cat','LIKE',"%{$request->cata}%")->get();    
        }
        return response()->json(['catz'=>$cats]);
    }
}
