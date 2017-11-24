<?php
    require_once('triangle.php');
    require_once('addition.php');
    require_once('calculator.php');

    $triangleIso = new triangle(3,3,2);
    echo ("triangle 3,3,2: ");
    echo ("isocele:".$triangleIso->triangleIsocele()."\n");
    echo ("equi:".$triangleIso->triangleEqui()."\n");
    echo ("rectangle:".$triangleIso->triangleRect()."\n");
    echo ("scalene:".$triangleIso->triangleScal()."</br></br>");

    $triangleEqui = new triangle(3,3,3);
    echo ("triangle 3,3,3: ");
    echo ("isocele:".$triangleEqui->triangleIsocele()."\n");
    echo ("equi:".$triangleEqui->triangleEqui()."\n");
    echo ("rectangle:".$triangleEqui->triangleRect()."\n");
    echo ("scalene:".$triangleEqui->triangleScal()."</br></br>");

    $somme1 = new addition($triangleIso,$triangleEqui);
    echo("some des 2 triangles:</br> aire: ".$somme1->sommeFormesAire()."</br> perim:".$somme1->sommeFormesPerim()."</br></br>");

    $triangleRect = new triangle(5,3,4);
    echo ("triangle 5,3,4: ");
    echo ("isocele:".$triangleRect->triangleIsocele()."\n");
    echo ("equi:".$triangleRect->triangleEqui()."\n");
    echo ("rectangle:".$triangleRect->triangleRect()."\n");
    echo ("scalene:".$triangleRect->triangleScal()."</br></br>");

    $triangleScal = new triangle(3,3,2);
    echo ("triangle 3,3,2: ");
    echo ("isocele:".$triangleScal->triangleIsocele()."\n");
    echo ("equi:".$triangleScal->triangleEqui()."\n");
    echo ("rectangle:".$triangleScal->triangleRect()."\n");
    echo ("scalene:".$triangleScal->triangleScal()."</br></br>");

    $somme2 = new addition($triangleRect,$triangleScal);
    echo("some des 2 triangles:</br> aire: ".$somme2->sommeFormesAire()."</br> perim:".$somme2->sommeFormesPerim()."</br></br>");

    echo("3+3=".calculator::addition(3,3)."</br>");
    echo("3-3=".calculator::soustraction(3,3)."</br>");
    echo("3%3=".calculator::modulo(3,3)."</br>");
    echo("3*3=".calculator::multiplication(3,3)."</br>");
    echo("3^3=".calculator::puissance(3,3)."</br>");
?>

