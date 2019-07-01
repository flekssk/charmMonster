<?php

namespace App\Extensions\Html;

class BootstrapForm extends Form
{
    public function select(
        $name,
        $list = [],
        $selected = null,
        array $selectAttributes = [],
        array $optionsAttributes = [],
        array $optgroupsAttributes = []
    ) {
        $selectAttributes['class'] = 'form-control';

        return parent::select(
            $name,
            $list,
            $selected,
            $selectAttributes,
            $optionsAttributes,
            $optgroupsAttributes
        );
    }


    public function input($type, $name, $value = null, $options = [])
    {
        $options['class'] = 'form-control';

        return parent::input($type, $name, $value, $options);
    }
}