@extends('layouts.admin.layout')

@section('header')
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            @include('admin.product.menu')
            <div class="box">
                <div class="box-header with-border">
                    <div class="box-title">Список товаров</div>
                </div>
                <div class="box-body">
                    @include('admin.product.filters')
                    <table class="table table-hover table-striped customTable">
                        <thead>
                        <tr>
                            <th></th>
                            <th>Название</th>
                            <th>Категория</th>
                            <th>Цена</th>
                            <th>Просмотры</th>
                            <th>Активен</th>
                            <th>На главной</th>
                            <th>Создан</th>
                            <th>Обновлен</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        /**
                         * @var \App\Models\Product\Product $product
                         */
                        ?>
                        @forelse($products->items()->all() as $product)
                            <tr>
                                <td class="tableImage">
                                    @if($product->image)
                                        <img width="200px" src="{{ $product->image }}" class="img-thumbnail">
                                    @endif
                                </td>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->category->name }}</td>
                                <td>{{ $product->price }}</td>
                                <td>{{ $product->views }}</td>
                                <td>{{ $product->active ? 'Да' : 'Нет' }}</td>
                                <td>{{ $product->on_main ? 'Да' : 'Нет' }}</td>
                                <td>{{ $product->created_at }}</td>
                                <td>{{ $product->updated_at }}</td>
                                <td>
                                    <a href="{{ action('Admin\Product\ProductController@edit', ['product' => $product->id]) }}">
                                        <i class="fa fa-edit controlButton small"></i>
                                    </a>
                                    <a href="{{ action('Admin\Product\ProductController@destroy', ['product' => $product->id]) }}">
                                        <i class="fa fa-trash controlButton small"></i>
                                    </a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="10" style="text-align: center;">
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