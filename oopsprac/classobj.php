<?php
?>
<center>PHP OOP - Classes and Objects</center>
<?php
//class
class Car{
    //object
    public $name;
    public $color;


    //method

    function set_name($name)
    {
        $this->name=$name;
    }
    function get_name()
    {
        return $this->name;
    }

    function set_color($color)
    {
        $this->color=$color;
    }
    function get_color()
    {
        return $this->color;
    }

}
//instance
$car=new Car();
$car->set_name("BMW");
$car->set_color("BLACK");

// echo $car->get_name();
// echo $car->get_color();

echo "car name is ".$car->get_name()." and car color is ".$car->get_color();



?>