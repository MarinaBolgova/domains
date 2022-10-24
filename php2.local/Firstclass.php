<?php


class Firstclass
{
    public $speed=15;
    public static $document_speed=15;
    private $type;
    public $name;

    public function setName($new_name)
    {
        $this->name=$new_name;
    }
    public function getName()
    {
        print_r($this->name);
        print_r('   ');
    }


    public function setSpeed($new_speed)
    {
        $this->speed=$new_speed;
    }
    public function getSpeed()
    {
        print_r($this->speed);
        print_r('   ');
    }

    public function changeSpeed()
    {
        print_r($this->speed);
    }

    public function MoveForward($time)
    {
        return $this->speed*$time;
    }

    public function ChekFirstSpeed()
    {
        return $this->speed*$time;
    }

}