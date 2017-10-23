<?php

include_once 'dia.php';

$robot1 = new robot('ngik ngok');
$robot2 = new robot('titut titut');

$robot1->set_suara('ngik ngok ngok');
$robot1->set_berat(30);

echo "suara robot1 =".$robot1-> get_suara().'<br>'.'dan beratnya adalah'.$robot1-> get_berat().'kg'.'<br>';

$robot2->set_suara('titut titut titut');
$robot2->set_berat(30);

echo "suara robot2 =".$robot1-> get_suara().'<br>'.'dan beratnya adalah'.$robot1-> get_berat().'kg'.'<br>';
 

?>