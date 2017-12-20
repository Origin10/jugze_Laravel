<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IssueController extends Controller
{
    function index($id =1){
        $title = '請問你是否支持無條件基本收入';
        $start = '12/21';
        $end = '12/29';
        $votes = "888";
        return view('issue',compact('id','title','start','end',"votes"));
    }
    function search($search){
        return view('search',compact('search'));

    }
}
