<?php

namespace App\Extensions\Html;

use Collective\Html\FormBuilder;

class Form extends FormBuilder
{
    public function select(
        $name,
        $list = [],
        $selected = null,
        array $selectAttributes = [],
        array $optionsAttributes = [],
        array $optgroupsAttributes = []
    ) {
        return parent::select(
            $name,
            $list,
            $selected,
            $selectAttributes,
            $optionsAttributes,
            $optgroupsAttributes
        );
    }
}