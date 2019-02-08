<?php

abstract class Match
{
    public $begins_at = null;
    public $score = null;
    public $nr_of_players = null;
    public $length = null;

    public function __construct($start)
    {
        $this->begins_at = $start;
    }

    public function getEstimatedEnd()
    {
        // Y-m-d H:i:s
        $beginning_timestamp = strtotime($this->begins_at);

        $ending_timestamp = $beginning_timestamp + $this->length * 60;

        return date('Y-m-d H:i:s', $ending_timestamp);
    }
}
