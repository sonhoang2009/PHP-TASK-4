<?php
class Employee{
    private $man_no;
    private $name;
    protected $position;

public function __construct($man_no,$name,$position){

    $this->man_no=$man_no;
    $this->name = $name;
    $this->position=$position;
}


    public function setName($name)
    {
        $this->name = $name;
    }


    public function getName()
    {
        return $this->name;
    }


    public function setManNo($man_no)
    {
        $this->man_no = $man_no;
    }


    public function getManNo()
    {
        return $this->man_no;
    }


    public function getPosition()
    {
        return $this->position;
    }


    public function setPosition($position)
    {
        $this->position = $position;
    }
}

?>