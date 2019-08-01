<?php


class MovablePoint extends Point
{
    public $xSpeed;
    public $ySpeed;

    public function __construct($x, $y , $xSpeed, $ySpeed)
    {
        parent::__construct($x, $y);
        $this->xSpeed = $xSpeed;
        $this->ySpeed = $ySpeed;
    }

    public function getXSpeed(){
        return $this->xSpeed;
    }
    public function setXSpeed($xSpeed){
        $this->xSpeed = $xSpeed;
    }
    public function getYSpeed(){
        return $this->ySpeed;
    }
    public function setYSpeed($ySpeed){
        $this->xSpeed = $ySpeed;
    }
    public function setSpeed($xSpeed,$ySpeed){
        $this->xSpeed = $xSpeed;
        $this->ySpeed = $ySpeed;
    }
    public function getSpeed(){
        $arr = [];
        array_push($arr,$this->xSpeed);
        array_push($arr,$this->ySpeed);
        return $arr;
    }
    public function toString()
    {
        parent::toString();
        echo "speed = (". $this->xSpeed.",".$this->ySpeed.")";
    }
    public function move(){
        $this->x+=$this->xSpeed;
        $this->y+=$this->ySpeed;
        return $this->x . $this->y;
    }
}