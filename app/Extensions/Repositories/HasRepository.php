<?php

namespace App\Extensions\Repositories;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Relations\Relation;

class HasRepository extends Relation
{
    /**
     * Set the base constraints on the relation query.
     *
     * @return void
     */
    public function addConstraints()
    {
    }

    /**
     * Set the constraints for an eager load of the relation.
     *
     * @param array $models
     *
     * @return void
     */
    public function addEagerConstraints(array $models)
    {
        dd($models);
    }

    /**
     * Initialize the relation on a set of models.
     *
     * @param array  $models
     * @param string $relation
     *
     * @return array
     */
    public function initRelation(array $models, $relation)
    {
        // TODO: Implement initRelation() method.
    }

    /**
     * Match the eagerly loaded results to their parents.
     *
     * @param array                                    $models
     * @param \Illuminate\Database\Eloquent\Collection $results
     * @param string                                   $relation
     *
     * @return array
     */
    public function match(array $models, Collection $results, $relation)
    {
        // TODO: Implement match() method.
    }

    /**
     * Get the results of the relationship.
     *
     * @return mixed
     */
    public function getResults()
    {

    }
}