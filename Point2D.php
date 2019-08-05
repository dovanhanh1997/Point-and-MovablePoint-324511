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

    /**
     * @param mixed $x
     */
    public function setX($x)
    {
        $this->x = $x;
    }

    /**
     * @param mixed $y
     */
    public function setY($y)
    {
        $this->y = $y;
    }

    /**
     * @return mixed
     */
    public function getX()
    {
        return $this->x;
    }

    /**
     * @return mixed
     */
    public function getY()
    {
        return $this->y;
    }

    public function setXY($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
        array_push($this->array,$this->x);
        array_push($this->array,$this->y);
    }

    public function getXY(){
        return $this->array;
    }

    public function toString(){
        return 'X position: '.$this->getX().'<br>'.'Y Position: '.$this->getY();
    }

}