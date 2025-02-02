<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Question;

class Answer extends Model
{
    protected $fillable = ['answer_text', 'is_correct'];

    public function question()
    {
        return $this->belongsTo('App\Question');
    }
}
