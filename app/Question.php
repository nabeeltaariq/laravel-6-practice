<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $guarded = [];

    public function questionaire()
    {
        return  $this->belongsTo(\App\Questionaire::class);
    }
    public function answers()
    {
        return $this->hasMany(\App\Answer::class);
    }
}
