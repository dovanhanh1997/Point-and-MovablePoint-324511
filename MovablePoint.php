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

    public function movablePoint()
    {
        $this->x += $this->xSpeed;
        $this->y += $this->ySpeed;
    }


    /**
     * @param float $xSpeed
     */
    public function setXSpeed($xSpeed)
    {
        $this->xSpeed = $xSpeed;
    }

    /**
     * @param float $ySpeed
     */
    public function setYSpeed($ySpeed)
    {
        $this->ySpeed = $ySpeed;
    }

    public function setSpeed($xSpeed, $ySpeed)
    {
        $this->xSpeed = $xSpeed;
        $this->ySpeed = $ySpeed;
        array_push($this->array,$this->xSpeed);
        array_push($this->array,$this->ySpeed);
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

    public function getSpeed(){
        return $this->array;
    }

    public function move(){
        return $this->movablePoint();
    }

    public function toString()
    {
        return parent::toString().'<br>'.'X Speed: '.$this->getXSpeed().' '.'Y Speed: '.$this->getYSpeed();
    }
}