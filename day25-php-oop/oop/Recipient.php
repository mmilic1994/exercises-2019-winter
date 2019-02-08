<?php

class Recipient
{
    public $email = null;

    public function __toString()
    {
        return $this->email;
    }
}