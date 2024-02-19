@extends('layout')
@section('content')
<form action="/article" method="post">
  @csrf
  <div class="form-group">
    <label for="exampleInputPassword1">Date Public</label>
    <input name="datePublic" type="date" class="form-control" id="">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Title</label>
    <input name="title" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Short Desc</label>
    <input name="shortDesc" type="text" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Desc</label>
    <textarea name="desc" class="form-control"></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection