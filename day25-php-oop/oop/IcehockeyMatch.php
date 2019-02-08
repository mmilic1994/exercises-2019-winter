<?php

class IcehockeyMatch extends Match
{
    public $nr_of_players = 12;
    public $length = 60;
    public $thirds = ['0:0', '0:0', '0:0'];

    public function getThirdScore($third_number)
    {
        return $this->thirds[$third_number-1];
    }
}