<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    //
    protected $fillable = [ 'title', 'sub_title', 'content', 'page_view', 'is_feature'];

//    $task = Task::find(1);
    public function scopeIsFeature($query){
        return $query->where('is_feature',true);
    }

    //homework
    public function scopeTopPageView($query){
        return $query->orderBy('page_view','desc');
    }

//    public function getIsFeatureAttribute($value){
//
//        dd('geter');
//        return $value == 1 ? '精選':'非精選'; //沒有動作
//    }

    //homework
//    public function getPageViewAttribute($value){
//        return $value < 100 ? 100 : $value;
//    }

//    public function setIsFeatureAttribute($value){
//        $this->attributes['is_feature'] = $value == '精選' ? 1 : 0;
//    }

    //homework
//    public function setPageViewAttribute($value){
//        $this->attributes['page_view'] = $value == '一百' ? 100 : 0;
//    }
}
