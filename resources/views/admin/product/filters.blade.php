<div id="filters">
    <form action="">
        <div class="col-lg-12">
            <h5><b>Фильтры</b></h5>
        </div>
        <div class="form-group col-lg-2 justify-content-center">
            <b>Категория</b>
            <?php
            echo form()->select(
                'filters[categories][]',
                array_merge([0 => ''], $categories->forDropDown('name')),
                request()->get('filters')['categories'][0] ?? null,
                ['class' => 'form-control']
            )
            ?>
        </div>
        <div class="form-group col-lg-2 justify-content-center">
            <b>Активность</b>
            <div class="btn-group-toggle" data-toggle="buttons">
                <label class="btn btn-sm btn-secondary {{ request()->input('filters.active') == 'all' ? 'active' : '' }}">
                    <input
                            name="filters[active]"
                            value="all"
                            type="radio"
                            id="option1"
                            autocomplete="off"
                            {{ request()->input('filters.active') == 'all' ? 'checked' : '' }}
                    > Все
                </label>
                <label class="btn btn-sm btn-secondary {{ request()->input('filters.active') == '1' ? 'active' : '' }}">
                    <input
                            type="radio"
                            name="filters[active]"
                            id="option2"
                            value="1"
                            autocomplete="off"
                            {{ request()->input('filters.active') == '1' ? 'checked' : '' }}
                    > Да
                </label>
                <label class="btn btn-sm btn-secondary {{ request()->input('filters.active') == '0' ? 'active' : '' }}">
                    <input
                            type="radio"
                            name="filters[active]"
                            id="option3"
                            autocomplete="off"
                            value="0"
                            {{ request()->input('filters.active') == '0' ? 'checked' : '' }}
                    > Нет
                </label>
            </div>
        </div>
        <div class="form-group col-lg-2 justify-content-center">
            <b>На главной</b>
            <div class="btn-group-toggle" data-toggle="buttons">
                <label class="btn btn-sm btn-secondary {{ request()->input('filters.on_main') == 'all' ? 'active' : '' }}">
                    <input
                            name="filters[on_main]"
                            value="all"
                            type="radio"
                            id="option1"
                            autocomplete="off"
                            {{ request()->input('filters.on_main') == 'all' ? 'checked' : '' }}
                    > Все
                </label>
                <label class="btn btn-sm btn-secondary {{ request()->input('filters.on_main') == '1' ? 'active' : '' }}">
                    <input
                            type="radio"
                            name="filters[on_main]"
                            id="option2"
                            value="1"
                            autocomplete="off"
                            {{ request()->input('filters.on_main') == '1' ? 'checked' : '' }}
                    > Да
                </label>
                <label class="btn btn-sm btn-secondary {{ request()->input('filters.on_main') == '0' ? 'active' : '' }}">
                    <input
                            type="radio"
                            name="filters[on_main]"
                            id="option3"
                            autocomplete="off"
                            value="0"
                            {{ request()->input('filters.on_main') == '0' ? 'checked' : '' }}
                    > Нет
                </label>
            </div>

        </div>
        <div class="form-group col-lg-12">
            <input type="submit" class="btn btn-sm btn-success" value="Применить">
            <a href="{{ action('Admin\Product\ProductController@index') }}" class="btn btn-sm btn-danger">Очистить</a>
        </div>
    </form>
</div>