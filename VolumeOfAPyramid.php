<?php
$pagetitle = "Volume Of A Pyramid";
    require_once("assets/header.php");
?>
<main class="container">
    <h1 class="text-secondary-emphasis text-center my-3"> Volume Of A Pyramid</h1>
    <form method="post" class="d-flex flex-column gap-3 p-5">
        <input type="number" name="height" placeholder="Height" required class="form-control"/>
        <input type="number" name="Base_Area" placeholder="Base Area" required class="form-control"/>
        <input type="submit" value="Calculate Volume Of A Pyramid" class="btn btn-success"/>
    </form>

        <?php
    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        $height = $_POST['height'];
        $Base_Area = $_POST['Base_Area'];
        $Volume = (1/3) * $Base_Area * $height;
            echo "<p>Volume Of A pyramid: $Volume</p>";
    }
    ?>
</main>