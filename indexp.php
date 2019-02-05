<?php
require 'p.php';

$merlin = new Personnage('Merlin');


$merlin->regenerer();

$harry = new Personnage('Harry');


var_dump($merlin);
var_dump($harry);
