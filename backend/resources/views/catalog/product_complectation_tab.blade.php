<?php
/**
 * @var \App\Models\Product\Product $product
 */

?>

<link rel="stylesheet" href="{{ asset('css/backend/catalog/complectation.css') }}">

<div
        class="complectationTabContainer"
        data-load-url="{{ action('Catalog\ProductController@complectationTab', ['product' => $product->product_id])}}"
        data-csrf-token="{{ csrf_token() }}"
        data-product-id="{{ $product->product_id }}"
        data-store-complection-category-url="{{ action('Catalog\ProductController@storeComplectationCategory') }}"
        data-store-complection-selected-product-url="{{ action('Catalog\ProductController@storeSelectedComplectionProduct') }}"
>
    @if($product->complectation->count() > 0)
        <?php /** @var \App\Models\Product\ProductComplectation $complectation */ ?>
        @foreach($product->complectation->items() as $complectation)
            <div>
                <div class="addComplectionCategoryContainer">
                    <div class="complectationTitle">
                        <h4>
                            {{ $complectation->name }}
                            <span
                                    class="destroyComplection"
                                    data-destroy-url="
                                        {{
                                            action(
                                                'Catalog\ProductController@destroyComplection',
                                                [
                                                    'complectation' => $complectation->id
                                                ]
                                            )
                                        }}
                                    "
                            >
                            (удалить)
                        </span>
                        </h4>
                    </div>
                    <blockquote>
                        <div>
                            <?php /** @var \App\Models\Product\ProductComplectationCategory $complectationCategory */ ?>
                            @foreach($complectation->categories->items() as $complectationCategory)
                                <div class="complectionCategory">
                                    <div class="complectationTitle">
                                        {{ $complectationCategory->category->description->name }}
                                        <span
                                                class="destroyComplectionCategory"
                                                data-destroy-url="{{
                                                action(
                                                    'Catalog\ProductController@destroyComplectionCategory',
                                                    [
                                                        'complectationCategory' => $complectationCategory->id
                                                    ]
                                                )
                                            }}"
                                        >
                                        (удалить)
                                    </span>
                                        <span class="help-block">При выборе товара он будет выбран по умолчанию при покеупке товара</span>
                                    </div>
                                    @forelse($complectationCategory->products->items() as $product)
                                        <div
                                                class="complectationProduct {{ $complectationCategory->getSelectedClass($product->product_id)  }}"
                                                data-complection-id="{{ $complectation->id }}"
                                                data-category-id="{{ $complectationCategory->category_id }}"
                                                data-product-id="{{ $product->product_id }}"
                                        >
                                            <img src="{{ getImagePath($product->image) }}" alt="">
                                        </div>
                                    @empty
                                        <span class="help-block">Товарова нет!</span>
                                    @endforelse
                                </div>
                            @endforeach
                        </div>
                        <div class="addComplectationCategoryForm">
                            <div class="form-group">
                                <lable>Добавить категорию к комплекту</lable>
                                <span class="help-block">
                                    При добавление нескольких категорий к комплекту при покупке товара у покупателя
                                    будет возможность выбора комплектоного товара их нескольких категорий
                                </span>
                                <select
                                        name="main_category_id"
                                        class="form-control complectationCategorySelect"
                                        data-complection-id="{{ $complectation->id }}"
                                >
                                    @foreach($categories as $category)
                                        <option value="{{ $category->category_id }}">{{ $category->description->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <button
                                        class="btn btn-success storeComplectionCategory"
                                        data-complection-id="{{ $complectation->id }}"
                                >
                                    Добавить
                                </button>
                            </div>
                        </div>
                    </blockquote>
                </div>
            </div>
        @endforeach
    @endif
    <h4>Добавить комплект</h4>
    <span class="help-block">
        При добавления комплекта к товару он будет продаваться в комплекте с выбранным покупателем товара,
        вы можете добавить несколько категорий к комплекту у покупателя будет возможность выбрать комплетный
        товар из нескольких товарных категорий
    </span>
    <div class="addComplectionForm">
        <div class="form-group">
            <label for="complectationCategory">
                Название
            </label>
            <input type="text" class="form-control" name="name" id="complectationNameInput">
        </div>
        <div class="form-group">
            <button
                    id="addProductComplectation"
                    class="btn btn-success"
                    data-add-link="{{ action('Catalog\ProductController@storeComplectation') }}"
            >
                Добавить
            </button>
        </div>
    </div>
</div>
<script>
    class ProductComplectationForm {
        constructor(options) {
            let object = this;
            this.reloadUrl = options.reloadUrl;
            this.csrfToken = options.csrfToken;
            this.productId = options.productId;
            this.storeComplectionCategoryUrl = options.storeComplectionCategoryUrl;
            this.storeComplectionSelectedProductUrl = options.storeComplectionSelectedProductUrl;

            $(document).ready(function () {
                object.bindEvents();
            });
        }

        bindEvents() {
            let object = this;

            $('#addProductComplectation').click(function (event) {
                event.stopPropagation();
                event.preventDefault();

                object.storeComplectation(
                    $(this).data('add-link'),
                    $('#complectationNameInput').val()
                );
            });

            $('.storeComplectionCategory').click(function (event) {
                event.stopPropagation();
                event.preventDefault();

                let complectionId = $(this).data('complection-id');
                let select = $('.complectationCategorySelect').filter('[data-complection-id="' + complectionId + '"]');

                object.storeComplectionCategory(complectionId, select.find(':selected').val());
            });

            $('.complectationProduct').click(function () {
                $('.complectationProduct').removeClass('selected');
                $(this).addClass('selected');

                object.storeSelectedProduct(
                    $(this).data('complection-id'),
                    $(this).data('category-id'),
                    $(this).data('product-id')
                );
            });

            $('.destroyComplection').click(function (event) {
                event.stopPropagation();
                event.preventDefault();

                object.destroyComplection($(this).data('destroy-url'));
            });

            $('.destroyComplectionCategory').click(function (event) {
                console.log(123);
                event.stopPropagation();
                event.preventDefault();

                object.destroyComplectionCategory($(this).data('destroy-url'));
            })
        }

        storeSelectedProduct(complectionId, categoryId, productId) {
            let object = this;
            $.ajax(
                {
                    url: this.storeComplectionSelectedProductUrl,
                    data: {
                        complectionId: complectionId,
                        categoryId: categoryId,
                        productId: productId
                    },
                    method: 'post',
                }
            )
        }

        storeComplectation(storeLink, name) {
            let object = this;

            $.ajax({
                url: storeLink,
                data: {
                    product_id: this.productId,
                    name: name,
                    _token: this.csrfToken
                },
                method: 'POST',
                success: function () {
                    object.reloadTab();
                }
            })
        }

        reloadTab() {
            $.ajax(
                {
                    url: this.reloadUrl,
                    success: function (response) {
                        $('#productComplectationContainer').html(response);
                    }
                }
            )
        }

        storeComplectionCategory(complectionId, categoryId) {
            let object = this;
            console.log(categoryId);
            $.ajax(
                {
                    url: this.storeComplectionCategoryUrl,
                    method: 'post',
                    data: {
                        complectionId: complectionId,
                        categoryId: categoryId
                    },
                    success: function () {
                        object.reloadTab();
                    }
                }
            )
        }

        destroyComplection(url) {
            let object = this;

            $.ajax(
                {
                    url: url,
                    method: 'delete',
                    success: function () {
                        object.reloadTab();
                    }
                }
            );
        }

        destroyComplectionCategory(url) {
            let object = this;

            $.ajax(
                {
                    url: url,
                    method: 'delete',
                    success: function () {
                        object.reloadTab();
                    }
                }
            );
        }
    }

    $(document).ready(function () {
        let complectationForm = new ProductComplectationForm({
            reloadUrl: $('.complectationTabContainer').data('load-url'),
            csrfToken: $('.complectationTabContainer').data('csrf-token'),
            productId: $('.complectationTabContainer').data('product-id'),
            storeComplectionCategoryUrl: $('.complectationTabContainer').data('store-complection-category-url'),
            storeComplectionSelectedProductUrl: $('.complectationTabContainer').data('store-complection-selected-product-url')
        });
    });
</script>
