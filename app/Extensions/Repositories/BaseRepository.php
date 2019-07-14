<?php

namespace App\Extensions\Repositories;

use ArrayIterator;
use Exception;
use Illuminate\Database\Eloquent\Concerns\HasAttributes;
use Illuminate\Support\Collection;

class BaseRepository
{
    use HasAttributes;

    /** @var Collection */
    protected $items;
    /** @var ArrayIterator */
    protected $iterator;

    /**
     * Return new repository instance
     *
     * @param array $attributes
     *
     * @return static
     */
    public static function newInstance(array $attributes = [])
    {
        return (new static($attributes));
    }

    /**
     * This object not singleton, but can be created only by self methods all() getWhere() etc.
     *
     * EloquentRepository constructor.
     *
     * @param array $attributes
     */
    public function __construct($attributes = [])
    {
        $this->setRawAttributes($attributes);

        return $this;
    }


    /**
     * @param $collection
     * @return $this
     * @throws Exception
     */
    public function setCollection($collection)
    {
        if ($collection instanceof Collection) {
            throw new Exception();
        }

        if (!is_null($this->items)) {
            $this->items = $this->items->merge($collection);
        } else {
            $this->items = $collection;
        }

        return $this;
    }

    public function get($key, $default = null)
    {
        return $this->items->get($key, $default);
    }

    public function has($key)
    {
        return $this->items->has($key);
    }

    public function put($key, $value)
    {
        $this->items->put($key, $value);
    }

    public function items()
    {
        return $this->items;
    }

    /**
     * Get an iterator for the items.
     *
     * @return ArrayIterator
     */
    public function getIterator()
    {
        if (is_null($this->iterator)) {
            $this->iterator = $this->items->getIterator();
        }

        return $this->iterator;
    }

    /**
     * Count the number of items in the collection.
     *
     * @return int
     */
    public function count()
    {
        return $this->items()
                    ->count();
    }

    public function toArray()
    {
        return $this->items()
                    ->all();
    }

    /**
     * Determine if the given attribute exists.
     *
     * @param mixed $offset
     * @return bool
     */
    public function offsetExists($offset)
    {
        return !is_null($this->getAttribute($offset));
    }

    /**
     * Get the value for a given offset.
     *
     * @param mixed $offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return $this->getAttribute($offset);
    }

    /**
     * Set the value for a given offset.
     *
     * @param mixed $offset
     * @param mixed $value
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        $this->setAttribute($offset, $value);
    }

    /**
     * Unset the value for a given offset.
     *
     * @param mixed $offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        $this->items->offsetUnset($offset);
    }

    /**
     * Key an associative array by a field or using a callback.
     *
     * @param callable|string $keyBy
     * @return static
     */
    public function keyBy($keyBy)
    {
        $this->items->keyBy($keyBy);

        return $this;
    }

    /**
     * @param Collection $items
     * @return BaseRepository
     */
    protected function setItems($items)
    {
        $this->items = $items;

        $this->afterSetItems();

        return $this;
    }

    protected function afterSetItems()
    {
    }
}
