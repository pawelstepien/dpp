<?php /* Template Name: Home */ ?>
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
    <title>Dom Pod Poznaniem</title>
</head>

<body>

    <?php get_template_part( 'template-parts/menu' ); ?>

    <main id="home-page" class="page-main">
        <div class="home-page-house-wrapper" id="home-page-house-wrapper">
            <picture class="home-page-house" id="home-page-house">

                <?php if ( get_field( 'home-page-photo_mobile' ) ) { ?>
                <source srcset="<?= get_field( 'home-page-photo_wide' )['url']?>?version=0.0"
                media="(min-aspect-ratio: 2/1)">
                <?php } ?>

                <?php if ( get_field( 'home-page-photo_mobile' ) ) { ?>
                <source srcset="<?= get_field( 'home-page-photo_mobile' )['url']?>?version=0.0"
                media="(max-width: 600px)">
                <?php } ?>

                <img src="<?= get_field( 'home-page-photo' )['url']?>?version=0.0" alt="Dom z zewnątrz">
            </picture>
        </div>
        <div class="home-page-content">
            <div class="home-page-content-wrapper">
                <p class="home-page-title-predecessor">
                    <?= get_field( 'home-page-title-predecessor' ) ?>
                </p>
                <h1 class="title home-page-title">
                    <?= get_field( 'home-page-title' ) ?>
                    <div class="horizontal-line horizontal-line_bellow"></div>
                </h1>
                <p class="home-page-paragraph">
                    <?= get_field( 'home-page-paragraph' ) ?>
                </p>
                <a href="/dom-w-swarzedzu" title="<?= get_field( 'home-page-button-text' ) ?>">
                    <button class="button">
                        <span class="button-text">
                            <?= get_field( 'home-page-button-text' ) ?>
                        </span>
                    </button>
                </a>
            </div>
        </div>
    </main>

    <script src="/build/app.js?version=0.3"></script>
</body>
</html>
