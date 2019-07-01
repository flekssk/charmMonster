<?php

namespace App\Extensions\Repositories\Contracts;

interface Repository
{
    /**
     * Get all records
     *
     * @param array $columns
     *
     * @return static
     */
    public static function all($columns = ['*']);

    /**
     * @param array $where The where clause params
     * @param array $columns
     * @return Repository
     */
    public static function getWhere($where, $columns = ['*']);

    /**
     * Split records on pages
     *
     * @param int $perPage
     * @param array $columns
     *
     * @return mixed
     */
    public function paginate($perPage = 15, $columns = ['*']);
}