<center>
    <h1>Namespace</h1>
</center>

<ul>
    <li>1.namespace helps declear same class name in diffrent folder use in single classes</li>
    <li>useing \ backword slace for puting object to retrive other folder class </li>
    <li>use using for long name give alias to convert short name</li>
</ul>


<?php
require 'first.php';
require 'second.php';
use first\jdf\hdf as firsto;

$myobj=new firsto\Product();
echo "<br>";
$myobj2=new second\Product();


?>