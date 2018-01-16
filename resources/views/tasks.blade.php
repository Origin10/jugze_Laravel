@extends('layout.app')

@section('title')
 基本2
@stop

@section('content')
    <style>
        form {
            display: inline-block; //Or display: inline; 
            }
    </style>

    <!-- Bootstrap 樣板... -->

    <div class="panel-body">
        <!-- 顯示驗證錯誤 -->
        @include('common.errors')

        <!-- 新任務的表單 -->
        <form action="{{url('/task')}}" method="POST" class="form-horizontal">
            {{ csrf_field() }}

            <!-- 任務名稱 -->
            <div class="container">
                <div class="form-group">
                    <input type="hidden" name="page_view" id="page_view" value="10">
                    <input type="hidden" name="cgy_id" id="cgy_id" value="11">
                    <input type="hidden" name="is_feature" id="is_feature" value="0">
                    <div class="col-sm-3">標題
                        <input type="text" name="title" id="title" class="form-control">
                    </div>
                    <div class="col-sm-3">副標題
                        <input type="text" name="sub_title" id="sub_title" class="form-control">
                    </div>
                    <div class="col-sm-6">內容
                        <input type="text" name="content" id="content" class="form-control">
                    </div>
                </div>
            </div>

            <!-- 增加任務按鈕-->
            <div class="form-group">
                <div class="col-sm-offset-1 col-sm-6">
                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-plus"></i> 增加任務
                    </button>
                </div>
            </div>
        </form>
    </div>

    <!-- 代辦：目前任務 -->
    @if (count($tasks) > 0)
        <div class="panel panel-default">
            <div class="panel-heading">
                目前任務
            </div>

            <div class="panel-body">
                <table class="table table-striped task-table">

                    <!-- 表頭 -->
                    <thead>
                        <th>標題</th>
                        <th>副標題</th>
                        <th>內容</th>
                        <th>瀏覽數</th>
                        <th>是否為精選</th>
                        <th>操作</th>
                    </thead>

                    <!-- 表身 -->
                    <tbody>
                        @foreach ($tasks as $task)
                            <tr>
                                <!-- 任務名稱 -->
                                <td class="table-text">
                                    <div>{{ $task->title }}</div>
                                </td>
                                <td class="table-text">
                                    <div>{{ $task->sub_title }}</div>
                                </td>
                                <td class="table-text">
                                    <div>{{ $task->content }}</div>
                                </td>
                                <td class="table-text">
                                    <div>{{ $task->page_view }}</div>
                                </td>
                                <td class="table-text">
                                    {{--<div>{{ $task->is_feature }}</div>--}}
                                    @if( $task->is_feature == true)
                                        <div>精選</div>
                                    @else
                                        <div>非精選</div>
                                    @endif
                                </td>

                                <td class="table-text" width="20%">
                                    {{ Form::open(['url' => 'task/' . $task->id ,'role'=>'form', 'method' => 'delete']) }}
                                    {{-- <input type ="button" onclick="javascript:location.href='{{url("tasks/del/".$task->id)}}'" value="刪除此任務"></input> --}}
                                        {{ Form::submit('刪除此任務',['class'=>'btn btn-danger']) }}
                                    {{ Form::close() }}
                                    {{ Form::open(['url' => 'task/' . $task->id ,'role'=>'form', 'method' => 'put']) }}
                                    {{-- <input type ="button" onclick="javascript:location.href='{{url("tasks/del/".$task->id)}}'" value="刪除此任務"></input> --}}
                                        {{ Form::submit('切換精選',['class'=>'btn btn-primary']) }}
                                    {{ Form::close() }}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endif
@stop