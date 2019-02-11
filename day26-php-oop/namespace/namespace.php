<?php

namespace codingbootcamp\day26;

class Dog
{
    public function bark()
    {
        
    }
}

// FQN: codingbootcamp\day26\create_dog
function create_dog()
{
    echo 'CREATING DOG';
}

function var_dump($something)
{
    echo 'SO you thought you were using var dump, right?';
}

$ben = new Dog;

var_dump($ben);

var_dump(Dog::class);