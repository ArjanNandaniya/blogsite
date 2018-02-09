@extends('layouts.master')

@section('content')
<main role="main" class="container">
<div class="row">
  <div class="col-md-8 blog-main">
    <div class="blog-post">
      <h1 class="blog-post-title">login</h2>
    </div>
    <hr>
    <form method="POST" action="/login">

      {{ csrf_field() }}

        <div class="form-group">
            <label  for="email">Email Address:</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>

        <div class="form-group">
            <label  for="Password">Password:</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>
        <button type="submit" class="btn btn-primary">Login</button>
    </form>
    <hr>
    @include('layouts.errors')    
  </div><!-- /.blog-main -->

  @include('layouts.sidebar')

</div><!-- /.row -->

</main>

@endsection

@section('footer')