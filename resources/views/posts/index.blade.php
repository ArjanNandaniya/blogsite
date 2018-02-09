@extends('layouts.master')


@section('content')

<main role="main" class="container">
<div class="row">
  <div class="col-md-8 blog-main">
    @foreach ($posts as $post)
    
        @include('posts.post')

    @endforeach
    <nav class="blog-pagination">
      <a class="btn btn-outline-primary" href="#">Older</a>
      <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
    </nav>

  </div><!-- /.blog-main -->

  @include('layouts.sidebar')

</div><!-- /.row -->

</main>

@endsection

@section('footer')
   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="/js/jquery-slim.min.mir"></script>')</script>
    <script src="../../../../assets/js/vendor/popper.min.js"></script>
    <script src="../../../../dist/js/bootstrap.min.js"></script>
    <script src="../../../../assets/js/vendor/holder.min.js"></script>
@endsection