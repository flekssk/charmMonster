<div class="navigationsBlock">
    <ul class="nav">
        <li class="nav-item active">
            <a class="nav-link btn btn-outline-secondary" href="{{ action('Admin\Product\ProductController@index') }}">Все товары<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
            <a class="nav-link btn btn-outline-secondary" href="{{ action('Admin\Product\ProductController@create') }}">
                Добавить товар<span class="sr-only">(current)</span>
            </a>
        </li>
    </ul>
</div>
