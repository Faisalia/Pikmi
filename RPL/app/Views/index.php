<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pikmi- Pick your team and get your dream </title>


    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="<?php echo base_url('css/style.css'); ?>">
</head>

<body>

    <!-- header section starts  -->
    <header>

        <div id="menu" class="fas fa-bars"></div>

        <a href="#" class="logo"><i class="logo" src="logo.png"></i>PIKMI</a>

        <nav class="navbar">
            <ul>
                <li><a class="active" href="#home">home</a></li>
                <li><a href="#IlkomerzMembers">Ilkomerz Members</a></li>
                <li><a href="#PKMList">PKM List</a></li>
                <li><a href="#Search">Contact us</a></li>
            </ul>
        </nav>

        <div id="login" class="fas fa-user-circle"></div>

    </header>

    <!-- header section ends -->

    <!-- login form  -->

    <div class="login-form">

        <form action="">
            <h3>login</h3>
            <input type="email" placeholder="username" class="box">
            <input type="password" placeholder="password" class="box">
            <p>forget password? <a href="#">click here</a></p>
            <p>don't have an account? <a href="#">register now</a></p>
            <input type="submit" class="btn" value="login">
            <i class="fas fa-times"></i>
        </form>

    </div>

    <!-- home section starts  -->

    <section class="home" id="home">

        <h1>Pikmi - Pick your Dreamteam here.</h1>
        <p>Website yang tepat buat kamu yang lagi mencari kawan hebat.</p>
        <a href="#"><button class="btn">Ayo Mulai</button></a>

        <div class="shape"></div>

    </section>

    <!-- home section ends -->

    <!-- about section starts  -->

    <section class="IlkomerzMembers" id="IlkomerzMembers">

        <div class="sidebar">
            <div class="sidebar__top">
                <img src="https://images.unsplash.com/photo-1579546929518-9e396f3cc809?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MXwxMjA3fDB8MXxhbGx8fHx8fHx8fA&ixlib=rb-1.2.1&q=80&w=1080" alt="" />
                <img src="<?php echo base_url('image/hack.jpg'); ?>"> </i>
                <h2>" " </h2>
                <h2>Pro Hacker</h2>
            </div>

            <div class="sidebar__stats">
                <div class="sidebar__stat">
                    <p>email</p>
                    <p class="sidebar__statNumber">xxxxxx@gmail.com</p>
                </div>
                <div class="sidebar__stat">
                    <p>kontak</p>
                    <p class="sidebar__statNumber">08989-xxx</p>
                </div>
            </div>

            <div class="sidebar__bottom">
                <p>Skills</p>
                <div class="sidebar__recentItem">
                    <span class="sidebar__hash">#</span>
                    <p>reactjs</p>
                </div>
                <div class="sidebar__recentItem">
                    <span class="sidebar__hash">#</span>
                    <p>programming</p>
                </div>
                <div class="sidebar__recentItem">
                    <span class="sidebar__hash">#</span>
                    <p>softwareengineering</p>
                </div>
                <div class="sidebar__recentItem">
                    <span class="sidebar__hash">#</span>
                    <p>design</p>
                </div>
                <div class="sidebar__recentItem">
                    <span class="sidebar__hash">#</span>
                    <p>developer</p>
                </div>
            </div>
        </div>

        <div class="content">
            <h3>Temukan Teman yang tepat</h3>
            <p>Kami mengerti bahwa dalam mengikuti sebuah kompetisi kita harus mempersiapkan yang terbaik, dan untuk menjadi yang terbaik, kita juga perlu membuat tim dengan komposisi terbaik, oleh karena itu, Pikmi akan membantu kamu mencari teman untuk berproses dan berjuang bersamamu.</p>
            <p>"Talent win the games, but teamwork win competition."</p>
            <a href="#"><button class="btn">Cari sekarang</button></a>
        </div>

    </section>

    <!-- about section ends -->

    <!-- course section starts  -->

    <section class="PKMList" id="PKMList">

        <h1 class="heading">PKM Ideas available</h1>

        <div class="box-container">

            <div class="box">
                <img src="<?php echo base_url('image/mesin.jpg'); ?>" alt="">
                <h3 class="price"><i class="far fa-check-circle"></i></h3>
                <div class="content">
                    <div class="Publisher">
                        <p>Published by : Bang jago</p>
                    </div>
                    <a href="#" class="title">Mesin waktu dengan daun jeruk</a>
                    <p>Kami butuh anak ilkom yang bisa bikin AI buat jalanin mesin waktu, dan aplikasinya. </p>
                    <div class="info">
                        <h3> <i class="far fa-user-circle"></i> 1 person needed </h3>
                        <h3> <i class="far fa-calendar-alt"></i> 6 months to go </h3>

                    </div>
                </div>
            </div>

            <div class="box">
                <img src="<?php echo base_url('image/mesin.jpg'); ?>" alt="">
                <h3 class="price"><i class="far fa-check-circle"></i></h3>
                <div class="content">
                    <div class="Publisher">
                        <p>Published by : Bang jago</p>
                    </div>
                    <a href="#" class="title">Mesin waktu dengan daun jeruk</a>
                    <p>Kami butuh anak ilkom yang bisa bikin AI buat jalanin mesin waktu, dan aplikasinya. </p>
                    <div class="info">
                        <h3> <i class="far fa-user-circle"></i> 1 person needed </h3>
                        <h3> <i class="far fa-calendar-alt"></i> 6 months to go </h3>

                    </div>
                </div>
            </div>

            <<div class="box">
                <img src="<?php echo base_url('image/mesin.jpg'); ?>" alt="">
                <h3 class="price"><i class="far fa-check-circle"></i></h3>
                <div class="content">
                    <div class="Publisher">
                        <p>Published by : Bang jago</p>
                    </div>
                    <a href="#" class="title">Mesin waktu dengan daun jeruk</a>
                    <p>Kami butuh anak ilkom yang bisa bikin AI buat jalanin mesin waktu, dan aplikasinya. </p>
                    <div class="info">
                        <h3> <i class="far fa-user-circle"></i> 1 person needed </h3>
                        <h3> <i class="far fa-calendar-alt"></i> 6 months to go </h3>

                    </div>
                </div>
        </div>

        <<div class="box">
            <img src="<?php echo base_url('image/mesin.jpg'); ?>" alt="">
            <h3 class="price"><i class="far fa-check-circle"></i></h3>
            <div class="content">
                <div class="Publisher">
                    <p>Published by : Bang jago</p>
                </div>
                <a href="#" class="title">Mesin waktu dengan daun jeruk</a>
                <p>Kami butuh anak ilkom yang bisa bikin AI buat jalanin mesin waktu, dan aplikasinya. </p>
                <div class="info">
                    <h3> <i class="far fa-user-circle"></i> 1 person needed </h3>
                    <h3> <i class="far fa-calendar-alt"></i> 6 months to go </h3>

                </div>
            </div>
            </div>

            <div class="box">
                <img src="<?php echo base_url('image/mesin.jpg'); ?>" alt="">
                <h3 class="price"><i class="far fa-check-circle"></i></h3>
                <div class="content">
                    <div class="Publisher">
                        <p>Published by : Bang jago</p>
                    </div>
                    <a href="#" class="title">Mesin waktu dengan daun jeruk</a>
                    <p>Kami butuh anak ilkom yang bisa bikin AI buat jalanin mesin waktu, dan aplikasinya. </p>
                    <div class="info">
                        <h3> <i class="far fa-user-circle"></i> 1 person needed </h3>
                        <h3> <i class="far fa-calendar-alt"></i> 6 months to go </h3>

                    </div>
                </div>
            </div>

            <div class="box">
                <img src="<?php echo base_url('image/mesin.jpg'); ?>" alt="">
                <h3 class="price"><i class="far fa-check-circle"></i></h3>
                <div class="content">
                    <div class="Publisher">
                        <p>Published by : Bang jago</p>
                    </div>
                    <a href="#" class="title">Mesin waktu dengan daun jeruk</a>
                    <p>Kami butuh anak ilkom yang bisa bikin AI buat jalanin mesin waktu, dan aplikasinya. </p>
                    <div class="info">
                        <h3> <i class="far fa-user-circle"></i> 1 person needed </h3>
                        <h3> <i class="far fa-calendar-alt"></i> 6 months to go </h3>

                    </div>
                </div>
            </div>

            </div>

    </section>

    <!-- course section ends -->

    <!-- teacher section starts  -->


    <!-- teacher section ends -->

    <!-- contact section starts  -->

    <section class="Search" id="Search">

        <h1 class="heading">contact us</h1>

        <div class="row">

            <form action="">
                <input type="text" placeholder="full name" class="box">
                <input type="email" placeholder="your email" class="box">
                <input type="password" placeholder="your password" class="box">
                <input type="number" placeholder="your number" class="box">
                <textarea name="" id="" cols="30" rows="10" class="box address" placeholder="your address"></textarea>
                <input type="submit" class="btn" value="send now">
            </form>

            <div class="image">
                <img src="<?php echo base_url('image/contact-img.png.jpg'); ?>" alt="">
            </div>

        </div>

    </section>

    <!-- contact section ends -->

    <!-- footer section starts  -->

    <div class="footer">

        <div class="box-container">

            <div class="box">
                <h3>branch locations</h3>
                <a href="#">Dramaga</a>
                <a href="#">Jakarta</a>
                <a href="#">Bandung</a>
                <a href="#">Tegal</a>
            </div>

            <div class="box">
                <h3>quick links</h3>
                <a href="#">home</a>
                <a href="#">Ilkomerz Members</a>
                <a href="#">PKM List</a>
                <a href="#">Profile</a>
                <a href="#">Search</a>
            </div>

            <div class="box">
                <h3>contact info</h3>
                <p> <i class="fas fa-map-marker-alt"></i> Bogor,Dramaga,16661 </p>
                <p> <i class="fas fa-envelope"></i> pikmi@gmail.com </p>
                <p> <i class="fas fa-phone"></i> +123-456-7890 </p>
            </div>

        </div>

        <h1 class="credit">created by <a href="#">Pikmi Team</a> all rights reserved. </h1>

    </div>

    <!-- footer section ends -->





















    <!-- jquery cdn link  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- custom js file link  -->
    <script src="<?php echo base_url('javascript/script.js'); ?>"></script>

</body>

</html>