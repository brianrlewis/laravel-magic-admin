<?php

namespace BrianRLewis\LaravelMagicAdmin;

class Magic extends \BrianRLewis\MagicAdmin\Magic
{
    public function __call($name, $args)
    {
        return $this->$name;
    }
}
