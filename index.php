<?php
include "quadratic_Equation.php";
$quadraticEquation = new QuadraticEquation(1, 7, 4);
$quadraticEquation->getDiscriminant();
if ($quadraticEquation->getDiscriminant() > 0) {
    echo 'two roots : '. $quadraticEquation->getRoot1() . '<br>';
    echo $quadraticEquation->getRoot2();
} else if ($quadraticEquation->getDiscriminant() == 0) {
    echo 'root:' . $quadraticEquation->getRoot3();
} else {
    echo $quadraticEquation->getRoot4();
}
