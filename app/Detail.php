<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Question;
use App\Answer;

class Detail extends Model
{
    //
    public function question()
    {
        return $this -> belongsTo('App\Question');
    }
    public function answer()
    {
        return $this ->hasMany('App\Answer');
    }
}
