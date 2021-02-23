@extends('layouts.app')

@section('content')
<div class="container">
 <div class="row justify-content-center">
  <div class="col-md-8">
   <div class="card">
    <div class="card-header">Questionaire</div>

    <div class="card-body">
     {{$questionaire->title}}
     <div class="crad-body">
      <a class="btn btn-dark" href="/surveys/{{$questionaire->id}}-{{Str::slug($questionaire->title)}}">Surveys</a>
     </div>
     <p>{{$questionaire->purpose}}</p>
     <p>User has Created with Id: {{$questionaire->user_id}}</p>
     @foreach($questionaire->questions as $question)

     <div class="card-body">
      <p>{{$question->question}}</p>
      <ul class="list-group">
       @foreach($question->answers as $answer)
       <li class="list-group-item">{{$answer->answer}}</li>
       @endforeach


      </ul>
     </div>
     @endforeach
     <a class="btn btn-dark" href={{route('question.create',['questionaireId'=>$questionaire->id])}}> Create Question</a>

    </div>
   </div>
  </div>
 </div>
</div>
@endsection