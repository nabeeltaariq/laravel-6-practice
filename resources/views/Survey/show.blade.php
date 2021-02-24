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

       <li class="list-group-item">
        <input type="radio" name="responses[{{ $key }}][answer_id]" id="answer{{ $answer->id }}" {{ (old('responses.' . $key . '.answer_id') == $answer->id) ? 'checked' : '' }} class="mr-2" value="{{ $answer->id }}">
        {{ $answer->answer }}

        <input type="hidden" name="responses[{{ $key }}][question_id]" value="{{ $question->id }}">
       </li>
       {{$answer->answer}}


       @endforeach


      </ul>
     </div>
     @endforeach
     <div class="card mt-4">
      <div class="card-header">Your Information</div>

      <div class="card-body">
       <div class="form-group">
        <label for="name">Your Name</label>
        <input name="survey[name]" type="text" class="form-control" id="name" aria-describedby="nameHelp" placeholder="Enter Name">
        <small id="nameHelp" class="form-text text-muted">Hello! What's your name?</small>

        @error('name')
        <small class="text-danger">{{ $message }}</small>
        @enderror
       </div>

       <div class="form-group">
        <label for="email">Your Email</label>
        <input name="survey[email]" type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter Email">
        <small id="emailHelp" class="form-text text-muted">Your Email Please!</small>

        @error('email')
        <small class="text-danger">{{ $message }}</small>
        @enderror
       </div>
       <button type="submit" class="btn btn-dark btn-block mr-3">Submit</button>
    </form>




   </div>
  </div>
 </div>
</div>
</div>
@endsection