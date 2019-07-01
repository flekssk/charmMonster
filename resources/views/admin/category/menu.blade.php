<div class="navigationsBlock">
    <ul class="nav">
        <li class="nav-item active">
            <a class="nav-link btn btn-outline-secondary" href="#">
                Все категории<span class="sr-only">(current)</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link btn btn-outline-secondary"
               href="{{ action('Admin\Category\CategoryController@create') }}"
            >
                Добавить категорию<span class="sr-only">(current)</span>
            </a>
        </li>
    </ul>
</div>
