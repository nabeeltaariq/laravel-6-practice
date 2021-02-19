@extends('layouts.app')

@section('content')
<div class="container">
 <div class="row justify-content-center">
  <div class="col-md-8">
   <div class="card">
    <div class="card-header">Create New Questionaire</div>

    <div class="card-body">


     <form action={{route('questionaire')}} method="post">
      @csrf
      <div class="form-group">
       <label for="title">Title </label>
       <input name="title" type="text" class="form-control" id="title" aria-describedby="TitleHelp" placeholder="Enter Title">
       @error('title')

       <small class=" text-danger">{{$message}}</small>
       @enderror
      </div>
      <div class="form-group">
       <label for="purpose">Purpose </label>
       <input name="purpose" type="text" class="form-control" id="title" aria-describedby="TitleHelp" placeholder="Enter Purpose">
       @error('purpose')

       <small class=" text-danger">{{$message}}</small>
       @enderror
      </div>

      <button type="submit" class="btn btn-dark">Submit</button>
     </form>

    </div>
   </div>
  </div>
 </div>
</div>
@endsection