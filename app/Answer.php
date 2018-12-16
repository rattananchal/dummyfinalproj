<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Question;
use App\Detail;

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

    public function detail()
    {
        return $this -> belongsTo('App\Detail');
    }
}
