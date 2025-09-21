<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assets/style.css">
    <title><?php echo $pagetitle ?></title>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Emprint Nation</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarScroll">
            <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="SimpleInterest.php">Simple Interest Calculator</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        CALCULATORS
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="AreaOfATrapezium.php">Area Of A Trapezium</a></li>
                        <li><a class="dropdown-item" href="ConeSurfaceArea.php">Cone Surface Area</a></li>
                        <li><a class="dropdown-item" href="CurvedLateralSurfaceArea.php">Curved Lateral Surface Area</a></li>
                        <li><a class="dropdown-item" href="HypotenuseLength.php">Hypotenuse Length</a></li>
                        <li><a class="dropdown-item" href="QuadraticEquationOfThreeGivenNumbers.php">Quadratic Equation Of Three Given Numbers</a></li>
                        <li><a class="dropdown-item" href="SimpleInterest.php">Simple Interest</a></li>
                        <li><a class="dropdown-item" href="SurfaceAreaOfACylinder.php">Surface Area Of A Cylinder</a></li>
                        <li><a class="dropdown-item" href="SlantHeightOfACone.php">Slant Height Of A Cone</a></li>
                        <li><a class="dropdown-item" href="SurfaceAreaOfASphere.php">Surface Area Of A Sphere</a></li>
                        <li><a class="dropdown-item" href="TotalSurfaceArea.php">Total Surface Area</a></li>
                        <li><a class="dropdown-item" href="VolumeOfACone.php">Volume Of A Cone</a></li>
                        <li><a class="dropdown-item" href="VolumeOfACylinder.php">Volume Of A Cylinder</a></li>
                        <li><a class="dropdown-item" href="VolumeOfAPyramid.php">Volume Of A Pyramid</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="VolumeOfASphere.php">Volume Of A Sphere</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" aria-disabled="true">Link</a>
                </li>
            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" />
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>
</body>