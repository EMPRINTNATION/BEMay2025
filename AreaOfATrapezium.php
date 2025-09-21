<?php
$pagetitle = "Area Of A Trapezium";
    require_once("assets/header.php");
?>
<main class="container">
    <h1 class="text-secondary text-center my-3"> Area Of A Trapezium</h1>
    <form method="post" class="d-flex flex-column gap-3 p-5">
        <input type="number" name="base1" placeholder="Base 1" required class="form-control"/>
        <input type="number" name="base2" placeholder="Base 2" required class="form-control"/>
        <input type="number" name="height" placeholder="Height" required class="form-control"/>
        <input type="submit" value="Calculate Area" class="btn btn-success"/>
    </form>

        <?php
    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        $base_1 = $_POST['base1'];
        $base_2 = $_POST['base2'];
        $height = $_POST['height'];
        $Area = (1/2) * ($base_1 + $base_2) * $height;
            echo "<p>Area: $Area</p>";
    }
    ?>
</main>