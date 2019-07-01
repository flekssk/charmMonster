<?php

namespace App\Repositories\Contracts;

/**
 * Repository Interface
 *
 * @package App\Repositories\Contracts
 */
interface Eloquent
{
    /**
     * Return new repository instance
     *
     * @param array $attributes
     *
     * @return static
     */
    public static function newInstance(array $attributes = []);

    /**
     * @return \App\Models\Model
     */
    public static function newModelInstance();

    /**
     * Get class name of the model
     *
     * @return string ModelName::class
     */
    public static function getModelAlias();

    /**
     * Method to call the model static method
     *
     * @param $method
     * @param array $params
     * @return mixed
     */
    public static function callModelStatic($method, $params = []);
}
