<center><h1>Constructor</h1></center>

<!-- <p>it initialize value of object</p> -->
<!-- <p>cannot return a value</p> -->
<!-- <p>constractor name is same as class name</p> -->


<?php

class Car{
    public $name;
    public $color;

    //constructor 
    public function __construct($name,$color)
    {
        $this->name=$name;
        $this->color=$color;
    }

    public function message()
    {
        echo "car name is {$this->name} and {$this->color}";
    }

}

$myobj=new Car("hd","fjgh");
$myobj->message();


?>
