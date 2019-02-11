<?php

class Animal
{
    public $hungry = true;

    public function eat()
    {
        $this->hungry = false;
    }
}