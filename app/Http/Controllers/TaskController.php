<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Requests\CreateTaskRequest;
use App\Task;
use Validator;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //dd('index');
        //取得表格的前20筆資料，取出超過20筆
        $tasks = Task::orderBy('created_at','desc')->get();
        //$tasks = Task::get();    
        return view('tasks',['tasks'=>$tasks]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(CreateTaskRequest $request)
    {
        $inputs = $request->all();
        $task = Task::create($inputs);
        return redirect('/task');

//        Class App\Requests\CreateTaskRequest does not exist
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $inputs = $request->all();
        //進行驗證作法A
        // $validator = Validator::make($inputs,['name' => 'required|max:225',]);

        // if ($validator->fails()) {
        //     return redirect('/')->withInput()->withErrors($validator);
        // }

        //建立該任務...
        //方法A
        //$task = Task::create($inputs);
        //方法B
        $task = Task::create($inputs);

        return redirect('/task');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
    public function update(Task $task)
    {
//        dd($task);
        $task->is_feature = !$task->is_feature;
        $task->page_view += 1;
        $task->save();
//        dd($task);
        /* 略 */
        return redirect('/task');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Task $task)
    {
        $task->delete();
        return redirect('/task');
    }


    //創造Task資料
    public function createTask()
    {

        //使用Eloquent來建立資料方法1
        $task = new Task;
        $task->title = '標題';
        $task->sub_title = '副標題';
        $task->content = '內容';
        $task->page_view = 0;
        $task->is_feature = 0;
        $task->save();

        //使用Eloquent來建立資料方法2
        $task = new Task([
            'title' => '標題',
            'sub_title' => '副標題',
            'content' => '內容',
            'page_view' => 0,
            'is_feature' => 0
        ]);
        $task->save();

        return redirect('/');
    }

    public function addTask(Request $request){
        // dd($request->all());
        Task::create($request->all());
    }
}
