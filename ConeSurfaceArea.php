<?php
$pagetitle = "Cone Surface Area";
    require_once("assets/header.php");
?>
<main class="container">
    <h1 class="text-success text-center my-3">Cone Surface Area</h1>
    <form method="post" class="d-flex flex-column gap-3 p-5">
        <input type="number" name="radius" placeholder="Radius" required class="form-control"/>
        <input type="number" name="slant_height" placeholder="Slant Height" required class="form-control"/>
        <input type="submit" value="Calculate Cone Surface Area" class="btn btn-success"/>
    </form>

        <?php
    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        $radius = $_POST['radius'];
        $slant_height = $_POST['slant_height'];
        $Surface_Area = M_PI * $radius * ($radius + $slant_height);
            echo "<p>Cone Surface Area: $Surface_Area</p>";
    }
    ?>
</main>