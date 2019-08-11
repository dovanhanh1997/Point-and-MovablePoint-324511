<?php

class Point2D
{
    protected $x;
    protected $y;
    protected $array = [];

    public function __construct($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    public function getY()
    {
        return $this->y;
    }


    public function getX()
    {
        return $this->x;
    }


    public function getArray()
    {
        return $this->array;
    }


    public function setY($y)
    {
        $this->y = $y;
    }

    public function setX($x)
    {
        $this->x = $x;
    }

    public function setXY($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
        array_push($this->array, $this->x);
        array_push($this->array, $this->y);
    }

    public function getXY()
    {
        return $this->array;
    }

    public function __toString()
    {
        return 'X position: ' . $this->getX() . '<br>' . 'Y position: ' . $this->getY();
    }
}