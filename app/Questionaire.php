<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use illuminate\Support\Str;

class Questionaire extends Model
{
    protected $guarded = [];
    public function path()
    {
        return url('/questionaire/' . $this->id);
    }
    public function publicPath()
    {
        return url('/surveys/' . $this->id . "-" . Str::slug($this->title));
    }
    public function user()
    {
        return $this->belongsTo(\App\User::class);
    }
    public function questions()
    {
        return $this->hasMany(\App\Question::class);
    }
    public function surveys()
    {
        return $this->hasMany(\App\Survey::class);
    }
}
