<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="UTF-8">
    <title>Stranka 2</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Ikony -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="prispevok.css" type="text/css">
</head>
<body>
<nav class="navbar navbar-expand-md">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Stranka 2</a>
        <button class ="navbar-toggler custom-toggler" data-bs-toggle="collapse" data-bs-target="#mainNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="mainNav">
            <div class="navbar-nav">
                <a class="nav-link" href="index.html">Domov</a>
                <a class="nav-link" aria-current="page" href="index2.html">Príspevky</a>
                <a class="nav-link" href="index3.html">Info</a>
            </div>
        </div>
    </div>
</nav>

<div class="container-fluid cont">
    <div class="row prihlasenie">
        <form method="post" action="?c=prispevky&a=store">
            <?php /**  @var \App\Models\Prispevok $data */
            if ($data->getIdPrispevku()) { ?>
            <input type="hidden" name="id" value="<?php echo $data->getIdPrispevku() ?>">
            <h1>Príspevok</h1>

            <div class="obrazok">
                <br><br>
                <label for="fobrazok">Obrázok</label>
                <input type="text" id="fobrazok" value="<?php echo $data->getObrazok() ?>" style="width: 300px; margin-left: 20px;">
                <br><br>
            </div>

            <div class="nadpis">
                <label for="fnadpis">Názov</label>
                <input type="text" id="fnadpis" name="text" value="<?php echo $data->getNazov() ?>" style="width: 300px; margin-left: 35px">
                <br><br>
            </div>

            <div class="popis">
                <label for="fpopis">Popis</label>
                <textarea type="text" id="fpopis" value="<?php echo $data->getText() ?>" style="width: 500px; height: 100px; margin-left: 40px; vertical-align: top;"></textarea>
            </div>

            <br><br>

            <div class="tlacitko">
                <button type="button" style="width: 200px;">Odoslať</button>
            </div>
            <?php } ?>
        </form>
    </div>
</div>


<div>
    <footer class="footer">
        <ul class="nav border-bottom">
            <i class="bif bi-twitter"></i><i class="bif bi-facebook"></i><i class="bif bi-youtube"></i><i class="bif bi-telephone-fill"></i>
        </ul>
        <p class="copy">&copy; 2022 Company, Inc</p>
    </footer>
</div>
</body>
</html>
