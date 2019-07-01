<?php

namespace App\Http\Controllers\Admin\Blog;

use App\Http\Controllers\Admin\AdminController;
use App\Models\Blog\Post;
use App\Models\Blog\PostsImage;
use App\Repositories\Blog\PostsRepository;
use App\Requests\Admin\Blog\PostFormRequest;
use Illuminate\Http\Request;

class PostController extends AdminController
{
    public function index(Request $request)
    {
        return view('admin.blog.index', ['posts' => PostsRepository::all()]);
    }

    public function create(Request $request)
    {
        return view('admin.blog.create');
    }

    public function store(PostFormRequest $request)
    {
        $post = new Post();

        $post->title         = $request->title;
        $post->short_content = $request->get('short_content');
        $post->content       = $request->get('content');
        $post->on_main       = $request->on_main == 'on' ? true : false;
        $post->active        = $request->active == 'on' ? true : false;

        if ($post->save()) {
            foreach ($request->images as $file) {
                $image          = new PostsImage();
                $image->image   = $file;
                $image->post_id = $post->id;

                $image->save();
            }
        }

        return redirect(action('Admin\Blog\PostController@index'));
    }

    public function edit(Post $post)
    {
        return view('admin.blog.edit', compact('post'));
    }

    public function update(Post $post, PostFormRequest $request)
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
                        $image          = new PostsImage();
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

    public function destroy(Post $post)
    {
        $post->delete();

        return redirect(action('Admin\Blog\PostController@index'));
    }
}