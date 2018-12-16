<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Question;

class Answer extends Model
{
    protected $fillable = ['body'];
    //
    public function user()
    {
        return $this -> belongsTo('App\User');
    }

    public function question()
    {
        return $this -> belongsTo('App\Question');
    }
}
