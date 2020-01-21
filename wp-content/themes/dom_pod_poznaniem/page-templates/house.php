<?php /* Template Name: Dom_w_Swarzedzu */ ?>
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
    <link href="/build/app.css?version=0.3" rel="stylesheet">
    <title><?= get_the_title() ?> - Dom Pod Poznaniem</title>
</head>

<body>

    <?php get_template_part( 'template-parts/menu' ); ?>

    <main id="house-page" class="page-main">
        <section class="section-about-us-top">
            <picture>
                <img class="about-us-top-photo" src="<?= get_field( 'header-image' )['url'] ?>?version=0.0"> 
            </picture>
            <div class="about-us-top-content">
                <div class="horizontal-line"></div>
                <p class="about-us-top-content-text">
                    <?= get_field( 'header-text' ) ?>
                </p>
            </div>

            <div class="about-us-top-features">
                <ul class="about-us-top-features-list">

                    <?php 
                    for ($i = 1; $i <= 12; $i++) { 
                    $icon = get_field( ('feature-icon_' . $i) );
                    if (!$icon) { continue; }
                    ?>
                    <li class="about-us-feature">
                        <figure class="about-us-feature-figure">
                            <div class="feature-icon-wrapper">
                                <img src="<?= $icon['url'] ?>" alt="<?= $icon['alt'] ?>" class="feature-icon">
                            </div>
                            <figcaption class="feature-icon-text">
                                <?= $icon['caption'] ?>
                            </figcaption>
                        </figure>
                    </li>
                    <?php } ?>

                </ul>
            </div>
        </section>

        <section class="section-about-us-download-plan">
            <picture class="download-plan-house">
                <img src="<?= get_field( 'download-photo' )['url'] ?>" alt="<?= get_field( 'download-photo' )['alt'] ?>">
            </picture>
            <?php if (get_field( 'download-file_1' )) { ?>
            <a href="<?= get_field( 'download-file_1' )['url'] ?>" download class="download-plan-anchor">
                <button class="download-plan-button button">
                    <span class="button-text">
                        <?= get_field( 'download-button_1' ) ?>
                        <img src="<?= get_field( 'download-icon' )['url'] ?>" alt="<?= get_field( 'download-icon' )['alt'] ?>" class="download-icon">
                    </span>
                </button>
            </a>
            <?php } ?>
            <?php if (get_field( 'download-file_2' )) { ?>
            <a href="<?= get_field( 'download-file_2' )['url'] ?>" download class="download-plan-anchor">
                <button class="download-plan-button button">
                    <span class="button-text">
                        <?= get_field( 'download-button_2' ) ?>
                        <img src="<?= get_field( 'download-icon' )['url'] ?>" alt="<?= get_field( 'download-icon' )['alt'] ?>" class="download-icon">
                    </span>
                </button>
            </a>
            <?php } ?>
        </section>

        <section class="section-about-us-interior">
            <h2 class="section-title">
                <?= get_field( 'interior-title' ) ?>
            </h2>

            <?php 
            for ($i = 1; $i <= 4; $i++) { 
            $photo = get_field( ('interior-photo_' . $i) );
            if (!$photo) { continue; }
            ?>
            <figure class="about-us-interior-figure">
                <picture class="about-us-interior-photo">
                    <img src="<?= $photo['url'] ?>" alt="<?= $photo['alt'] ?>">
                </picture>

                <figcaption class="interior-content">
                    <h3 class="interior-content-title">
                        <?= $photo['caption'] ?>
                        <div class="horizontal-line horizontal-line_bellow">
                    </h3>
                    <p class="interior-content-paragraph">
                        <?= $photo['description'] ?>
                    </p>
                </figcaption>
            </figure>
            <?php } ?>

        </section>

        <section class="section-about-us-architecture">
            <h2 class="section-title">
                <?= get_field( 'architecture-title' ) ?>
            </h2>

            <picture class="about-us-architecture-house">
                <img src="<?= get_field( 'architecture-photo' )['url'] ?>" alt="<?= get_field( 'architecture-photo' )['alt'] ?>">
            </picture>

            <div class="about-us-architecture-content">
                <div class="horizontal-line"></div>
                <p class="about-us-architecture-content-text">
                    <?= get_field( 'achitecture-text' ) ?>
                </p>
            </div>

            <div class="about-us-architecture-features">
                <ul class="about-us-architecture-features-list">

                    <?php 
                    for ($i = 1; $i <= 12; $i++) { 
                    $icon = get_field( ('architecture-icon_' . $i) );
                    if (!$icon) { continue; }
                    ?>
                    <li class="about-us-feature">
                        <figure class="about-us-feature-figure">
                            <div class="feature-icon-wrapper">
                                <img src="<?= $icon['url'] ?>" alt="<?= $icon['alt'] ?>" class="feature-icon">
                            </div>
                            <figcaption class="feature-icon-text">
                                <?= $icon['caption'] ?>
                            </figcaption>
                        </figure>
                    </li>
                    <?php } ?>

                </ul>
            </div>
        </section>

        <section class="section-about-us-energy-saving">
            <h2 class="section-title">
                <?= get_field( 'energy-savings-title' ) ?>
            </h2>
            <p class="about-us-energy-saving-paragraph">
                <?= get_field( 'energy-savings-text' ) ?>
            </p>

            <div class="about-us-energy-saving-features">
                <ul class="about-us-energy-saving-features-list">

                <?php 
                    for ($i = 1; $i <= 8; $i++) { 
                    $icon = get_field( ('energy-savings-icon_' . $i) );
                    if (!$icon) { continue; }
                    ?>

                    <li class="about-us-feature">
                        <figure class="about-us-feature-figure">
                            <div class="feature-icon-wrapper">
                                <img src="<?= $icon['url'] ?>" alt="<?= $icon['alt'] ?>" class="feature-icon">
                            </div>
                            <figcaption class="feature-icon-text">
                                <?= $icon['caption'] ?>
                            </figcaption>
                        </figure>
                    </li>

                    <?php } ?>
                </ul>
            </div>
        </section>

        <section class="section-about-us-location">
            <h2 class="section-title">
                <?= get_field( 'map-title' ) ?>
            </h2>
            <p class="about-us-location-paragraph">
                <?= get_field( 'map-text' ) ?>
            </p>
            <?= get_field( 'map-place_1' ) ?>
            <div class="map-wrapper">
                <div class="map-left">
                    <ul class="map-list" id="map-list">
                        <li class="map-list-item" data-query="52°22'34.4&quot;N 17°03'54.8&quot;E">
                            Lokalizacja inwestycji
                        </li>
                        <li class="map-list-item" data-query="Szkoła Podstawowa nr 2 Zalasewo">
                            Szkoła podstawowa - <b>&nbsp;1 km</b>
                        </li>
                        <li class="map-list-item" data-query="Żłobek|Przedszkole Zalasewo">
                            Przedszkole / żłobek - <b>&nbsp;1 km</b>
                        </li>
                        <li class="map-list-item" data-query="52°22'33.0&quot;N 17°03'38.6&quot;E">
                            Las / tereny spacerowe - <b>&nbsp;300 m</b>
                        </li>
                        <li class="map-list-item" data-query="Lidl|Dino|Biedronka|Żabka Zalasewo|Swarzędz">
                            Lild / Biedronka / Dino / Żabka <b>&nbsp;1,5 km</b>
                        </li>
                        <li class="map-list-item" data-query="Portofino Pełne Smaku Pizza Swarzędz">
                            Restauracja - <b>&nbsp;1,5 km</b>
                        </li>
                        <li class="map-list-item">
                            Odległość od granicy Poznania - <b>&nbsp;0,5 km</b>
                        </li>
                        <li class="map-list-item">
                            Trzy trasy dojazdu do Poznania
                        </li>
                        <li class="map-list-item">
                            Dwuwariantowy dojazd do A2
                        </li>
                    </ul>
                </div>
                <div class="map-right">
                    <div class="mapouter">
                        <div class="gmap_canvas">
                            <iframe id="gmap_canvas" src="https://maps.google.com/maps?&ll=52.376222222222225,17.06522222222222&q=52%C2%B022'34.4%22N%2017%C2%B003'54.8%22E&z=14&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-about-us-functions">
            <h2 class="section-title">
                Funkcjonalności
            </h2>

            <p class="about-us-functions-paragraph">
                Docenisz gdy już w tym domu zamieszkasz, natomiast My pomyśleliśmy o tym na etapie projektowania domu. Przestronny salon, jadalnia i kuchnia o powierzchni 46,6 m2 umożliwiają układ w wariancie otwartym lub zamkniętym. Pokoje o kształcie zbliżonym do kwadratu pozwalają na swobodę w aranżacji Zaprojektowaliśmy pomieszczenie gospodarczo – techniczne na pralnie oraz kotłownie. W garażu wydzieliliśmy miejsce na rowery, kosiarkę, rolki lub narty Przygotowaliśmy instalacje do podłączenia systemu alarmowego, nawadniania ogrodu oraz zmiękczacza wody.
            </p>
                       
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css">
            <div class="slider-and-date-wrapper">
                <div class="slider-wrapper">
                    <img src="/build/media/slider-arrow_left.png" alt="Poprzednie" class="slider-arrow slider-arrow_left">
                    <img src="/build/media/slider-arrow_right.png" alt="Następne" class="slider-arrow slider-arrow_right">

                    <div class="slider-slides">
                        <div class="slide-wrapper">
                            <div class="slide-crop">
                                <img src="/build/media/slider_1.jpg?version=0.0" alt="" class="slide-image">
                            </div>
                        </div>
                        <div class="slide-wrapper">
                            <div class="slide-crop">
                                <img src="/build/media/slider_2.jpg?version=0.0" alt="" class="slide-image">
                            </div>
                        </div>
                        <div class="slide-wrapper">
                            <div class="slide-crop">
                                <img src="/build/media/slider_3.jpg?version=0.0" alt="" class="slide-image">
                            </div>
                        </div>
                        <div class="slide-wrapper">
                            <div class="slide-crop">
                                <img src="/build/media/slider_4.jpg?version=0.0" alt="" class="slide-image">
                            </div>
                        </div>
                        <div class="slide-wrapper">
                            <div class="slide-crop">
                                <img src="/build/media/slider_5.jpg?version=0.0" alt="" class="slide-image">
                            </div>
                        </div>
                    </div>
                </div>
    
                <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
                        <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>

                <div class="about-us-functions-dates">
                    <div class="left">
                        <img src="/build/media/play-icon.png" alt="Start" class="dates-icon">
                        <span class="dates-text">
                            Start inwestycji - Listopad 2019
                        </span>
                    </div>
                    <div class="right">
                        <img src="/build/media/key-icon.png" alt="Klucze" class="dates-icon">
                        <span class="dates-text">
                            Przekazanie kluczy - Listopad 2020
                        </span>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer class="about-us-footer">
        <h3 class="footer-title">
            Zainteresowany?
        </h3>
        <p class="footer-text">
            Napisz lub zadzwoń a umówimy się na spotkanie
        </p>
        <div class="footer-contact-wrapper">
            <a href="tel:7307008164" class="footer-contact-anchor">
                <img src="/build/media/phone-icon_footer.png" alt="Telefon" class="footer-contact-icon">
                <span class="footer-contact-text">
                    +&nbsp;48&nbsp;730&nbsp;008&nbsp;164
                </span>
            </a>
            <a href="mailto:test@test.test" class="footer-contact-anchor">
                <img src="/build/media/mail-icon_footer.png" alt="Telefon" class="footer-contact-icon">
                <span class="footer-contact-text">
                    biuro@dompodpoznaniem.pl
                </span>
            </a>
        </div>
    </footer>

    <div id="photo-popup">
    <img src="" alt="" id="popup-image">
    </div>

    <script src="/build/app.js?version=0.3"></script>
</body>
</html>