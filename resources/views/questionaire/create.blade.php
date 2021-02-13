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
       <input name="title" type="Text" class="form-control" id="title" aria-describedby="TitleHelp" placeholder="Enter Title" required>
       <small id="TitleHelp" class="form-text text-muted">Give your Questionaire a title that attracts.</small>
      </div>
      <div class="form-group">
       <label for="purpose">Purpose </label>
       <input name="purpose" type="Text" class="form-control" id="title" aria-describedby="TitleHelp" placeholder="Enter Purpose">
       <small id="purpose" class="form-text text-muted">Please provide purpose of your questionaire.</small>
      </div>
      <button type="submit" class="btn btn-dark">Submit</button>
     </form>

    </div>
   </div>
  </div>
 </div>
</div>
@endsection