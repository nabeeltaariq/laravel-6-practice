<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Questionaire extends Model
{
    protected $guarded = [];
    public function user()
    {
        return $this->belongsTo(\App\User::class);
    }
    public function questions()
    {
        return $this->hasMany(\App\Question::class);
    }
}
