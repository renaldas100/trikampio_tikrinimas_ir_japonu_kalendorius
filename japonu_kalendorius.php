<?php

$m = 0;
if (isset($_POST['m'])) {
    $m = $_POST['m'];

    if($m==null){
        $m=0;
        $error="Įveskite metus";
    }


    $skirt = $m - 1983;//SUŽINOME KOKS METŲ SKIRTUMAS YRA NUO 1984m

    $ciklai = $skirt / 10;//SKAIČIUOJAME KIEK CIKLŲ PRASISUKO (1CIKLAS-10METŲ)

    $einamiM = $ciklai - (floor($ciklai));//PASIIMAME EINAMO CIKLO (dešimtmečio) METUS (nuimame sveiką skaičių)

    $rodiklis = round(($einamiM * 10), 0);// PASIDAROM RODIKLĮ

    switch ($rodiklis) {
        case 0:
            $spalva = "Juoda";
            break;
        case 1:
            $spalva = "Žalia";
            break;
        case 2:
            $spalva = "Žalia";
            break;
        case 3:
            $spalva = "Raudona";
            break;
        case 4:
            $spalva = "Raudona";
            break;
        case 5:
            $spalva = "Geltona";
            break;
        case 6:
            $spalva = "Geltona";
            break;
        case 7:
            $spalva = "Balta";
            break;
        case 8:
            $spalva = "Balta";
            break;
        case 9:
            $spalva = "Juoda";
            break;
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
    <title>Japonų kalendorius</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">Meniu</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
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
                    Metų spalva pagal japonų kalendorių
                </div>
                <div class="card-body">
                    <form method="post">
                        <div>Įveskite metus</div>
                        <input class="col-12" type="text" name="m">
                        <button class="btn btn-success mt-4 col-12" type="submit">Sužinokite metų spalvą
                        </button>
                    </form>
                </div>
            </div>
            <div class="mt-3">
                <?php if ($m != null) { ?>
                    Jūsų pasirinktų <?=$m?> metų spalva yra: <?=$spalva ?>
                <?php } ?>
                <?php if (isset($error)) { ?>
                    <?= $error ?>
                <?php } ?>
            </div>
        </div>
        <div class="col-8 text-center">
            <img src="assets/image/Jokyo-reki.jpg" height="400" alt="picture">
        </div>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
</body>
</html>

