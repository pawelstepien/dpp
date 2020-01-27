<?php /* Template Name: Dom_w_Swarzedzu */ ?>
<html lang="pl">
<head>
        
    <?php get_template_part( 'template-parts/analytics-scripts' ); ?>

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

    <link href="/build/app.css?version=0.8" rel="stylesheet">
    
    <title><?= wp_title() ?></title>

    <?php get_template_part( 'template-parts/favicons' ); ?>

    <?php wp_head(); ?>
</head>

<body>

    <?php get_template_part( 'template-parts/menu' ); ?>

    <main id="house-page" class="page-main">
    
        <section class="section-about-us-top">
            <picture>
                <?php get_image_sources('header-image') ?>
                <img class="about-us-top-photo" src="<?= get_field( 'header-image' )['url'] ?>"> 
            </picture>
            <div class="about-us-top-content">
                <div class="horizontal-line"></div>
                <p class="about-us-top-content-text">
                    <?= get_field( 'header-text' ) ?>
                </p>
            </div>

            <div class="about-us-top-features">
                <ul class="about-us-top-features-list list">

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
                <?php get_image_sources('download-photo') ?>
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
                    <?php get_image_sources('interior-photo_' . $i) ?>
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
            <div class="section-title-wrapper">
                <h2 class="section-title">
                    <?= get_field( 'architecture-title' ) ?>
                </h2>
            </div>

            <picture class="about-us-architecture-house">
                <?php get_image_sources( 'architecture-photo' ) ?>
                <img src="<?= get_field( 'architecture-photo' )['url'] ?>" alt="<?= get_field( 'architecture-photo' )['alt'] ?>">
            </picture>

            <div class="about-us-architecture-content">
                <div class="horizontal-line"></div>
                <p class="about-us-architecture-content-text">
                    <?= get_field( 'achitecture-text' ) ?>
                </p>
            </div>

            <div class="about-us-architecture-features">
                <ul class="about-us-architecture-features-list list">

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
                <ul class="about-us-energy-saving-features-list list">

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
                    <ul class="map-list list" id="map-list">

                        <?php 
                        for ($i = 1; $i <= 12; $i++) { 
                        $name = get_field( ('map-place-name_' . $i) );
                        $query = get_field( ('map-query_' . $i) );
                        if (!$name) { continue; }
                        ?>

                        <li class="map-list-item" <?= $query ? ' data-query="' . htmlspecialchars($query, ENT_QUOTES) . '"' : '' ?>> 
                            <?= $name ?>
                        </li>

                        <?php } ?>

                    </ul>
                </div>
                <div class="map-right">
                    <div class="mapouter">
                        <div class="gmap_canvas">
                            <iframe id="gmap_canvas" data-src="https://maps.google.com/maps?&ll=52.376222222222225,17.06522222222222&q=<?= htmlspecialchars( get_field( 'map-query_1' ), ENT_QUOTES) ?>&z=14&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-about-us-functions">
            <h2 class="section-title">
                <?= get_field( 'functions-title' ) ?>
            </h2>

            <p class="about-us-functions-paragraph">
                <?= get_field( 'functions-text' ) ?>
            </p>
                       
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css">
            <div class="slider-and-date-wrapper">
                <div class="slider-wrapper">
                    <img src="/build/media/slider-arrow_left.png" alt="Poprzednie" class="slider-arrow slider-arrow_left">
                    <img src="/build/media/slider-arrow_right.png" alt="Następne" class="slider-arrow slider-arrow_right">

                    <div class="slider-slides">

                        <?php 
                        for ($i = 1; $i <= 8; $i++) { 
                        $slide = get_field( ('slider-photo_' . $i) );
                        if (!$slide) { continue; }
                        ?>

                        <div class="slide-wrapper">
                            <div class="slide-crop">
                                <img src="<?= $slide['url'] ?>" alt="<?= $slide['alt'] ?>" class="slide-image">
                            </div>
                        </div>

                        <?php } ?>

                    </div>
                </div>
    
                <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
                        <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>

                <div class="about-us-functions-dates">
                    <div class="left">
                        <img src="<?= get_field( 'dates-icon-left' )['url'] ?>" alt="<?= get_field( 'dates-icon-left' )['alt'] ?>" class="dates-icon">
                        <span class="dates-text">
                            <?= get_field( 'dates-text-left' ); ?>

                        </span>
                    </div>
                    <div class="right">
                        <img src="<?= get_field( 'dates-icon-right' )['url'] ?>" alt="<?= get_field( 'dates-icon-right' )['alt'] ?>" class="dates-icon">
                        <span class="dates-text">
                        <?= get_field( 'dates-text-right' ); ?>
                        </span>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer class="about-us-footer">
        <h3 class="footer-title">
            <?= get_field( 'footer-title' ) ?>
            <!-- Zainteresowany? -->
        </h3>
        <p class="footer-text">
            <?= get_field( 'footer-text' ) ?>
            <!-- Napisz lub zadzwoń a umówimy się na spotkanie -->
        </p>
        <div class="footer-contact-wrapper">
            <!-- <a href="tel:7307008164" class="footer-contact-anchor"> -->
            <a href="tel:<?= get_field( 'phone' ) ?>" class="footer-contact-anchor">
                <img src="/build/media/phone-icon_footer.png" alt="Telefon" class="footer-contact-icon">
                <span class="footer-contact-text">
                    <?= format_phone( get_field( 'phone' ) ) ?>
                    <!-- +&nbsp;48&nbsp;730&nbsp;008&nbsp;164 -->
                </span>
            </a>
            <a href="mailto:test@test.test" class="footer-contact-anchor">
                <img src="/build/media/mail-icon_footer.png" alt="Telefon" class="footer-contact-icon">
                <span class="footer-contact-text">
                    <!-- biuro@dompodpoznaniem.pl -->
                    <?= get_field( 'email' ) ?>
                </span>
            </a>
        </div>
    </footer>

    <div id="photo-popup">
    <img src="" alt="" id="popup-image">
    </div>

    <?php get_template_part( 'template-parts/cookies-notification' ); ?>

    <script src="/build/app.js?version=0.8"></script>
    <?php wp_footer(); ?>
</body>
</html>