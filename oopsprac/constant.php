<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Constant</title>
</head>
<body >
<?php

class Goodbye {
    const LEAVING_MESSAGE = "Thank you for visiting W3Schools.com! ";
  }
  
  echo Goodbye::LEAVING_MESSAGE;

class Fruit{
    const LEAVING_MESSAGE="Thank you for visiting my web";
    public function message(){
        echo self::LEAVING_MESSAGE;
    }
}

$myobj=new Fruit;
$myobj->message();





?>
</body>
</html>
