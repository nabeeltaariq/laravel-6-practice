<?php

namespace App\Http\Controllers;

use App\Questionaire;
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
        $data = request()->validate([
            "title" => "required",
            "purpose" => "required",

        ]);
        $data["user_id"] = auth()->user()->id;
        $questionaire = Questionaire::create($data);
        return redirect('/questionaire/' . $questionaire->id);
    }
    public function show(\App\Questionaire $questionaire)
    {
        return view("questionaire.show", compact('questionaire'));
    }
}
