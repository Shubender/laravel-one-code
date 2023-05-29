<?php

namespace App\Http\Controllers;

use Faker\Provider\Lorem;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $post = (object) [
            'id' => 123,
            'title' => 'Lorem ipsum dolor sit amet.',
            'content' => 'Lorem ipsum <strong>dolor</strong> sit amet, consectetur adipisicing elit. Iusto, laudantium?'
        ];

        $posts = array_fill(0, 10, $post);

        return view('blog.index', compact('posts'));
    }

    public function show()
    {
        $post = (object) [
            'id' => 123,
            'title' => 'Lorem ipsum dolor sit amet.',
            'content' => 'Lorem ipsum <strong>dolor</strong> sit amet, consectetur adipisicing elit. Iusto, laudantium?'
        ];

        return view('blog.show', compact('post'));
    }

    public function like($post)
    {
        return 'Like post';
    }
}
