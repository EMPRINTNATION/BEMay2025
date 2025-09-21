<?php
$pagetitle = "Slant Height Of A Cone";
    require_once("assets/header.php");
?>
<main class="container">
    <h1 class="text-success text-center my-3">Slant Height Of A Cone</h1>
    <form method="post" class="d-flex flex-column gap-3 p-5">
        <input type="number" name="radius" placeholder="Radius" required class="form-control"/>
        <input type="number" name="height" placeholder="Height" required class="form-control"/>
        <input type="submit" value="Calculate Slant Height Of A Cone" class="btn btn-success"/>
    </form>

        <?php
    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        $radius = $_POST['radius'];
        $height = $_POST['height'];
        $Slant_Height = sqrt(($radius ** 2) + ($height ** 2));
            echo "<p>Slant Height Of A Cone: $Slant_Height</p>";
    }
    ?>
</main>