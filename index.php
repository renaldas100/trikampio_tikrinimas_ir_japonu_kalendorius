<?php

$kr1 = "";
$kr2 = "";
$kr3 = "";
$base = 0;
if (isset($_POST['kr1'], $_POST['kr2'], $_POST['kr3'])) {
    $kr1 = $_POST['kr1'];
    $kr2 = $_POST['kr2'];
    $kr3 = $_POST['kr3'];

    if ($kr1 != null && $kr2 != null && $kr3 != null) {
        if (($kr1 + $kr2) > $kr3 && ($kr1 + $kr3) > $kr2 && ($kr2 + $kr3) > $kr1) {
            $ats = "Trikampis egzistuoja";
            $base = 1;
        } else {
            $ats = "Toks trikampis neegzistuoja";
        }
    } else {
        $ats2 = "Suveskite visus duomenis";
    }

    $ats3 = "";
    if ($base == 1) {
        if ($kr1 == $kr2 && $kr1 == $kr3) {
            $ats3 = "Trikampis yra lygiakraštis";
        }

        if ($kr1 == $kr2 || $kr1 == $kr3 || $kr2 == $kr3) {
            $ats3 = "Trikampis yra lygiašonis";
        }

        if ($kr1 != $kr2 && $kr1 != $kr3 && $kr2 != $kr3) {
            $ats3 = "Trikampis yra įvairiakraštis";
        }

    }
}


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Trikampio tikrinimas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">Meniu</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Trikampio tikrinimas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="japonu_kalendorius.php">Japonų kalendorius</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="container">
    <div class="row mt-5">
        <div class="col-4">
            <div class="card">
                <div class="card-header">
                    Tikrinimas ar trikampis egzistuoja
                </div>
                <div class="card-body">
                    <form method="post">
                        <div>Kraštinės a ilgis</div>
                        <input class="col-12" type="text" name="kr1">
                        <div class="mt-3">Kraštinės b ilgis</div>
                        <input class="col-12" type="text" name="kr2">
                        <div class="mt-3">Kraštinės c ilgis</div>
                        <input class="col-12" type="text" name="kr3"><br>
                        <button class="btn btn-success mt-4 col-12" type="submit">Tikrinti ar egzistuoja toks trikampis
                        </button>
                    </form>
                </div>
            </div>
            <div class="mt-3">
                <?php if (isset($ats)) { ?>
                    Kraštinės a ilgis yra: <?= $kr1 ?><br>
                    Kraštinės b ilgis yra: <?= $kr2 ?><br>
                    Kraštinės c ilgis yra: <?= $kr3 ?><br>
                    <?= $ats ?><br>
                    <?= $ats3 ?>
                <?php } ?>
                <?php if (isset($ats2)) { ?>
                    <?= $ats2 ?>
                <?php } ?>
            </div>
        </div>
        <div class="col-8 text-center">
            <img src="assets/image/dcaf04a54bee495f60a75950b6f9a80f.jpg" height="300" alt="picture">
        </div>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
</body>
</html>
