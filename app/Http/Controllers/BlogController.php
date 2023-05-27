<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index() {
        return 'Blog posts';
    }

    public function show($post) {
        return 'Show post';
    }

    public function like($post) {
        return 'Like post';
    }
}
