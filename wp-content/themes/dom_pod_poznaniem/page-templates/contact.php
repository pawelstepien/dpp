<?php /* Template Name: Kontakt */ ?>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        .contact-link-anchor {
            color: #ffffff;
            /*
                Prevents flash of unstyled content
            */
        }
    </style>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700&display=swap&subset=latin-ext" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700&display=swap&subset=latin-ext" rel="stylesheet">
    <link href="/build/app.css?version=0.1" rel="stylesheet">
    <title>Dom Pod Poznaniem - kontakt</title>
</head>

<body>
    <header id="header">
    <div class="header-left">
            <a href="/home" class="logo-anchor">
                <picture class="logo">
                    <img src="/build/media/logo.png" alt="logo">
                </picture>
            </a>

            <nav id="navigation">
                <ul class="navigation-links-list" id="navigation-links-list">
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

            <div class="hamburger-wrapper">
                <div id="hamburger">
                    <div class="hamburger-line" id="hamburger-line_1"></div>
                    <div class="hamburger-line" id="hamburger-line_2"></div>
                    <div class="hamburger-line" id="hamburger-line_3"></div>
                </div>
            </div>
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

    <main id="contact-page" class="page-main">
        <section class="section-about-us-top">
            <picture>
                <img class="about-us-top-photo" src="/build/media/contact-header.jpg?version=0.0"> 
            </picture>
            <div class="about-us-top-content">
            <h3 class="interior-content-title">
                Kontakt
                <div class="horizontal-line horizontal-line_bellow">
            </h3>
                <p class="about-us-top-content-text">
                    Oto idealny dom dla Ciebie w standardzie Premium zlokalizowany na kameralny willowym osiedlu w Swarzędzu. Doskonałe połączenie lokalizacji, pięknej nowoczesnej architektury, oraz najwyższego standardu budownictwa.
                </p>
            </div>
        </section>
        <!-- <form action="">
        
        </form> -->
    </main>

    <script src="/build/app.js?version=0.1"></script>
</body>
</html>