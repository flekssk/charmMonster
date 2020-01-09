<?php

namespace App\Repositories\Product;

use App\Extensions\Repositories\EloquentRepository;
use App\Models\Product\Product;
use Illuminate\Support\Collection;

class ProductRepository extends EloquentRepository
{
    /** @var Collection */
    protected $tags;
    /** @var int */
    protected $minPrice;
    /** @var int */
    protected $maxPrice;

    public static function getByIds($products)
    {
        $instance = self::newInstance();

        $items = $instance->newModelInstance()
            ->newQuery()
            ->whereIn('product_id', $products)
            ->get();

        return $instance->setItems($items);
    }

    /**
     * @param Collection $filters
     *
     * @return ProductRepository
     */
    public static function withFilters($filters)
    {
        $instance = self::newInstance();

        $query = $instance->newModelInstance()
            ->newQuery();

        if ($filters->has('categories')) {
            $categories = collect($filters->get('categories'))->filter(
                function ($element) {
                    return (int )$element > 0;
                }
            );

            if ($categories->count() > 0) {
                $query->whereIn('category_id', array_map('intval', $categories->toArray()));
            }
        }

        if ($filters->has('active') && $filters->get('active') != 'all') {
            $query->where('active', '=', $filters->get('active'));
        }

        if ($filters->has('on_main') && $filters->get('on_main') != 'all') {
            $query->where('on_main', '=', $filters->get('on_main'));
        }

        $instance->setItems($query->get());

        return $instance;
    }

    public static function getOnMain()
    {
        $instance = self::newInstance();

        return $instance->setItems($instance->newModelInstance()->newQuery()->where('status', '=', 1)->get());
    }

    public static function getFromCategory($categoryId)
    {
        $instance = self::newInstance();

        $items = $instance->newModelInstance()
            ->newQuery()
            ->select('product.*')
            ->join(
                'product_to_category',
                'product.product_id',
                '=',
                'product_to_category.product_id'
            )
            ->where('product_to_category.category_id', '=', $categoryId)
            ->get();

        return $instance->setItems($items->keyBy('product_id'));
    }

    public function getModelAlias()
    {
        return Product::class;
    }

    public function getTags()
    {
        if (is_null($this->tags)) {
            $this->setTags();
        }

        return $this->tags;
    }

    public function setTags()
    {
        $this->tags = collect();

        foreach ($this->items() as $item) {
            foreach ($item->description->tags as $tag) {
                $this->tags[$tag] = $tag;
            }
        }
    }

    /**
     * @param Collection $filters
     *
     * @return Collection
     */
    public function filtrate($filters)
    {
        $items = $this->items();

        if ($filters->has('tags') > 0) {
            $items = $this->items()
                ->filter(
                    function ($item) use ($filters) {
                        $tags = collect($filters->get('tags', []));
                        foreach ($item->description->tags as $tag) {
                            if ($tags->has($tag)) {
                                return true;
                            }
                        }
                    }
                );
        }

        $items = $items->filter(
            function ($item) use ($filters) {
                return $item->price >= (int)$filters->get('minPrice') && $item->price <= (int)$filters->get('maxPrice');
            });

        if (!empty($filters->get('name'))) {
            $items = $items->filter(
                function ($item) use ($filters) {
                    foreach (explode(' ', $filters->get('name')) as $keyword) {
                        foreach ($item->description->tags as $tag) {
                            if (
                                stristr(mb_strtolower($keyword), mb_strtolower($tag))
                                || stristr(mb_strtolower($tag), mb_strtolower($keyword))
                            ) {
                                return true;
                            }
                        }
                        if (
                            stristr(mb_strtolower($keyword), mb_strtolower($item->description->name))
                            || stristr(mb_strtolower($item->description->name), mb_strtolower($keyword))
                        ) {
                            return true;
                        }
                    }
                });
        }

        return $items;
    }

    public function getMaxPrice()
    {
        if (is_null($this->maxPrice)) {
            $this->setMaxPrice();
        }

        return $this->maxPrice;
    }

    public function getMinPrice()
    {
        if (is_null($this->minPrice)) {
            $this->setMinPrice();
        }

        return $this->minPrice;
    }

    public function totalPrice()
    {
        $total = 0;

        foreach ($this->items() as $item) {
            $total += (int)$item->price;
        }

        return $total;
    }

    protected function setMinPrice()
    {
        if ($this->items()->count() > 0) {
            $minPrice = $this->items()->first()->price;

            foreach ($this->items() as $item) {
                $minPrice = is_numeric($item->price) && $item->price < $minPrice ? $item->price : $minPrice;
            }

            $this->minPrice = (int)$minPrice;
        }
    }

    protected function setMaxPrice()
    {
        if ($this->items()->count() > 0) {
            foreach ($this->items() as $item) {
                $this->maxPrice = is_numeric(
                    $item->price) && $item->price > $this->maxPrice ? $item->price : $this->maxPrice;
            }

            $this->maxPrice = (int)$this->maxPrice;
        }
    }
}