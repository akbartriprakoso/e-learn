<?php

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
    $problems=[
        [
        'title'=>'Judul Problem Pertama',
        'slug'=>'judul-problem-pertama',
        'video'=>'<iframe width="560" height="315" src="https://www.youtube.com/embed/3NL8u8Ff4a4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
        'penulis'=>'Akbar Tri Prakoso',
        'deskripsi'=>'<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Debitis, facilis nulla voluptate mollitia iure doloribus assumenda incidunt. Nobis eos, ea quibusdam doloribus quidem, distinctio facilis at cum commodi, itaque debitis?</p>'
        ],
        [
        'title'=>'Judul Problem Kedua',
        'slug'=>'judul-preoblem-kedua',
        'video'=>'<iframe width="560" height="315" src="https://www.youtube.com/embed/-mPmL5ajd68" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
        'penulis'=>'Huda Dziky Prasetyo',
        'deskripsi'=>'<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Debitis, facilis nulla voluptate mollitia iure doloribus assumenda incidunt. Nobis eos, ea quibusdam doloribus quidem, distinctio facilis at cum commodi, itaque debitis?</p>'
        ],
    ];
    return view('beranda',[
        "judul"=>"Beranda",
        "posts"=>$problems
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
    return view('problem',[
        'judul'=>'Detil Problem'
    ]);
});

Route::get('/test',function(){
    return view('test');
});