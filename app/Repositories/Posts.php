<?php
namespace App\Repositories;
use App\Post;
use App\Tag;

class Posts{
    public function all(){
        return Post::all();
        return Tag::pluck('name');
    }
}

?>