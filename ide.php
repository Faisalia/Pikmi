<?= $this->extend('layout/template'); ?>



<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">

            <body>
                <h1>Ide PKM</h1>
                <?php foreach ($listIde as $l) : ?>
                    <ul>
                        <li><?= $l['teknologi']; ?></li>
                        <li><?= $l['wirausaha']; ?></li>
                        <li><?= $l['penelitian']; ?></li>
                    </ul>

                    <<?php endforeach; ?> </body>

        </div>
    </div>



</div>
<?= $this->endSection('content'); ?>