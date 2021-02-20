<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function create(\App\Questionaire $questionaireId)
    {
        return view('question.create', compact('questionaireId'));
    }
    public function store(\App\Questionaire $questionaire)
    {
        dd($questionaire);
    }
}
