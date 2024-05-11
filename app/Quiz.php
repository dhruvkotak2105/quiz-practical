<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Question;
use App\Result;

class Quiz extends Model
{
    protected $fillable = ['name'];

    public function questions()
    {
        return $this->belongsToMany('App\Question');
    }

    public function results()
    {
        return $this->hasMany('App\Result');
    }
}
