<?php
$pagetitle = "Simple Interest Calculator";
    require_once("assets/header.php");
?>
<main class="container">
    <h1 class="text-primary text-center my-3">Simple Interest Calculator</h1>
    <form method="post" class="d-flex flex-column gap-3 p-5">
        <input type="number" name="principal" placeholder="Principal" required class="form-control"/>
        <input type="number" name="rate" placeholder="Rate" required class="form-control"/>
        <input type="number" name="months" placeholder="Months" required class="form-control"/>
        <input type="submit" value="Calculate Interest" class="btn btn-success"/>
    </form>

    <?php
    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        $principal = $_POST['principal'];
        $rate = $_POST['rate'];
        $months = $_POST['months'];
        $Interest = ($principal * $rate * $months) / 100;
            echo "<p>Interest: $Interest</p>";
    }
    ?>
</main>