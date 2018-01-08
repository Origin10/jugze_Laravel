<?php

use App\Task;
use App\Cgy;
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
    return view('welcome');
});

Route::resource('tasks','TaskController');

Route::get('issue/{id}','IssueController@index')
->name('issue.index');


Route::get('search/{search?}','IssueController@search');


//CRUD

Route::get('showCgy',function(){
   $cgy = Cgy::find(1);
   dd($cgy->opened_at->diffForHumans());
});

//Route::resource('cgy',"CgyController");


//Error

Route::get('saveCgy',function (\Illuminate\Http\Request $request){
    $cgy = Cgy::create($request->all());
    dd($cgy);
});



Route::get('queryTask', function (){
//    $task= \App\Task::find(5000);
//    dd($task->title);
    $task = Task::where('page_view','<',100)->first();
    dd($task);
});

Route::get('queryTasks', function (){
//    $tasks = \App\Task::orderBy('id',"desc")->get();
//    $tasks = \App\Task::where('page_view','<',100)->orderBy('id',"desc")->get();
//    $tasks =\App\Task::distinct()->get();

    $tasks = \App\Task::getQuery()->select('is_feature',DB::raw('sum(page_view) as sum'))
        ->groupBy('is_feature')->havingRaw('sum(page_view)>2000')->get();
    dd($tasks);
    Task::whereIn('mode',['a','b']); //必須符合陣列裡的值


});

Route::get('updateTask/{id}', function ($id){
    $task = Task::find($id);
    $task->title = 'change';
    $task->save();

    dd($task);
});


Route::get('updateTask2/{task}', function (\App\Task $task){
    $task->title = 'change';
    $task->save();

    dd($task);
});

Route::get('deleteTask/{id}', function ($id){
    $task = Task::find($id);
    $task->delete();

    dd($task);
});


Route::get('addTask', function (){
    $task= new \App\Task();
    $task->title = '動物';
    $task->sub_title = '生物';
    $task->content ='熊貓';
    $task->page_view = 6;
    $task->is_feature = false;
    $task->save();
});


//不懂為什麼要用  $task = Task::find($id);
Route::get('taskUpdate/{id}', function(\Illuminate\Http\Request $request, $id){
    $task = Task::find($id);
//        $task->update($request->only());
    $result = $request->only('title','sub_title');
//    dd($result);
    $result = $request->all();
    dd($result);
});

//homework

Route::get('cgyUpdate/{id}', function (\Illuminate\Http\Request $request, $id){
    $cgy = Cgy::find($id);
    $rs = $request->only('title','enable');
    dd($rs);
});

Route::get('isFeature', function (){
    $tasks = Task::isFeature()->get();
    $tasks[0]->is_feature = '非精選';
    $tasks[0]->save();
    dd($tasks[0]);

});

//homework
Route::get('topView',function (){
    $task=Task::topPageView()->get();
    $task[0]->page_view = '一百';
    $task[0]->save();
    dd($task[0]);

});