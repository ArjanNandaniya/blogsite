@extends('layouts.master')

@section('content')
<main role="main" class="container">
<div class="row">
  <div class="col-md-8 blog-main">
    <div class="blog-post">
      <h1 class="blog-post-title">Publish a post</h2>
    </div>
    <hr>
    <form method="POST" action="/posts">

      {{ csrf_field() }}

        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" placeholder="Title" name="title">
        </div>

        <div class="form-group">
            <label for="body">Body:</label>
            <textarea id="body" name="body" class="form-control"></textarea>
        </div>
        
        <div class="form-group">
          <button type="submit" class="btn btn-primary">Publish</button>
        </div>
      @include('layouts.errors')
    </form>

  </div><!-- /.blog-main -->

  @include('layouts.sidebar')

</div><!-- /.row -->

</main>

@endsection

@section('footer')