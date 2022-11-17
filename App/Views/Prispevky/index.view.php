<?php

use \App\Models\Prispevok;
/** @var Prispevok[] $data */
?>

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
    <link rel="stylesheet" href="prispevky.css" type="text/css">
</head>
<body>
<nav class="navbar navbar-expand-md">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Bazar.sk</a>
        <button class ="navbar-toggler custom-toggler" data-bs-toggle="collapse" data-bs-target="#mainNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="mainNav">
            <div class="navbar-nav">
                <a class="nav-link" href="index.html">Domov</a>
                <a class="nav-link" aria-current="page" href="index2.html">Príspevky</a>
                <a class="nav-link" href="index3.html">Info</a>
                <a class="nav-link" href="?c=prispevky&a=create">Vytvor</a>
            </div>
        </div>
    </div>
</nav>

<div class="container-fluid cont">
<?php foreach ($data as $prispevok)  {
    ?>
    <div class="row prispevok">
        <?php if ($prispevok->getNazov()) { ?>
            <a class="nadpis" href="prispevky.html"><?php echo $prispevok->getNazov() ?></a>
        <?php } ?>
        <div class="col-xxl-4">
            <?php if ($prispevok->getObrazok()) { ?>
                <img src="<?php echo $prispevok->getObrazok() ?>" class="img-fluid" alt="...">
            <?php } ?>
        </div>
        <div class="col-xxl-7">
        <?php if ($prispevok->getText()) { ?>
            <p class="text">
                <?php echo $prispevok->getText() ?>
            </p>
        </div>
        <a href="?c=prispevky&a=edit&id=<?php echo $prispevok->getIdPrispevku()?>" class="btn btn-danger">EDIT</a>
        <a href="?c=prispevky&a=delete&id=<?php echo $prispevok->getIdPrispevku()?>" class="btn btn-danger">DELETE</a>
    </div>
    <?php } ?>
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


cau;

<?php } ?>