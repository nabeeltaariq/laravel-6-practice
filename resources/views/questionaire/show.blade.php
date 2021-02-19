@extends('layouts.app')

@section('content')
<div class="container">
 <div class="row justify-content-center">
  <div class="col-md-8">
   <div class="card">
    <div class="card-header">Questionaire</div>

    <div class="card-body">
     {{$questionaire->title}}
     <p>{{$questionaire->purpose}}</p>
     <p>{{$questionaire->user_id}}</p>

    </div>
   </div>
  </div>
 </div>
</div>
@endsection