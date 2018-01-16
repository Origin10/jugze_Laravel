@extends('layout.master')

{{--@section('title','Welcome')--}}

@section('content')
    @include('layout.sidebar',["user"=>"ABC"])
    <h1>這裡是{!!$result!!}</h1>

    <ul>
        @foreach($items as $item)
            <li>{{$item}} - {{ $loop->index}}</li>
        @endforeach
    </ul>

@endsection

@section('content2')
    @parent
    <h4>content2</h4>
@endsection