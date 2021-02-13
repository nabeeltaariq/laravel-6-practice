<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuestionaireController extends Controller
{
    public function index()
    {
        return view("questionaire.index");
    }
    public function create()
    {
        return view("questionaire.create");
    }

    public function store()
    {
        dd("stored");
    }
}
