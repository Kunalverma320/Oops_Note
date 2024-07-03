<center><h1>Destroctor</h1></center>
<!-- <p>A destructor is also a special member function like a constructor. Destructor destroys the class objects created by the constructor. 
Destructor has the same name as their class name preceded by a tilde (~) symbol.
It is not possible to define more than one destructor. 
The destructor is only one way to destroy the object created by the constructor. Hence destructor can-not be overloaded.
Destructor neither requires any argument nor returns any value.
It is automatically called when an object goes out of scope. 
Destructor release memory space occupied by the objects created by the constructor.
In destructor, objects are destroyed in the reverse of an object creation.</p> -->



<?php
class Fruit {
  // Properties
  var $name;
  var $color;

  // Methods
  function __construct($name, $color) {
    $this->name = $name;
    $this->color = $color; 
  }
  function __destruct() {
    echo "The fruit is {$this->name} and the color is {$this->color}."; 
  }
}

$apple = new Fruit("Apple", "red");
?>


