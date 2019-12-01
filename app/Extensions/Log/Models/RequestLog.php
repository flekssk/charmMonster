<?php

namespace App\Extensions\Log\Models;

use App\Models\Model;

/**
 * Class RequestLog
 *
 * @package App\Extensions\Log\Models
 *
 * @property string $request
 * @property string $type
 */
class RequestLog extends Model
{
    protected $table = 'request_log';
}