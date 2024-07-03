
<center><h1>Overriding Inherited Methods</h1></center>

<?php

class Fruit{
    public $name;
    public $color;

    public function __construct($name,$color)
    {
        $this->name=$name;
        $this->color=$color;

    }
    public function intro()
    {
        echo "Fruit name is {$this->name} and color is {$this->color} ";
    }
}

class Cantine extends Fruit{
    public function message()
    {
        echo "store in {$this->name} Container";
    }
    public function intro()
    {
        echo "kulvinder paji ";
    }
}

$myobj=new Cantine("banana","yellow");
$myobj->intro();
$myobj->message();



?>