<?php

namespace MichaelKeiluweit\ModuleFromAnotherModule\Module2;

class Cache extends Cache_parent
{
    public function action()
    {
        parent::action();
        echo ' and 2';
    }
}
