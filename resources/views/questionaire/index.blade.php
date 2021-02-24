@extends('layouts.app')

@section('content')
<div class="container">
 <div class="row justify-content-center">
  <div class="col-md-8">
   <div class="card">
    <div class="card-header">Questionaires</div>

    <div class="card-body">
     @if (session('status'))
     <div class="alert alert-success" role="alert">
      {{ session('status') }}
     </div>
     @endif
     <a href={{route('questionaires.create')}} class="btn btn-dark"> Create New Questionaire</a>
    </div>
    <div class="card-body mt-4">


     <ul class="list-group">
      @foreach($questionaires as $questionaire)
      <li class="list-group-item">
       <a href="{{$questionaire->path()}}">{{$questionaire->title}}</a>
      </li>
      @endforeach
     </ul>
    </div>
   </div>
  </div>
 </div>
</div>
@endsection