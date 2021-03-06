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
        $items = DB::table('cats')->select('cats.id','cats.cat')->get();
        $bazas = rang::OrderBy('id','DESC')->paginate(10);
        return view('rang', ['bazas' => $bazas, 'items' => $items]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('create.rang', ['cats' => $cats]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $baza = new rang;
        $validate = $request->validate([
            'cat_id'=>'required',
            'tur_id'=>'required',
            'rang'=>'required'
        ]);
        $baza->cat_id = $validate['cat_id'];
        $baza->tur_id = $validate['tur_id'];
        $baza->rang = $validate['rang'];
        $baza->rulon = $request->rulon;
        $baza->miqdori = $request->miqdori;
        $baza->save();
        return back()->with('success','yozildi');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(rang $rang)
    {
        $blog = rang::where('id', $rang->id)->get();
        $baza = kirim::where('rang_id', $rang->id)->get();
        return view('show.rang', ['bazas' => $baza, 'blog' => $blog]);
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
        // $data = DB::select("SELECT * from  turs  where cat_id=" . $request->test11);
        $data = tur::where('cat_id','=',$request->test11)->get();

        if ($request->test11 == 0) {
            // $baza = DB::select("select * from rangs left join turs on rangs.tur_id=turs.id left join cats on turs.cat_id=cats.id");
        
            $baza = rang::join('turs', 'rangs.tur_id', '=', 'turs.id')->join('cats', 'turs.cat_id', '=', 'cats.id')->get();
        } else {
            // $baza = DB::select("select * from rangs left join turs on rangs.tur_id=turs.id left join cats on turs.cat_id=cats.id where rangs.cat_id=".$request->test11);
        
            $baza = rang::join('turs', 'rangs.tur_id', '=', 'turs.id')->join('cats', 'turs.cat_id', '=', 'cats.id')->where('rangs.cat_id', '=', $request->test11)->get();
        }
        return response()->json(['test' => $baza, 'data' => $data]);
    }
    public function ajaxbase(Request $request)
    {
        //  $baza2 = DB::select("select * from rangs left join turs on rangs.tur_id=turs.id left join cats on turs.cat_id=cats.id where rangs.tur_id=".$request->test);
        $baza2 = rang::join('turs', 'rangs.tur_id', '=', 'turs.id')->join('cats', 'turs.cat_id', '=', 'cats.id')->where('rangs.tur_id', '=', $request->test)->get();

        return response()->json(['test2' => $baza2]);
    }

    public function ajaxdate(Request $request)
    {
        if ($request->tests1 == '0') {

            // DB mysql surov
            // $baz = DB::select("SELECT * from rangs left join turs on rangs.tur_id=turs.id left join cats on turs.cat_id=cats.id ORDER BY rangs.miqdori $request->desc");

            // laravel surov
            $baz = rang::join('turs', 'rangs.tur_id', '=', 'turs.id')->join('cats', 'turs.cat_id', '=', 'cats.id')->orderBy('rangs.miqdori', $request->desc)->get();
        } else {
            // $baz = DB::select("SELECT * from rangs left join turs on rangs.tur_id=turs.id left join cats on turs.cat_id=cats.id  where rangs.cat_id=".$request->tests1 . " ORDER BY rangs.miqdori $request->desc");
            $baz = rang::join('turs', 'rangs.tur_id', '=', 'turs.id')->join('cats', 'turs.cat_id', '=', 'cats.id')->where('rangs.cat_id', '=', $request->tests)->orderBy('rangs.miqdori', $request->desc)->get();

            if (!($request->tests2 == '0')) {

                // DB mysql surov 
                // $baz = DB::select("SELECT * from rangs left join turs on rangs.tur_id=turs.id left join cats on turs.cat_id=cats.id  where rangs.tur_id=".$request->tests2 . " ORDER BY rangs.miqdori $request->desc");

                // laravel surov
                $baz = rang::join('turs', 'rangs.tur_id', '=', 'turs.id')->join('cats', 'turs.cat_id', '=', 'cats.id')->where('rangs.tur_id', '=', $request->tests2)->orderBy('rangs.miqdori', $request->desc)->get();
            }
        }
        return response()->json(['tests' => $baz]);
    }


    public function rangdel(rang $id)
    {
        $id->delete();
        return back();
    }
}
