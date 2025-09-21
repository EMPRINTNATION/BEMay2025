<?php
$pagetitle = "Hypotenuse Length";
    require_once("assets/header.php");
?>
<main class="container">
    <h1 class="text-secondary text-center my-3"> Hypotenuse Length</h1>
    <form method="post" class="d-flex flex-column gap-3 p-5">
        <input type="number" name="A_Side_Of_The_Right_Triangle" placeholder="A Side Of The Right Angle Triangle" required class="form-control"/>
        <input type="number" name="B_Side_Of_The_Right_Triangle" placeholder="B Side Of The Right Angle Triangle" required class="form-control"/>
        <input type="submit" value="Calculate The Hypotenuse Length" class="btn btn-success"/>
    </form>

        <?php
    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        $a = $_POST['A_Side_Of_The_Right_Triangle'];
        $b = $_POST['B_Side_Of_The_Right_Triangle'];
        $Length =  sqrt(($a ** 2) + ($b ** 2));
            echo "<p>Hypotenuse Length: $Length</p>";
    }
    ?>
</main>