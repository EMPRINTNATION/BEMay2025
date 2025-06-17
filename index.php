<?php
    /*
    <h3>My Head</h3>
    <h3>My Neck</h3>
    <h3>My Waist</h3>
    <h1>But I Still Wan Nack</h1>
    defination of variables
    output 
    */
    var_dump("<h1>Hello World!</h1>");

    print_r("<h2>Hello World!</h2>");

    // //Datatypes
    #integer
    $num1 = 20;
    echo $num1, gettype($num1), "<br/>";
    $Num5 = 300;
    echo $Num5, gettype($Num5), "<br/>";
    
    #float 
    $num2 = 250;
    echo $num2, gettype($num2) . "<br/>";
    
    #Referencing variable
    $x = 70;
    $y = &$x;
    echo $x, "<br/>";
    echo $y . "<br/>";
    $x = 800;
    echo $x . "<br/>";
    echo $y . "<br/>";
    $x = 900;
    echo $x . "<br/>";
    echo $y . "<br/>";
    
    #Costant
    define("Num", 200);
    echo Num . "<br/>";

    const NUM2 = 300;
    echo NUM2 . "<br/>";

    #String
    $name = "Emprint";
    echo "Hello $name" . "<br/>";
    
    #Personal Exercise
    $x = 700;
    $y = 34;
    echo ($x + $y) . "<br/>";
    echo ($x - $y) . "<br/>";
    echo ($x % $y) . "<br/>";
    echo ($x / $y) . "<br/>";
    echo ($x * $y) . "<br/>";
?>

    
    

    

