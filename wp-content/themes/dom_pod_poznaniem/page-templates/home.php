<?php /* Template Name: Home */ ?>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700&display=swap&subset=latin-ext" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700&display=swap&subset=latin-ext" rel="stylesheet">
    <link href="/build/app.css" rel="stylesheet">
    <title>Dom Pod Poznaniem</title>
</head>

<body>
    <header id="header">
        <div class="header-left">
            <picture class="logo">
                <img src="/build/media/logo.png" alt="logo">
            </picture>

            <nav id="navigation">
                <ul class="navigation-links-list">
                    <li class="navigation-links-list-item">
                        <a class="navigation-link-anchor" href="/home" title="Home">
                            Home
                        </a>
                    </li>
                    <li class="navigation-links-list-item">
                        <a class="navigation-link-anchor" href="/o-nas" title="O nas">
                            O&nbsp;nas
                        </a>
                    </li>
                    <li class="navigation-links-list-item">
                        <a class="navigation-link-anchor" href="/kontakt" title="Kontakt">
                            Kontakt
                        </a>
                    </li>
                </ul>
            </nav>

        </div>

        <div class="header-right">
            <div class="header-contact">
                <ul class="contact-links-list">
                    <li class="contact-links-list-item">
                        <a class="contact-link-anchor" href="#">
                            <img src="/build/media/facebook-icon_white.png" alt="" class="contact-icon">
                        </a>
                    </li>
                    <li class="contact-links-list-item">
                        <a class="contact-link-anchor" href="#" title>
                            <img src="/build/media/messenger-icon_white.png" alt="" class="contact-icon">
                        </a>
                    </li>
                    <li class="contact-links-list-item">
                        <a class="contact-link-anchor" href="#">
                            <img src="/build/media/phone-icon_white.png" alt="" class="contact-icon">
                            <span class="contact-phone-text">
                                +48&nbsp;500&nbsp;500&nbsp;500
                            </span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </header>

    <main id="home-page">
        <picture class="home-page-house">
            <img src="/build/media/home-page-house.jpg" alt="Dom z zewnątrz">
        </picture>
        <div class="home-page-content">
            <div class="home-page-content-wrapper">
                <p class="home-page-title-predecessor">
                    Aktualnie w sprzedaży
                </p>
                <h1 class="title home-page-title">
                    <b>
                        Unikatowy dom<br>
                    </b>
                    w Swarzędzu
                    <div class="horizontal-line horizontal-line_bellow"></div>
                </h1>
                <p class="home-page-paragraph">
                    Komfortowe rozwiązania funkcjonalne  w połączeniu 
                    z&nbsp;najlepszymi rozwiązaniami technicznymi i najwyższej klasy materiałami. 
                </p>
                <a href="/o-nas" title="Dowiedz się więcej">
                    <button class="button">
                        Dowiedz się więcej
                    </button>
                </a>
            </div>
        </div>
    </main>
</body>
</html>