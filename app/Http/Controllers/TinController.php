<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class TinController extends Controller
{

    public function index()
    {
        //
        $tins_left = DB::table('tins')
        ->select()->paginate(3);
        $tins_right = DB::table('tins')
        ->select()->where('first_rate','1')->orderBy('views','desc')->paginate(5);
        $tinTL = DB::table('categories')
        ->select('id','category_nm')
        ->where('lang','vi')
        ->get();
        $tinTL_en = DB::table('categories')
        ->select('id','category_nm')
        ->where('lang','en')
        ->paginate(4);
        $data= ['tinTL'=>$tinTL , 'tinTL_en'=>$tinTL_en,'tins' => $tins_left , 'tins_right' => $tins_right];
        if(!$tinTL){
            abort(Response::HTTP_NO_CONTENT);

        }
        return view('Tin.index', $data);
    }

    
    public function create()
    {
        //
        DB::table('categories')
        ->insert([
            ['category_nm'=>'Dien thoai'],
            ['category_nm'=>'Dien thoai 1'],
            ['category_nm'=>'Dien thoai 2'],
        ]);
        $showCate=DB::table('categories')->get();
        dd($showCate);
    }
 
    public function store(Request $request)
    {
        //
        
    }
    public function tinTrongLoai(string $idTL){
        $tins = DB::table('tins')
        ->select('id','id_TL','title','content','created_at')
        ->where('id_TL',$idTL)
        ->get();
        $tinTL = DB::table('categories')
        ->select('id','category_nm')
        ->where('lang','vi')
        ->get();
        $tinCatTitle = DB::table('categories')
        ->select('category_nm')
        ->where('id',$idTL)
        ->first();
        
        $data = ['tinTL'=>$tinTL,'tinCatTitle'=>$tinCatTitle];
        if(!$tinTL){
            abort(Response::HTTP_NO_CONTENT);

        }
        if(!$tins){
            abort(Response::HTTP_NO_CONTENT);

        }
    return view('Tin.category',['tins' => $tins],$data);
    }
    
    public function show(string $id)
    {
        //
        $tin = DB::table('tins')
            ->where('id',$id)
            ->first();
            if(!$tin){
                abort(Response::HTTP_NOT_FOUND);
            }
        $tinTL = DB::table('categories')
            ->select('id','category_nm')
            ->where('lang','vi')
            ->get();
        return view('Tin.singleTin',['tin' => $tin],['tinTL'=>$tinTL]);
    }

    
    public function edit(string $id)
    {
        //
        DB::table('categories')->where('id',$id)
        ->update([
            'category_nm'=>'Tu lanh'
        ]);
        $showEdit = DB::table('categories')->get();
        dd($showEdit);
    }

    
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        DB::table('categories')->where('id',$id)
        ->delete();
        $showDelete = DB::table('categories')->get();
        dd($showDelete);
    }
}
