<?php

namespace App\Http\Controllers;
use Illuminate\Database\Eloquent\Model;
use App\Post;
use Carbon\Carbon;

class PostsController extends Controller {
	public function __construct() {
		$this->middleware('auth')->except(['index', 'show']);
	}

	public function index() {
		
		$posts = Post::latest()
			->filter(request(['month', 'year']))
			->get();

		// $archives = Post::archives();

		// $archives = Post::selectRaw('year(created_at) year, monthname(created_at) month, count(*) published')
		//             ->groupBy('year', 'month')
		//             ->orderByRaw('min(created_at) desc')
		//             ->get()->toArray();

		//oldest for descending

		return view('posts.index', compact('posts'));

	}

	public function show(Post $post) {
		// $post = Post::find($id);
		return view('posts.show', compact('post'));
	}

	public function create() {
		return view('posts.create');
	}

	public function store() {
		$this->validate(request(), [
			'title' => 'required',
			'body' => 'required',
		]);

		auth()->user()->publish(
			new Post(request(['title', 'body']))
		);

		session()->flash('message', 'your blog is published');

		return redirect('/');
	}
}
