<?php
$pagetitle = "Surface Area Of A Sphere";
    require_once("assets/header.php");
?>
<main class="container">
    <h1 class="text-success-emphasis text-center my-3"> Surface Area Of A Sphere</h1>
    <form method="post" class="d-flex flex-column gap-3 p-5">
        <input type="number" name="radius" placeholder="Radius" required class="form-control"/>
        <input type="submit" value="Surface Area Of A Sphere" class="btn btn-success"/>
    </form>

        <?php
    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        $radius = $_POST['radius'];
        $Volume = 4 * M_PI * $radius ** 2;
            echo "<p>Surface Area Of A Sphere: $Volume</p>";
    }
    ?>
</main>