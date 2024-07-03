<center><h1>PHP OOP - Inheritance</h1></center>
<?php

class Bus
{
    public $name;
    public $color;

    public function __construct($name,$color)
    {
        $this->name=$name;
        $this->color=$color;
    }

    public function busintro()
    {
        echo " This is my {$this->name} bus and color is {$this->color}";
    }

}


class Travel extends Bus
{
   public function message()
   {
    echo "Kulvinder Travel Company ";
   } 
}



$myobj=new Travel("Maruti","Red");
$myobj->message();
$myobj->busintro();






?>