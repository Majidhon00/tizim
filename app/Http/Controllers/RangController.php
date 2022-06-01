<?php

namespace App\Http\Controllers;

use App\Models\cat;
use App\Models\kirim;
use App\Models\rang;
use App\Models\tur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\Console\Input\Input;

class RangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = cat::all();
        $bazas = rang::OrderByDesc('created_at')->get(); 
        return view ('rang',['bazas'=>$bazas , 'items'=>$items]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $turs = tur::all();
        $cats = cat::all();
        return view('create.rang',['turs'=>$turs,'cats'=>$cats]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $kirimbase = new kirim;
        // $kirimbase->miqdor=$request->miqdori;
        // $kirimbase->r_soni=$request->rulon;
        // $kirimbase->cat_id=$request->cat_id;
        // $kirimbase->tur_id=$request->tur_id;
        // $kirimbase->rang_id=$request->id;
        // $kirimbase->tip=1;
        // $kirimbase->create();
        
        $baza = new rang;
        $baza->create($request->all());
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(rang $rang)
    {
        $blog = rang::where('id',$rang->id)->get();
        $baza = kirim::where('rang_id',$rang->id)->get();
        return view('show.rang',['bazas'=>$baza,'blog'=>$blog]);
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
        //
    }
    public function ajaxdata(Request $request)
    {
        $data = DB::select("SELECT * from  turs  where cat_id=".$request->test11 );
        if($request->test11==0)
        {
            $baza = DB::select("select * from rangs left join turs on rangs.tur_id=turs.id left join cats on turs.cat_id=cats.id");
        }
        
        else{
            $baza = DB::select("select * from rangs left join turs on rangs.tur_id=turs.id left join cats on turs.cat_id=cats.id where rangs.cat_id=".$request->test11);
            
        }
        return response()->json(['test'=>$baza , 'data'=>$data] );

    }
    public function ajaxbase(Request $request)
    {
         $baza2 = DB::select("select * from rangs left join turs on rangs.tur_id=turs.id left join cats on turs.cat_id=cats.id where rangs.tur_id=".$request->test);
        return response()->json(['test2'=>$baza2 ] );
    }

    public function ajaxdate(Request $request)
    {
        if($request->tests1=='0')
        {
            $baz = DB::select("SELECT * from rangs left join turs on rangs.tur_id=turs.id left join cats on turs.cat_id=cats.id ORDER BY rangs.miqdori $request->desc");
        }
        else{
            $baz = DB::select("SELECT * from rangs left join turs on rangs.tur_id=turs.id left join cats on turs.cat_id=cats.id  where rangs.cat_id=".$request->tests1 . " ORDER BY rangs.miqdori $request->desc");
            if(!($request->tests2=='0')){
                $baz = DB::select("SELECT * from rangs left join turs on rangs.tur_id=turs.id left join cats on turs.cat_id=cats.id  where rangs.tur_id=".$request->tests2 . " ORDER BY rangs.miqdori $request->desc");
            }
        }
        
        return response()->json(['tests'=>$baz ] );

    }
   

    public function rangdel(rang $id)
    {
        $id->delete();
        return back();
    }
}
