<?php
$pagetitle = "Surface Area Of A Cylinder";
    require_once("assets/header.php");
?>
<main class="container">
    <h1 class="text-secondary text-center my-3"> Surface Area Of A Cylinder</h1>
    <form method="post" class="d-flex flex-column gap-3 p-5">
        <input type="number" name="radius" placeholder="Radius" required class="form-control"/>
        <input type="number" name="height" placeholder="Height" required class="form-control"/>
        <input type="submit" value="Calculate Surface Area Of A Cylinder" class="btn btn-success"/>
    </form>

        <?php
    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        $radius = $_POST['radius'];
        $height = $_POST['height'];
        $Surface_Area = (2 * M_PI * $radius ** 2) + (2 * M_PI * $radius * $height);
            echo "<p>Surface Area Of The Cylinder: $Surface_Area</p>";
    }
    ?>
</main>