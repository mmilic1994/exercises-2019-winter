<?php

namespace brucewayne\bookpreviews;

class Page
{
    public $number = null;
    public $text = null;
 
    public function __toString()
    {
        return $this->text;
    }
}