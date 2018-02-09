  <div class="nav-scroller py-1 mb-2">
   
<nav class="nav d-flex justify-content-between">
  <a class="p-2 text-muted" href="#">Home</a>
  <a class="p-2 text-muted" href="/posts/create">publish post</a>
  <a class="p-2 text-muted" href="#">Press</a>
  <a class="p-2 text-muted" href="#">New Hires</a>
  <a class="p-2 text-muted" href="#">About</a>
</nav>
@if($flash = session('message'))
        <div id="flash-message" class="alert alert-success" role="alert">
              {{ $flash }}
        </div>
          @endif
</div>

<div class="jumbotron p-3 p-md-5 text-white rounded bg-dark">
<div class="col-md-6 px-0">
  <h1 class="display-4 font-italic">Title of a longer featured blog post</h1>
  <p class="lead my-3">Multiple lines of text that form the lede, informing new readers quickly and efficiently about what's most interesting in this post's contents.</p>
  <p class="lead mb-0"><a href="#" class="text-white font-weight-bold">Continue reading...</a></p>
</div>
</div>

<div class="row mb-2">
</div>
</div>