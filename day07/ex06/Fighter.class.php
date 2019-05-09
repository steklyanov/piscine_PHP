<?php

class Fighter
{
    public $f_name;
    public function __construct($name)
    {
        $this->f_name = $name;
    }
    public function getName()
    {
        return $this->f_name;
    }
}