<?php

class Warehouse
{
    public $name = null;
    protected $nr_of_crates = 0;
    protected $crates = [];

    public function addCrate($contents_of_crate)
    {
        $this->crates[] = $contents_of_crate;

        $this->raiseNrOfCrates();
    }

    protected function raiseNrOfCrates()
    {
        // extra super hard logic

        $this->nr_of_crates++;
    }
}