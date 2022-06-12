<?php

namespace App\Http\Controllers;

use App\Models\cat;
use App\Models\rang;
use Faker\Core\Color;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ColorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        $baza = rang::join('turs','turs.id','=','rangs.tur_id')->join('cats','cats.id','=','rangs.cat_id')->paginate(10);
        return view('color',['bazas'=>$baza]);
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
    public function show(rang $id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(rang $id)
    {
        $cat = cat::orderBy('id','DESC')->get();
        return view('update.color',['color'=>$id,'cats'=>$cat]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // 90 556 61 13
    }
    public function ajaxcolor(Request $request)
    {
//        $baza = DB::select("select * from rangs left join turs on turs.id=rangs.tur_id left join cats on cats.id=turs.cat_id where rangs.rang like '%{$request->color}%'");
        $baza = rang::join('turs','turs.id','=','rangs.tur_id')->join('cats','cats.id','=','rangs.cat_id')->where('rangs.rang','like', "%{$request->color}%")->get();
        return response()->json(['colors'=>$baza]);
    }
}
