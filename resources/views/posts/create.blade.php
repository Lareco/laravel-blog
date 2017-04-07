@extends('layouts/master')

@section('content')
  <div class="col-sm-8">
    <h1>Publish a Post</h1>
    <hr>
    <form method="post" action="/posts">
      {{ csrf_field() }}
      <div class="form-group">
        <label for="title">Title:</label>
        <input type="text" class="form-control" id="title" name="title">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Body:</label>
        <textarea class="form-control" name="body"></textarea>
      </div>
      <button type="submit" class="btn btn-primary">Publish</button>
    </form>
    @include('layouts/errors')
  </div>
@endsection
