<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
          integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <title>nav</title>
</head>
<body>

<nav>
    <ul class="nav-ul">
        <li>
            <a href="#">Univers</a>
            <ul class="sous-menu">
                <li><a href="#">Scéno</a></li>
                <li><a href="#">Décors</a></li>
                <li><a href="#">Events</a></li>
                <li><a href="#">Cinéma</a></li>
                <li><a href="#">Véhicules</a></li>
                <li><a href="#">FX</a></li>
                <li><a href="#">Animatronique</a></li>
                <li><a href="#">Make-up</a>
                    <ul class="sous-sous-menu">
                        <li><a href="#">Grimage</a></li>
                        <li><a href="#">Body Painting</a></li>
                    </ul>
                </li>
                <li><a href="#">Costumes</a></li>
                <li><a href="#">Sculpture</a></li>
                <li><a href="#">Forge</a></li>
            </ul>
        </li>
        <li>
            <a href="#">Animation</a>
            <ul class="sous-menu">
                <li><a href="#">Sous-catégorie</a></li>
                <li><a href="#">Sous-catégorie</a></li>
                <li><a href="#">Sous-catégorie</a></li>
            </ul>
        </li>
        <li><a href="./navbar.php" id="title">KAERNUNOS</a></li>
        <li><a href="#">Info & Contact</a></li>
        <li><a href="#">A propos</a></li>
    </ul>
</nav>
<!--<div class="socials">
    <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
    <a href="#"><i class="fa-brands fa-instagram"></i></a>
</div>
-->
<div id="container">
    <section class="video"></section>
    <section class="home">
        <div data-aos="zoom-in-right" data-aos-duration="1200">
            <h1>Bienvenue chez Kaernunos</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At delectus fugiat iure magni nobis nostrum
                voluptates, voluptatibus.
            </p>
        </div>
        <div class="home-img" data-aos="zoom-in-left" data-aos-duration="1200">images</div>
    </section>
    <section class="home-portfolio" data-aos="fade-up" data-aos-duration="1200">
        <div class="port-title">
            <h1>Portfolio</h1><br>
            <h2>lorem lorem lorem lorem lorem lorem lorem</h2>
        </div>
        <div class="port-creations">
            <div class="port-info">
                <h2>Nos créations</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Aliquam corporis cupiditate dolorum illo natus quae quam
                    repudiandae sed unde voluptatum?</p>
            </div>
            <div class="port-items" data-aos="zoom-in-right" data-aos-duration="1500"></div>
            <div class="port-items" data-aos="zoom-in-right" data-aos-duration="1700"></div>
            <div class="port-items" data-aos="zoom-in-left" data-aos-duration="1700"></div>
            <div class="port-items" data-aos="zoom-in-left" data-aos-duration="1500"></div>
        </div>
    </section>
    <section class="info-home">
        <div class="info-home-cards">
            <div class="info-cards" data-aos="fade-down-right" data-aos-duration="1400">
                <i class="fa-solid fa-image"></i>
                <h2>Super titre 1</h2><br>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad blanditiis dignissimos ea eaque enim
                    error facilis fugiat incidunt laborum molestias quia quo, sed vel velit veniam vero voluptatem?
                    Ducimus, quo?</p>
            </div>
            <div class="info-cards" data-aos="fade-down-left" data-aos-duration="1600">
                <i class="fa-solid fa-image"></i>
                <h2>Super titre 2</h2><br>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad blanditiis dignissimos ea eaque enim
                    error facilis fugiat incidunt laborum molestias quia quo, sed vel velit veniam vero voluptatem?
                    Ducimus, quo?</p>
            </div>
            <div class="info-cards" data-aos="fade-up-right" data-aos-duration="1800">
                <i class="fa-solid fa-image"></i>
                <h2>Super titre 3</h2><br>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad blanditiis dignissimos ea eaque enim
                    error facilis fugiat incidunt laborum molestias quia quo, sed vel velit veniam vero voluptatem?
                    Ducimus, quo?</p>
            </div>
            <div class="info-cards" data-aos="fade-up-left" data-aos-duration="1600">
                <i class="fa-solid fa-image"></i>
                <h2>Super titre 4</h2><br>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad blanditiis dignissimos ea eaque enim
                    error facilis fugiat incidunt laborum molestias quia quo, sed vel velit veniam vero voluptatem?
                    Ducimus, quo?</p>
            </div>
        </div>
    </section>
    <section class="home-contact" data-aos="fade-down" data-aos-duration="1400">
        <h1>Collaborons ensemble</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad blanditiis</p>
        <button data-aos="fade-up" data-aos-duration="1500">Contactez-nous</button>
    </section>
    <footer>
        <section>
            <div class="logo" data-aos="fade-up" data-aos-duration="1200">LOGO LEFT</div>
            <div class="footer-list">
                <ul data-aos="fade-down" data-aos-duration="1300">
                    <li>Kaernunos</li>
                    <li><a href="#">Animation</a></li>
                    <li><a href="#">L'atelier</a></li>
                </ul>
                <ul data-aos="fade-down" data-aos-duration="1500">
                    <li class="ul-title">Contact</li>
                    <li><a href="#">Commandes</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
                <ul data-aos="fade-down" data-aos-duration="1700">
                    <li class="ul-title">A propos</li>
                    <li><a href="#">L'équipe</a></li>
                    <li><a href="#">CV</a></li>
                    <li><a href="#">Presse</a></li>
                </ul>
            </div>
        </section>
        <section class="last-footer" data-aos="zoom-in" data-aos-duration="1000">
            <p>&copy; 2020 Wirefigma</p>
            <p>
                <i class="fa-brands fa-linkedin"></i>
                <i class="fa-brands fa-facebook-f"></i>
                <i class="fa-brands fa-instagram"></i>
            </p>
            <p>
                Conditions générales de vente
            </p>
        </section>
    </footer>
</div>


<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="app.js"></script>
</body>
</html>


<?php
