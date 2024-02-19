@extends('layout')
@section('content')
<form action="/article/{{$article->id}}" method="post">
  @csrf
  @method('PUT')
  <div class="form-group">
    <label for="exampleInputPassword1">Date Public</label>
    <input name="datePublic" type="date" class="form-control" id="" value="{{$article->datePablic}}">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Title</label>
    <input name="title" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$article->title}}">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Short Desc</label>
    <input name="shortDesc" type="text" class="form-control" value="{{$article->shortDesc}}">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Desc</label>
    <textarea name="desc" class="form-control">{{$article->desc}}</textarea>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection