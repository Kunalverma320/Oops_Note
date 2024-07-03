<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interface</title>
</head>
<body>
    <center><h1>interface</h1></center>
    <p>Multiple classes get in single class</p>
    <ul>
        <li>class in place use interface </li>
        <li>interface may not include member varisable</li>
        <li>propertise not define in interface </li>
        <li>Can not use in access modifare in interface </li>
        <li>method are declier but cannot implement </li>
    </ul>

<?php

interface parent1{
     function cal($a,$b);
}
interface parent2{
    function sub($c,$d);
}


class ChildClass implements parent1,parent2{
    public function cal($a,$b)
    {
        echo $a+$b;
        echo "<br>";
    }
    public function sub($c,$d)
    {
        echo $c-$d;
    }
}

$test=new ChildClass();
$test->cal(35,35);

$test->sub(35,35);


?>





</body>
</html>