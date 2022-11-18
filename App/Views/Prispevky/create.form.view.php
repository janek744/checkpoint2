<body>

<div class="container-fluid cont">
    <div class="row prispevok">
        <form method="post" action="?c=prispevky&a=store">
            <?php /**  @var \App\Models\Prispevok $data */
            if ($data->getIdPrispevku()) { ?>
                <input type="hidden" name="id" value="<?php echo $data->getIdPrispevku() ?>">
            <?php } ?>
                <h1>Vytvorenie príspevku</h1>

                <div class="nadp">
                    <label>Názov
                    <input type="text" name="nazov" id="nazov" value="<?php echo $data->getNazov() ?>" style="width: 500px; margin-left: 45px">
                    </label>
                </div>

                <div class="obr">
                    <br>
                    <label>Obrázok
                    <input type="text" name="obrazok" id="obrazok" value="<?php echo $data->getObrazok() ?>" style="width: 500px; margin-left: 20px;">
                    </label>
                    <br><br>
                </div>

                <div class="tex">
                    <label">Text
                    <input type="text" name="text" id="text" value="<?php echo $data->getText() ?>" style="width: 500px; height: 100px; margin-left: 70px; vertical-align: top;">
                    </label>
                </div>

                <br><br>

                <div class="tlac">
                    <input type="submit" name="tlacitko" value="Odoslat">
                </div>

        </form>
    </div>
</div>
</body>
</html>