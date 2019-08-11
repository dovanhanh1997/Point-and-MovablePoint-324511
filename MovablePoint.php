<?php
include_once 'Point2D.php';

class MovablePoint extends Point2D
{
    public $xSpeed = 0.0;
    public $ySpeed = 0.0;

    public function __construct($x, $y)
    {
        parent::__construct($x, $y);
    }

    public
    function moveAblePoint()
    {
        $this->x = $this->x + $this->xSpeed;
        $this->y = $this->y + $this->ySpeed;
    }

    public
    function setXYSpeed($xSp, $ySp)
    {
        $this->xSpeed = $xSp;
        $this->ySpeed = $ySp;

        array_push($this->array, $this->xSpeed);
        array_push($this->array, $this->ySpeed);
    }

    public
    function move()
    {
        return $this->moveAblePoint();
    }

    public
    function getXSpeed()
    {
        return $this->xSpeed;
    }

    public
    function getYSpeed()
    {
        return $this->ySpeed;
    }

    public
    function __toString()
    {
        return parent::__toString() . '<br>' . 'X Speed: ' . $this->getXSpeed() . '<br>' . 'Y Speed: ' . $this->getYSpeed();
    }


}