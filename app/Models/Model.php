<?php

namespace App\Models;

use App\Extensions\Repositories\HasRepository;
use Illuminate\Database\Eloquent\Model as EloquentModel;

/**
 * Class Model
 *
 * @package App\Models
 *
 * @method static find(int $id)
 */
class Model extends EloquentModel
{
    public function hasRepository($repositoryClass, $method)
    {
    }
}