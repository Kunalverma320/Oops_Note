<?php

abstract class Car{
    public $name;
   public function __construct($name)
   {
    $this->name=$name;
   }
   abstract public function intro() : string;
}

class Audi extends Car{

    public function intro(): string{
        return "this is my {$this->name}";
    }

}
class Mercedes extends Car{

    public function intro(): string{
        return "this is my {$this->name}";
    }

}

$myaudi=new Audi("audi");
echo $myaudi->intro();
echo "<br>";
$mymar=new Mercedes("marcedes");
echo $mymar->intro();







?>