@extends('layouts/master')

@section('content')
  <div class="col-sm-8 blog-main">
    <div class="blog-post">
      <h2 class="blog-post-title"><a href="/">Sample blog post<a/></h2>
      <p class="blog-post-meta">January 1, 2014 by <a href="#">Mark</a></p>
      <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
    </div>
    <nav class="blog-pagination">
      <a class="btn btn-outline-primary" href="#">Older</a>
      <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
    </nav>
  </div><!-- /.blog-main -->
@endsection
