<?php

namespace App\Extensions\Repositories;

use App\Extensions\Repositories\Contracts\Repository;
use App\Models\Model;
use ArrayAccess;
use Countable;
use Exception;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Support\Collection;

/**
 * Class EloquentRepository
 *
 * @package App\Repositories
 */
abstract class EloquentRepository extends BaseRepository implements Arrayable, ArrayAccess, Countable, \Iterator
{
    public $table;

    public $isFirstIteration = true;

    /** @var Model */
    protected $previous;

    protected $last;

    abstract public function getModelAlias();

    /**
     * @return self
     */
    public static function getEmpty()
    {
        return self::newInstance();
    }

    /**
     * Get all records
     *
     * @param array $columns
     *
     * @return static
     *
     * @throws Exception
     */
    public static function all($columns = array('*'))
    {
        return self::newInstance()
            ->setItemsFromModelStatic('all', $columns);
    }

    public function forDropDown($display, $value = 'id')
    {
        $all = [];
        foreach ($this->items()->all() as $item) {
            $all[$item->$value] = $item->$display;
        }

        return $all;
    }

    /**
     * @param array $where
     * @param array $columns
     *
     * @return EloquentRepository
     *
     * @throws Exception
     */
    public static function getWhere($where, $columns = array('*'))
    {
        $repository = self::newInstance();
        $items      = $repository->newModelInstance()
            ->newQuery()
            ->select($columns)
            ->where($where)
            ->get();

        $repository->setItems($items);

        return $repository;
    }

    /**
     * @return Model
     */
    public function newModelInstance()
    {
        $name = $this->getModelAlias();
        return new $name();
    }

    /**
     * @param $method
     * @param array $params
     *
     * @return mixed
     */
    public function callModelStatic($method, $params = array())
    {
        return forward_static_call(array($this->getModelAlias(), $method), $params);
    }

    /**
     * Split records on pages
     *
     * @param int $perPage
     * @param array $columns
     *
     * @return Paginator
     */
    public function paginate($perPage = 15, $columns = array('*'))
    {
        //TODO: realize paginator
//        return new Paginator($this->items, $perPage);
    }

    /**
     * Return the current element
     *
     * @link http://php.net/manual/en/iterator.current.php
     * @return mixed|\Illuminate\Database\Eloquent\Model Can return any type.
     * @since 5.0.0
     */
    public function current()
    {
        return $this->getIterator()->current();
    }

    /**
     * @return mixed|Model
     */
    public function prev()
    {
        return $this->previous;
    }

    /**
     * Move forward to next element
     *
     * @link http://php.net/manual/en/iterator.next.php
     * @since 5.0.0
     */
    public function next()
    {
        if ($this->current() && $this->getIterator()->key() > 0) {
            $this->previous = $this->current();
        }

        return $this->getIterator()->next();
    }

    public function getNext()
    {
        if ($this->getIterator()->valid() && !$this->isFirstIteration) {
            $this->previous = $this->current();
            $this->next();
        }

        $this->isFirstIteration = false;

        return !is_null($this->current());
    }

    /**
     * Return the key of the current element
     *
     * @link http://php.net/manual/en/iterator.key.php
     * @return mixed scalar on success, or null on failure.
     * @since 5.0.0
     */
    public function key()
    {
        return $this->getIterator()->key();
    }

    /**
     * Checks if current position is valid
     *
     * @link http://php.net/manual/en/iterator.valid.php
     * @return boolean The return value will be casted to boolean and then evaluated.
     * Returns true on success or false on failure.
     * @since 5.0.0
     */
    public function valid()
    {
        return $this->getIterator()->valid();
    }

    /**
     * Rewind the Iterator to the first element
     *
     * @link http://php.net/manual/en/iterator.rewind.php
     * @return void Any returned value is ignored.
     * @since 5.0.0
     */
    public function rewind()
    {
        $this->cursor = $this->items()->first()->id;
    }

    public function findLikeByFieldValue($field, $value)
    {
        $key = false;
        if(!empty($field) && !empty($value)) {
            $key = $this->items()->search(function ($item, $key) use($field, $value) {
                return  mb_stristr($item->$field, $value) ? $key : false;
            });
        }

        return $key !== false && $this->items()->has($key) ? $this->items()->get($key) : null;
    }


    public function findByFieldValue($field, $value)
    {
        $key = $this->items()->search(function ($item, $key) use($field, $value) {
           return  $item->$field == $value ? $key : false;
        });

        return $key !== false && $this->items()->has($key) ? $this->items()->get($key) : null;
    }

    /**
     * @param $method
     * @param array $params
     * @return $this
     *
     * @throws Exception
     */
    protected function setItemsFromModelStatic($method, $params = array())
    {
        if (!method_exists($this->getModelAlias(), $method)) {
            throw new Exception('Model ' . $this->getModelAlias() . ' does`t has static method ' . $method);
        }

        $this->setItems($this->callModelStatic($method, $params));

        return $this;
    }
}
