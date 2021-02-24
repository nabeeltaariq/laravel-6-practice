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
        $data = request()->validate([
            'question.question' => 'required',
            'answers.*.answer' => 'required',
        ]);

        $question = $questionaire->questions()->create($data['question']);
        $question->answers()->createMany($data['answers']);

        return redirect('/questionaire/' . $questionaire->id);
    }
    public function destroy($questionaireId,  \App\Question $question)
    {

        $question->answers()->delete();
        $question->delete();
        return redirect()->back();
    }
}
