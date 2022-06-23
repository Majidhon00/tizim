<?php

namespace App\Http\Controllers;

use App\Models\cat;
use App\Models\kirim;
use App\Models\rang;
use App\Models\tur;
use App\Services\in1Services;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class in1Contrller extends Controller
{

    private function services()
    {
        $service = new in1Services();
    }

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
        $this->services();
        $item = $sevice->in1Create();
        return view('create.in1_create',['blogs'=>$item->blogs]);
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
        $baza->cat_id = $baz['cat_id'];
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
        $this->services();
        $item = $service->in1Create();
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
        $baza = DB::table('turs')->join('cats','cats.id','=','turs.cat_id')->select("turs.id AS t_id",'turs.*',"cats.*")->where('turi','LIKE',"%{$request->tur}%")->limit(10)->get();

        return response()->json(['turlar'=>$baza]);
    }
    public function adminedit(tur $id)
    {
        $this->services();
        $item = $service->in1Create();
        return view('update.tur',['bazas'=>$id ,'blogs'=>$blog]);
    }
}
