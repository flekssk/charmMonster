<?php

namespace App\Models\User;

use App\Models\Model;
use Illuminate\Support\Collection;

class OCSession extends Model
{
    /** @var Collection */
    protected $sessionData;

    protected $table = 'session';

    protected $primaryKey = 'session_id';

    public static function finBySessionId($sessionId)
    {
        return (new static)->newQuery()->where('session_id', '=', $sessionId)->first();
    }

    public function getDataValue($key, $default = null)
    {

    }

    /**
     * @return mixed
     */
    public function getData()
    {
        if(is_null($this->sessionData)) {
            $this->setData();
        }

        return $this->sessionData;
    }

    public function setData()
    {
        $this->sessionData = collect(json_decode($this->data));
    }

    public function isHasUserToken()
    {
       return $this->getData()->has('user_token');
    }
}