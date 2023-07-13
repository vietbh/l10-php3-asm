<?php

use Illuminate\Http\Response;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TinController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/tin',[TinController::class,'index'])->name('tin.index');
Route::get('/tin/category/{idTL}',[TinController::class,'tinTrongLoai'])->name('tin.category');
Route::get('/tin/singleTin/{id}',[TinController::class,'show'])->name('tin.single');
Route::get('/tin/create',[TinController::class,'create'])->name('tin.create');
Route::get('/tin/{id}/edit',[TinController::class,'edit'])->name('tin.edit');
Route::get('/tin/{id}/delete',[TinController::class,'destroy'])->name('tin.destroy');



// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/tin',function() 
// {
//     $tins = DB::table('tins')
//     ->select('id','title','content','created_at')->limit(5)->get();
//     return view('Tin.index',['tins' => $tins]);
// })->name('tin.index');

// Route::get('/tin/{id}',function($id){
//     $tin = DB::table('tins')
//     ->where('id',$id)
//     ->first();
//     if(!$tin){
//         abort(Response::HTTP_NOT_FOUND);
//     }
//     return view('Tin.singleTin',['tin' => $tin]);
// })->name('tin.single');