<?php
$pagetitle = "Quadratic Equation Of Three Given Numbers";
    require_once("assets/header.php");
?>
<main class="container">
    <h1 class="text-secondary text-center my-3"> Quadratic Equation Of Three Given Numbers</h1>
    <form method="post" class="d-flex flex-column gap-3 p-5">
        <input type="number" name="coefficient_a" placeholder="Co-efficient A" required class="form-control"/>
        <input type="number" name="coefficient_b" placeholder="Co-efficient B" required class="form-control"/>
        <input type="number" name="coefficient_c" placeholder="Co-efficient C" required class="form-control"/>
        <input type="submit" value="Calculate The Quadratic Equation Of Three Numbers" class="btn btn-success"/>
    </form>

        <?php
    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        $coefficient_a = $_POST['coefficient_a'];
        $coefficient_b = $_POST['coefficient_b'];
        $coefficient_c = $_POST['coefficient_c'];

        $Quadratic_Equation = ($coefficient_b * 2) - 4 * $coefficient_a * $coefficient_c;

        if ($Quadratic_Equation > 0) {
            $equation_1 = (-$coefficient_b + sqrt($Quadratic_Equation)) / (2 * $coefficient_a);
            $equation_2 = (-$coefficient_b - sqrt($Quadratic_Equation)) / (2 * $coefficient_a);
            echo "<p>The Equations are Real & Different: $equation_1 and $equation_2</p>";
        }elseif ($Quadratic_Equation == 0) {
            $equation = -$coefficient_b / (2 * $coefficient_a);
            echo "<p>The Equations are Real & Equal: $equation</p>";
        }else {
            $TrueEquation = -$coefficient_b / (2 * $coefficient_a);
            $UnTrueEquation = sqrt(-$Quadratic_Equation) / (2 * $coefficient_a);

            echo "<p>The Equations are complex: </p>";
            echo "<p>X = $TrueEquation + {$UnTrueEquation}, Y = $TrueEquation - {$UnTrueEquation}</p>";
        }
    }
    ?>
</main>