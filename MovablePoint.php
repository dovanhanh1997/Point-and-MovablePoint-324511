<?php
include_once 'Point2D.php';

class MovablePoint extends Point2D
{
    public $xSpeed = 0.0;
    public $ySpeed = 0.0;

    public function __construct($x, $y, $xSpeed, $ySpeed)
    {
        parent::__construct($x, $y);
        $this->xSpeed = $xSpeed;
        $this->ySpeed = $ySpeed;
    }

    public function movablePoint()
    {
        $this->x += $this->xSpeed;
        $this->y += $this->ySpeed;
    }

    /**
     * @return float
     */
    public function getXSpeed()
    {
        return $this->xSpeed;
    }

    /**
     * @return float
     */
    public function getYSpeed()
    {
        return $this->ySpeed;
    }

    public function setSpeed($xSpeed, $ySpeed)
    {
        $this->xSpeed = $xSpeed;
        $this->ySpeed = $ySpeed;
        $this->array[0] = $xSpeed;
        $this->array[1] = $ySpeed;
    }

    public function getSpeed()
    {
        return $this->array;
    }

    public function toString()
    {
        return 'X Speed: ' . $this->xSpeed . '<br>' . 'Y Speed: ' . $this->ySpeed;
    }

    public function move()
    {
        return $this->movablePoint();
    }
}