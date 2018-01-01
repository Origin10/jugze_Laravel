<?php

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
    return view('index');
});

Route::get('issue/{id}','IssueController@index')
->name('issue.index');


Route::get('search/{search?}','IssueController@search');

Route::get('showCgy',function(){
   $cgy = App\Cgy::find(1);
   dd($cgy->opened_at->diffForHumans());
});

//Route::resource('cgy',"CgyController");

Route::get('saveCgy',function (\Illuminate\Http\Request $request){
    $cgy = \App\Cgy::create($request->all());
    dd($cgy);
});