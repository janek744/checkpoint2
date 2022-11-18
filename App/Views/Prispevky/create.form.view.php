<body>

<div class="container-fluid cont">
    <div class="row prihlasenie">
        <form method="post" action="?c=prispevky&a=store">
            <?php /**  @var \App\Models\Prispevok $data */
            if ($data->getIdPrispevku()) { ?>
                <input type="hidden" name="id" value="<?php echo $data->getIdPrispevku() ?>">
            <?php } ?>
                <h1>Príspevok</h1>

                <div class="nadp">
                    <label>Názov
                    <input type="text" name="nazov" id="nazov" value="<?php echo $data->getNazov() ?>" style="width: 300px; margin-left: 35px">
                    </label>
                    <br><br>
                </div>

                <div class="nadp">
                    <br><br>
                    <label>Obrázok
                    <input type="text" name="obrazok" id="obrazok" value="<?php echo $data->getObrazok() ?>" style="width: 300px; margin-left: 20px;">
                    </label>
                    <br><br>
                </div>

                <div class="nadp">
                    <label">Text
                    <input type="text" name="text" id="text" value="<?php echo $data->getText() ?>" style="width: 500px; height: 100px; margin-left: 40px; vertical-align: top;">
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