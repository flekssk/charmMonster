<?php

namespace lib\App\Extensions\Repositories;

use lib\library\models\BPMModel;

abstract class IterableEloquentRepository extends EloquentRepository implements \Iterator
{
    /** @var BPMModel */
    protected $previous;

    protected $last;

    public function afterSetItems()
    {
        $this->items = $this->items()->keyBy('id');

        $this->cursor = $this->items()->count() > 0 ? $this->items()->first()->id : 0;
        $this->last   = $this->items()->count() > 0 ? $this->items()->last()->id : 0;
    }

    /**
     * Return the current element
     *
     * @link http://php.net/manual/en/iterator.current.php
     * @return mixed|BPMModel Can return any type.
     * @since 5.0.0
     */
    public function current()
    {
        return $this->getIterator()->current();
    }

    /**
     * @return mixed|BPMModel
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
        if ($this->current()) {
            $this->previous = $this->current();
        }

        return $this->getIterator()->next();
    }

    public function getNext()
    {
        $this->next();

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
}