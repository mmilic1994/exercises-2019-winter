<?php

namespace Cooking;

class BlueberryPancake extends Pancake
{
    public function prepare()
    {
        parent::prepare();

        echo 'Preparing blueberry jam...<br>';
    }
}