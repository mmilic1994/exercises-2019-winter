<?php

namespace MoneyPenny;

// 7.
class BondCase
{
    // 16.
    protected static $cases_solved = 0;
    protected static $girls_met = 0;

    // 19.
    public static function getAvgGirlsPerCase()
    {
        return static::$girls_met / static::$cases_solved;
    }

    protected $name = null;
    protected $year = null;
    protected $enemy = null;
    // 10.
    protected $girls = [];

    // 9.
    public function __construct($year)
    {
        $this->year = $year;

        // 17.
        static::$cases_solved++;
    }

    public function setName($value)
    {
        $this->name = $value;
    }

    public function setYear($value)
    {
        $this->year = $value;
    }

    public function setEnemy($value)
    {
        $this->enemy = $value;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getYear()
    {
        return $this->year;
    }

    public function getEnemy()
    {
        return $this->enemy;
    }

    // 11.
    public function addGirl($name)
    {
        $this->girls[] = $name;

        // 18.
        static::$girls_met++;
    }
}