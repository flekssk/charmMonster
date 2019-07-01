@extends('layouts.admin.layout')

@section('header')
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            @include('admin.category.menu')
            <div class="box">
                <div class="box-header with-border">
                    <div class="box-title">Список категорий</div>
                </div>
                <div class="box-body">
                    <table class="table table-hover table-striped customTable">
                        <thead>
                        <tr>
                            <th></th>
                            <th>Название</th>
                            <th>Активен</th>
                            <th>На главной</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        /**
                         * @var \App\Models\Product\Category $Category
                         */
                        ?>
                        @forelse($categories->items() as $category)
                            <tr>
                                <td class="tableImage">
                                    @if($category->image)
                                        <img width="200px" src="{{ $category->image }}" class="img-thumbnail">
                                    @endif
                                </td>
                                <td>{{ $category->name }}</td>
                                <td>{{ $category->active ? 'Да' : 'Нет' }}</td>
                                <td>{{ $category->on_main ? 'Да' : 'Нет' }}</td>
                                <td>
                                    <a href="{{ action('Admin\Category\CategoryController@edit', ['category' => $category->id]) }}">
                                        <i class="fa fa-edit controlButton small"></i>
                                    </a>
                                    <a href="{{ action('Admin\Category\CategoryController@destroy', ['category' => $category->id]) }}">
                                        <i class="fa fa-trash controlButton small"></i>
                                    </a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="2" style="text-align: center;">
                                    <h6>Товаров нет</h6>
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