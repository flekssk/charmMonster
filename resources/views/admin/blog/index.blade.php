@extends('layouts.admin.layout')

@section('header')
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            @include('admin.blog.menu')
            <div class="box">
                <div class="box-header with-border">
                    <div class="box-title">Список постов</div>
                </div>
                <div class="box-body">
                    <table class="table table-hover table-striped customTable">
                        <thead>
                        <tr>
                            <th></th>
                            <th>Название</th>
                            <th>Содержание</th>
                            <th>Активен</th>
                            <th>На главной</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        /**
                         * @var \App\Models\Blog\Post $Category
                         */
                        ?>
                        @forelse($posts->items() as $post)
                            <tr>
                                <td class="tableImage">
                                    @if($post->images->count() > 0)
                                        <img width="200px" src="{{ $post->images->first()->image }}" class="img-thumbnail">
                                    @endif
                                </td>
                                <td>{{ $post->title }}</td>
                                <td style="width: 400px;">{{ substr(strip_tags($post->content), 0, 200) }}...</td>
                                <td>{{ $post->active ? 'Да' : 'Нет' }}</td>
                                <td>{{ $post->on_main ? 'Да' : 'Нет' }}</td>
                                <td>
                                    <a href="{{ action('Admin\Blog\PostController@edit', ['post' => $post->id]) }}">
                                        <i class="fa fa-edit controlButton small"></i>
                                    </a>
                                    <a href="{{ action('Admin\Blog\PostController@destroy', ['post' => $post->id]) }}">
                                        <i class="fa fa-trash controlButton small"></i>
                                    </a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="2" style="text-align: center;">
                                    <h6>Постов нет</h6>
                                </td>
                            </tr>
                        @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection