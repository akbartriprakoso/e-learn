<?php

use App\Models\Problem;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    
    return view('beranda',[
        "judul"=>"Beranda",
        // "posts"=>$problems
        "posts"=>Problem::show()
    ]
    );
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/problems',function(){
    return view('problems');
});

Route::get('/beranda', function(){
    return view('beranda');
});

//halaman single post
Route::get('/problems/{slug}',function($slug){
    
   
    // $new_problem = [];
    // foreach($problems as $problem)
    // {
    //     if($problem['slug']===$slug){
    //         $new_problem=$problem;
    //     }
    // }

    return view('problem',[
        'judul'=>'Detil Problem',
        'post'=>Problem::find($slug)
    ]);
});

Route::get('/test',function(){
    return view('test');
});

Route::get('/problem/tambah',function(){
    return view('problem.tambah',[
        'judul'=>'Tambah Problem'
    ]);
});

Route::get('/problem/ubah',function(){
    return view('problem.ubah',[
        'judul'=>'Ubah Problem'
    ]);
});

Route::get('/problem/hapus',function(){
    return view('problem.hapus',[
        'judul'=>'Hapus Problem'
    ]);
});