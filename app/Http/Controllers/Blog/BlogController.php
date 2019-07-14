<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use App\Models\Blog\Article;
use App\Repositories\Blog\ArticlesRepository;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(Request $request)
    {
        return view('blog.index', ['articles' => ArticlesRepository::all()]);
    }

    public function show(Article $article)
    {
        return view('blog.show', ['article' => $article]);
    }
}