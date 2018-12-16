<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Answer;
use App\Detail;

class Question extends Model
{
    //
    protected $fillable = ['body'];
    private $errors;

    public function user()
    {
        return $this -> belongsTo('App\User');
    }

    public function answer()
    {
        return $this ->hasMany('App\Answer');
    }

    public function detail()
    {
        return $this -> belongsTo('App\Detail');
    }
}
