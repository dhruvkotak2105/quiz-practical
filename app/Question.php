<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Answer;
use App\Quiz;

class Question extends Model
{
    protected $fillable = ['question_text', 'time_limit'];

    public function answers()
    {
        return $this->hasMany('App\Answer');
    }

    public function quizzes()
    {
        return $this->belongsToMany(Quiz::class);
    }
}
