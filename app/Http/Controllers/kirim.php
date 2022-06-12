<?php

namespace App\Http\Controllers;

use App\Models\kirim as ModelsKirim;
use App\Models\rang;
use App\Models\cat;
use App\Models\tur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use function Ramsey\Uuid\v1;

class kirim extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = cat::orderBy('id', 'DESC')->get();
        $bazas = ModelsKirim::OrderByDesc('created_at')->get();
        return view('stat', ['bazas' => $bazas, 'items' => $items]);
    }

    /**
     * Show the form for creating a new resource    .
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    public function find($id)
    {
        $baza = rang::find($id);
        return view('kirim', ['kirim' => $baza]);
    }
    public function find2($id)
    {
        $baza = rang::find($id);
        return view('chqim', ['kirim' => $baza]);
    }
    /** 
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, rang $kirim)
    {
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(ModelsKirim $kirim)
    {
        $rang = rang::find($kirim->rang_id);
        return view('update.upkirim', ['kirim' => $kirim, 'rang' => $rang]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, rang $kirim)
    {
        if (0 > $request->miqdor) {
            return back()->with('success', 'Siz manfiy son kirityapsiz');
        } else {

            $kirim->miqdori = $kirim->miqdori + $request->miqdor;
            $kirim->rang = $kirim->rang;
            $kirim->rulon = $kirim->rulon + $request->r_soni;
            $kirim->tur_id = $kirim->tur_id;
            $kirim->cat_id = $kirim->cat_id;
            $kirim->update();

            $baza = new ModelsKirim();

            $baza->rang_id = $request->rang_id;
            if ($request->miqdor == null) {
                $baza->miqdor = 0;
            } else {
                $baza->miqdor = $request->miqdor;
            }
            if (!($request->date == '')) {
                $baza->created_at = $request->date;
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
    public function destroy(kirim $kirim)
    {
    }
    public function delkirim(Request $request, rang $delkirim)
    {
        if ($request->tip == '0') {
            $delkirim->miqdori = $delkirim->miqdori + $request->miqdor;
            $delkirim->rulon = $delkirim->rulon + $request->r_soni;
        } else {
            $delkirim->miqdori = $delkirim->miqdori - $request->miqdor;
            $delkirim->rulon = $delkirim->rulon - $request->r_soni;
        }
        $delkirim->rang = $delkirim->rang;
        $delkirim->tur_id = $delkirim->tur_id;
        $delkirim->cat_id = $delkirim->cat_id;
        $delkirim->update();

        $data = ModelsKirim::find($request->id);
        $data->delete();
        return back();
    }

    public function ajaxmonth(Request $request)
    {

        $baza2 = DB::table("rangs")->join('turs', 'rangs.tur_id', '=', 'turs.id')->join('cats', 'turs.cat_id', '=', 'cats.id')->select('rangs.id AS cidd','rangs.rang','rangs.miqdori','rangs.rulon','rangs.tur_id','rangs.cat_id','turs.id','turs.turi','turs.narxi','cats.id','cats.cat')->where('rangs.cat_id', '=', $request->sel)->where('rangs.tur_id', '=', $request->selar)->get();
        $baza3 = ModelsKirim::where('kirims.cat_id', '=', $request->sel)->where('kirims.tur_id', '=', $request->selar)->get();
        return response()->json(['month' => $baza2, 'month3' => $baza3]);
    }
    public function ajaxsel(Request $request)
    {
        $data = tur::where('cat_id','=',$request->test11);
         if ($request->test11 == 0) {
            $baza = ModelsKirim::join('rangs', 'kirims.rang_id', '=', 'rangs.id')->join('turs', 'rangs.tur_id', '=', 'turs.id')->join('cats','turs.cat_id', '=', 'cats.id')->limit(10)->get();
                
                
                
        } else {
            $baza = rang::join('turs', 'rangs.tur_id', '=', 'turs.id')
                ->join('cats', 'turs.cat_id', '=', 'cats.id')
                ->where('rangs.cat_id', '=', $request->test11)
                ->get();
        }
        return response()->json(['test' => $baza, 'data' => $data]);
    }
    public function ajaxbase2(Request $request)
    {
        $baza2 = rang::join('turs', 'rangs.tur_id', '=', 'turs.id')
            ->join('cats', 'turs.cat_id', '=', 'cats.id')
            ->where('rangs.tur_id', '=', $request->test)
            ->get();
        return response()->json(['test2' => $baza2]);
    }
    public function view(ModelsKirim $id)
    {
    }
}
