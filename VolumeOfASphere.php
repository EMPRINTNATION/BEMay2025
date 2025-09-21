<?php
$pagetitle = "Volume Of A Sphere";
    require_once("assets/header.php");
?>
<main class="container">
    <h1 class="text-success text-center my-3"> Volume Of A sphere</h1>
    <form method="post" class="d-flex flex-column gap-3 p-5">
        <input type="number" name="radius" placeholder="Radius" required class="form-control"/>
        <input type="submit" value="Calculate Volume Of A Sphere" class="btn btn-success"/>
    </form>

        <?php
    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        $radius = $_POST['radius'];
        $Volume = 4/3 * M_PI * $radius ** 3;
            echo "<p>Volume Of A Sphere: $Volume</p>";
    }
    ?>
</main>