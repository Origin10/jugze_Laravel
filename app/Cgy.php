<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cgy extends Model
{
    protected $table = 'cgys';
    protected $dates = ['opened_at'];
//    protected $incrementing = false; 如何變更主鍵
    protected $fillable=[
        'title',
        'desc',
        'enabled',
        'opened_at'
    ];

}
