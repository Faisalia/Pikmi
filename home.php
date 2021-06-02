<?= $this->extend('layout/template'); ?>


<?= $this->section('content'); ?>

<div class="row">
    <div class="col">

        <body>

            <!-- welcome section -->
            <section class="home" id="home">

                <h1>Pikmi - Pick your Dreamteam here.</h1>
                <p>Website yang tepat buat kamu yang lagi mencari kawan hebat.</p>


                <div class="shape"></div>

            </section>

            <!-- Member section -->
            <section class="Member" id="Member">
                <img src="/img/team.svg" alt="">
                <div class="content">
                    <h3>Temukan Teman yang tepat</h3>
                    <p>Kami mengerti bahwa dalam mengikuti sebuah kompetisi kita harus mempersiapkan yang terbaik, dan untuk menjadi yang terbaik, kita juga perlu membuat tim dengan komposisi terbaik, oleh karena itu, Pikmi akan membantu kamu mencari teman untuk berproses dan berjuang bersamamu.</p>
                    <p style="font-style: italic;">"Talent win games, but teamwork win competition."</p>

                </div>


            </section>

            <!-- Ide section -->
            <section class="Ide" id="Ide">


                <div class="content">
                    <h3>Berkolaborasi dan Ciptakan Ide Hebat</h3>
                    <p> Dunia saat ini dibangun dari ide-ide sederhana yang dieksekusi dengan tepat, Pikmi menyediakan platform yang tepat bagi kamu untuk mengajak teman lainnya dalam mewujudkan ide hebatmu </p>
                    <p style="font-style: italic;">"No matter what people tell you, words and ideas can chnage the world."</p>

                </div>
                <img src="/img/Ide.svg" alt="">


            </section>


    </div>
</div>


<?= $this->endSection('content'); ?>