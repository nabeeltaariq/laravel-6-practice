<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Survey extends Model
{
    protected $guarded = [];
    public function questionaire()
    {
        return $this->belongsTo(\App\Questionaire::class);
    }
    public function responses()
    {
        return  $this->hasMany(\App\SurveyResponse::class);
    }
}
