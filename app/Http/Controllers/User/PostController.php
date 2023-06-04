<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function index()
    {
        $post = (object) [
            'id' => 123,
            'title' => 'Lorem ipsum dolor sit amet.',
            'content' => 'Lorem ipsum <strong>dolor</strong> sit amet, consectetur adipisicing elit. Iusto, laudantium?'
        ];

        $posts = array_fill(0, 10, $post);

        return view('user.posts.index', compact('posts'));
    }

    public function create()
    {
        return view('user.posts.create');
    }

    public function store()
    {
        return 'Запрос создание поста';
    }

    public function show($post)
    {
        $post = (object) [
            'id' => 123,
            'title' => 'Lorem ipsum dolor sit amet.',
            'content' => 'Lorem ipsum <strong>dolor</strong> sit amet, consectetur adipisicing elit. Iusto, laudantium?'
        ];

        return view('user.posts.show', compact('post'));
    }

    public function edit($post)
    {
        return view('user.posts.edit', compact('post'));
    }

    public function update()
    {
        return 'Запрос изменение поста';
    }

    public function delete()
    {
        return 'Запрос удаление поста';
    }

    public function like()
    {
        return 'Лайк + 1';
    }
}
