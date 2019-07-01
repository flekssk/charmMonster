<?php

namespace lib\App\Extensions\Repositories;

use lib\library\BPMCollection;
use lib\App\Extensions\Illuminate\Support\Facades\Schema;
use lib\library\helpers\ArrayHelper;
use lib\library\models\BaseLoggerModel;

/**
 * Class LoggerEloquentRepository
 *
 * @package lib\App\Extensions\Repositories
 *
 * @method BaseLoggerModel current()
 * @method BaseLoggerModel prev()
 */
abstract class LoggerEloquentRepository extends EloquentRepository
{
    /** @var array */
    public static $excludedFields = array();
    /** @var array */
    public static $columnTitles = array();

    public static $changeTypesAliases = array(
        'insert' => '��������',
        'update' => '��������',
        'delete' => '������',
    );

    protected static $serviceFields = array(
        'changed_by',
        'changed_date',
        'changed_type',
        'oid',
        'tid',
        'id',
    );

    protected $filtrateServiceField = true;

    public static function isServiceFields($field)
    {
        return in_array($field, self::$serviceFields);
    }

    /**
     * @return BPMCollection
     */
    public function getChanges()
    {
        $result         = array();
        $prevAttributes = array();

        if ($this->prev()) {
            $prevAttributes = $this->prev()->getAttributes();
        }

        $result = array_diff_assoc($this->current()->getAttributes(), $prevAttributes);

        $result = collect($result);

        if ($this->filtrateServiceField) {
            $result->map(function ($value, $field) use ($result) {
                if (LoggerEloquentRepository::isServiceFields($field)) {
                    $result->forget($field);
                }
            });
        }

        return $result;
    }

    public function getTableSchema()
    {
        return Schema::getColumnListing($this->table)->keyBy('positions');
    }

    public function getExcludedFields()
    {
        return array_merge(self::$excludedFields, self::$serviceFields);
    }

    public function getColumnTitle($columnName, $default = null)
    {
        if(is_null($default)) {
            $default = $columnName;
        }
        return ArrayHelper::get(self::$columnTitles, $columnName, $default);
    }
}