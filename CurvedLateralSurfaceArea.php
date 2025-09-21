<?php
$pagetitle = "Curved Lateral Surface Area";
    require_once("assets/header.php");
?>
<main class="container">
    <h1 class="text-secondary text-center my-3"> Curved Lateral Surface Area</h1>
    <form method="post" class="d-flex flex-column gap-3 p-5">
        <input type="number" name="radius" placeholder="Radius" required class="form-control"/>
        <input type="number" name="height" placeholder="Height" required class="form-control"/>
        <input type="submit" value="Calculate Curved Surface Area" class="btn btn-success"/>
    </form>

        <?php
    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        $radius = $_POST['radius'];
        $height = $_POST['height'];
        $Curved_Surface = 2 * M_PI * $radius * $height;
            echo "<p>Curved Surface Area: $Curved_Surface</p>";
    }
    ?>
</main>