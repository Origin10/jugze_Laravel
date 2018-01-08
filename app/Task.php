<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    //

//    $task = Task::find(1);
    public function scopeIsFeature($query){
        return $query->where('is_feature',true);
    }

    //homework
    public function scopeTopPageView($query){
        return $query->orderBy('page_view','desc');
    }

    public function getIsFeatureAttribute($value){
        return $value == true ? '精選':'非精選';
    }

    //homework
    public function getLowPageViewAttribute($value){
        return $value < 100 ? 100 : $value;
    }

    public function setIsFeatureAttribute($value){
        $this->attributes['is_feature'] = $value == '精選' ? 1 : 0;
    }

    //homework
    public  function setPageViewAttribute($value){
        $this->attributes['page_view'] = $value == '一百' ? 100 : 0;
    }
}
