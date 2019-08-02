<?php


class Point2D
{
    protected $x = 0.0;
    protected $y = 0.0;
    protected $array = [];

    public function __construct($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    public function Point2D(){
        echo 'Image have X position:'.$this->x.' '.'Y position: '.$this->y;
    }

    /**
     * @return float
     */
    public function getX()
    {
        return $this->x;
    }

    /**
     * @return float
     */
    public function getY()
    {
        return $this->y;
    }

    /**
     * @param float $x
     */
    public function setX($x)
    {
        $this->x = $x;
    }

    /**
     * @param float $y
     */
    public function setY($y)
    {
        $this->y = $y;
    }

    public function setXY($x,$y){
        $this->x=$x;
        $this->y=$y;
        $this->array[0] = $x;
        $this->array[1] = $y;
    }

    public function getXY(){
        return $this->array;
    }

    public function toString(){
        return 'Position X: '.$this->x .'<br>'.'Position Y:'.$this->y;
    }



}