<?php namespace Acme\Demo\Components;

use Cms\Classes\ComponentBase;

class Todo extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'Todo Component',
            'description' => 'Command line Youtube Todo'
        ];
    }

    public function defineProperties()
    {
        return [];
    }
}
