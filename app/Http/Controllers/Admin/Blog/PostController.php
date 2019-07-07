<?php

namespace App\Http\Controllers\Admin\Blog;

use App\Http\Controllers\Admin\AdminController;
use App\Models\Blog\Article;
use App\Models\Blog\ArticleImage;
use App\Repositories\Blog\ArticlesRepository;
use App\Requests\Admin\Blog\PostFormRequest;
use Illuminate\Http\Request;

class PostController extends AdminController
{
    public function index(Request $request)
    {
        return view('admin.blog.index', ['posts' => ArticlesRepository::all()]);
    }

    public function create(Request $request)
    {
        return view('admin.blog.create');
    }

    public function store(PostFormRequest $request)
    {
        $post = new Article();

        $post->title         = $request->title;
        $post->short_content = $request->get('short_content');
        $post->content       = $request->get('content');
        $post->on_main       = $request->on_main == 'on' ? true : false;
        $post->active        = $request->active == 'on' ? true : false;

        if ($post->save()) {
            foreach ($request->images as $file) {
                $image          = new ArticleImage();
                $image->image   = $file;
                $image->post_id = $post->id;

                $image->save();
            }
        }

        return redirect(action('Admin\Blog\PostController@index'));
    }

    public function edit(Article $post)
    {
        return view('admin.blog.edit', compact('post'));
    }

    public function update(Article $post, PostFormRequest $request)
    {
        $post->title         = $request->title;
        $post->short_content = $request->get('short_content');
        $post->content       = $request->get('content');
        $post->on_main       = $request->on_main == 'on' ? true : false;
        $post->active        = $request->active == 'on' ? true : false;

        if ($post->save()) {
            $existedImage = $post->images->keyBy('image');
            if ($request->has('images')) {
                foreach ($request->images as $file) {
                    if (!$existedImage->has($file)) {
                        $image          = new ArticleImage();
                        $image->image   = $file;
                        $image->post_id = $post->id;

                        $image->save();
                    } else {
                        $existedImage->forget($file);
                    }
                }
            }

            foreach ($existedImage as $item) {
                $item->delete();
            }
        }

        return redirect(action('Admin\Blog\PostController@index'));
    }

    public function destroy(Article $post)
    {
        $post->delete();

        return redirect(action('Admin\Blog\PostController@index'));
    }
}