<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Abstract Class</title>
</head>
<body>
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
        public function intro() : string{
            return "Is my $this->name car";
        }
    }

    class Bmw extends Car{
        public function intro() : string{
            return "Is my $this->name car";
        }
    }

    $audiobj=new Audi("AUDI");
    echo $audiobj->intro();
    echo "<br>";

    $bmwobj=new Bmw("bmw");
    echo $bmwobj->intro();



?>
</body>
</html>