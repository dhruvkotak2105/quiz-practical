<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Quiz;

class Result extends Model
{
    protected $fillable = ['user_id', 'quiz_id', 'score'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function quiz()
    {
        return $this->belongsTo('App\Quiz');
    }
}
