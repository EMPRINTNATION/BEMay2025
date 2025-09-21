<?php
$pagetitle = "Home Page";
require_once("assets/header.php");

/*
    <h3>My Head</h3>
    <h3>My Neck</h3>
    <h3>My Waist</h3>
    <h1>But I Still Wan Nack</h1>
    defination of variables
    output 
    */
//var_dump("<h1>Hello World!</h1>");

//print_r("<h2>Hello World!</h2>");

// //Datatypes
#integer
//$num1 = 20;
//echo $num1, gettype($num1), "<br/>";
//$Num5 = 300;
//echo $Num5, gettype($Num5), "<br/>";

#float 
//$num2 = 250;
//echo $num2, gettype($num2) . "<br/>";

#Referencing variable
//$x = 70;
//$y = &$x;
//echo $x, "<br/>";
//echo $y . "<br/>";
//$x = 800;
//echo $x . "<br/>";
//echo $y . "<br/>";
//$x = 900;
//echo $x . "<br/>";
//echo $y . "<br/>";

#Costant
//define("Num", 200);
//echo Num . "<br/>";

//const NUM2 = 300;
//echo NUM2 . "<br/>";

#String
//$name = "Emprint";
//echo "Hello $name" . "<br/>";

#Personal Exercise
//$a = 700;
//$b = 34;
//echo($a + $b) . "<br/>";
//echo($a - $b) . "<br/>";
//echo($a % $b) . "<br/>";
//echo($a / $b) . "<br/>";
//echo($a * $b) . "<br/>";

#Array
#Index Array
//$students = [
//  "Brian",
//  "Chris",
//  "Mark",
//  "Rihanat",
//  "tobby",
//  "Tumike",
//];
//echo $students;


//$x = "John Doe";
//function greet() {
//    echo "Hello $X";
//}
?>


    <?php
    // if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //     $principal = $_POST["principal"];
    //     $rate = $_POST["rate"];
    //     $time = $_POST["time"];

    //     $simple_interest = ($principal * $rate * $time)/ 100;

    //     echo "<h3>Result:</h3>";        
    //     echo "Principal: $principal</br>";        
    //     echo "Rate: $rate%</br>";        
    //     echo "Time: $time years</br>";        
    //     echo "<strong>Simple Interest: $simple_interest</strong>";
    //}
    ?> 
</body>
</html>




 <?php
  //  $student = [
  //     "Brian",
  //     "Mark",
  //     "Tobby",
  //     "Rihanat",
  //     "Tumike",
  //     "chris"
  //  ];
  //  echo $student[0] . "</br>";
  //  echo $student[3] . "</br>";
  //  echo $student[5] . "</br>";

  //  var_dump($student);

  #Local Host
  //function myTest() {
  //$x = 5; //Local Host Cause The Variable is inside a function
  //echo "<p>Variable x inside a function is: $x</P>";
  //}
  //myTest();
  //echo "<p>Variable x outside a function is: $x</p>";

  #Global Host
  //  $x = 10;
  //  function myTest() {
  //   echo "<p> Variable x inside a function is: $x</p>";
  //  }
  //  myTest();
  //   echo "<p>Variable x outside a function is: $x</p>";

  #Global Keyword
  // $x = 10;
  // $y = 20;
  // function myTest() {
  //   global $x, $y;
  //   $y = $x + $y;
  // }

  // myTest();
  // echo $y;

  #GLOBALS
  // $x = 10;
  // $y = 333333333333300;
  // function myTest() {
  //   $GLOBALS['y'] = $GLOBALS['y'] + $GLOBALS['x'];
  // }

  // myTest();
  // echo $y;



  # SImple Interest Calculator
  ?>


<body>
  <h1 class="text-primary text-center">Home Page</h1>
  <form action="validator.php" method="post" class="form container border border-dark-subtle rounded-3 py-3">
    <input type="text" name="person" class="form-control">
    <input type="text" name="age">
    <input type="submit" value="Submit">
  </form>
</body>
</html>

