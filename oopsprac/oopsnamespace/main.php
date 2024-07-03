<?php

require 'first.php';
require 'second.php';

use firstperson\pro\wxy as cmd;



$opj=new cmd\person;
echo $opj->message();

echo "<br>";

$opj2=new secondperson\person;
echo $opj2->message();

?>