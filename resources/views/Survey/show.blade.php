@extends('layouts.app')

@section('content')
<div class="container">
 <div class="row justify-content-center">
  <div class="col-md-8">
   <div class="card">
    <h1>{{$questionaire->title}}</h1>

    <form action="/surveys/{{$questionaire->id}}-{{Str::slug($questionaire->title)}}" method="post">

     @csrf

     @foreach($questionaire->questions as $key => $question)

     <div class="card-body">

      @error('responses.'.$key. '.answer_id')

      <p class="text-danger">{{$message}}</p>
      @enderror
      <p> <strong>{{$key+1}} </strong>{{$question->question}}</p>
      <ul class="list-group">
       @foreach($question->answers as $answer)

       <li class="list-group-item"> <input type="radio" name="responses[{{$key}}][answer_id]" id="answer{{$answer->id}}" {{(old('responses.'.$key. '.answer_id')=== $answer->id ?  "checked" : "")}} class="mr-2" value="{{$answer->id}}">
        {{$answer->answer}}
        <input type="hidden" name="responses[{{$key}}][question_id]" value="{{$question->id}}">

       </li>
       @endforeach


      </ul>
     </div>
     @endforeach
     <button type="submit" class="btn btn-dark btn-block mr-3">Submit</button>
    </form>




   </div>
  </div>
 </div>
</div>
</div>
@endsection