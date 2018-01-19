<?php

use Illuminate\Http\Request;
use \App\Todo;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/todo/{id}',function ($id){
//    return response()->json([
//        ['id'=>1,'title'=>'Learn Vue js','completed'=>false],
//        ['id'=>2,'title'=>'Go to Shop','completed'=>false]
//    ]);
    $todo= Todo::find($id);
    return $todo;

})->middleware('cors:api');

Route::get('/todos',function (){
    $todos = Todo::all();
    return $todos;
})->middleware('api','cors');

Route::post('/todo/create',function (Request $request){
   $data = ['title'=>$request->get('title'),'completed'=>0];
   $todo = Todo::create($data);

   return $todo;
})->middleware('api','cors');

Route::patch('/todo/{id}/completed',function($id){
    $todo = Todo::find($id);
    $todo->completed = ! $todo->completed;
    $todo->save();

    return $todo;
})->middleware('api','cors');


Route::delete('/todo/{id}/delete',function($id){
    $todo = Todo::find($id);
    $todo->delete();

    return response()->json(['deleted']);
})->middleware('api','cors');


