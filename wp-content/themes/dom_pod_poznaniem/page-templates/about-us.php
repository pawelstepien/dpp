<?php /* Template Name: O_nas */ ?>
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

    <link href="/build/app.css?version=0.12" rel="stylesheet">
    
    <title><?= wp_title() ?></title>

    <?php get_template_part( 'template-parts/favicons' ); ?>

    <?php wp_head(); ?>
</head>

<body>

    <?php get_template_part( 'template-parts/menu' ); ?>

    <main id="about-us-page" class="page-main">
        <section class="section-contact-top">
            <picture>
                <?php get_image_sources( 'header-image_mobile' ) ?>
                <img class="contact-top-photo" src="<?= get_field( 'header-image' )['url'] ?>"> 
            </picture>
            <div class="contact-top-content">
            <div class="section-title-wrapper">
                <h1 class="section-title">
                    <?= get_the_title() ?>
                </h1>
            </div>
                <div class="contact-top-content-text">
                    <?= get_field( 'header-content' ) ?>
                </div>
            </div>
        </section>

        <section class="section-about-us-description">
            <div class="about-us-paragraph">
                <?= get_field( 'description-paragraph_1' ) ?>
            </div>
            <div class="about-us-paragraph">
                <?= get_field( 'description-paragraph_2' ) ?>
            </div>
        </section>

        <section class="section-about-us-benefits">
            <h4 class="benefits-title">
                <?= get_field( 'benefits-title' ) ?>
            </h4>

            <article class="benefit-wrapper">
                <figure class="benefit-icon-wrapper">
                    <img class="benefit-icon" src="<?= get_field( 'benefit_1-icon' )['url'] ?>?version=0.12"> 
                </figure>
                <div class="benefit-text-wrapper">
                    <h5 class="benefit-title">
                        <?= get_field( 'benefit_1-title' ) ?>
                    </h5>
                    <p class="benefit-paragraph">
                        <?= get_field( 'benefit_1-description' ) ?>
                    </p>
                </div>
            </article>

            <article class="benefit-wrapper">
                <figure class="benefit-icon-wrapper">
                    <img class="benefit-icon" src="<?= get_field( 'benefit_2-icon' )['url'] ?>?version=0.12"> 
                </figure>
                <div class="benefit-text-wrapper">
                    <h5 class="benefit-title">
                        <?= get_field( 'benefit_2-title' ) ?>
                    </h5>
                    <p class="benefit-paragraph">
                        <?= get_field( 'benefit_2-description' ) ?>
                    </p>
                </div>
            </article>

            <article class="benefit-wrapper">
                <figure class="benefit-icon-wrapper">
                    <img class="benefit-icon" src="<?= get_field( 'benefit_3-icon' )['url'] ?>?version=0.12"> 
                </figure>
                <div class="benefit-text-wrapper">
                    <h5 class="benefit-title">
                        <?= get_field( 'benefit_3-title' ) ?>
                    </h5>
                    <p class="benefit-paragraph">
                        <?= get_field( 'benefit_3-description' ) ?>
                    </p>
                </div>
            </article>

        </section>
        
    </main>

    <footer class="about-us-footer">
        <h3 class="footer-title">
            <?= get_field( 'footer-title' ) ?>
        </h3>
        <p class="footer-text">
            <?= get_field( 'footer-text' ) ?>
        </p>
        <div class="footer-contact-wrapper">
            <a href="tel:<?= get_field( 'phone' ) ?>" class="footer-contact-anchor">
                <img src="/build/media/phone-icon_footer.png" alt="Telefon" class="footer-contact-icon">
                <span class="footer-contact-text">
                    <?= format_phone( get_field( 'phone' ) ) ?>
                </span>
            </a>
            <a href="mailto:test@test.test" class="footer-contact-anchor">
                <img src="/build/media/mail-icon_footer.png" alt="Telefon" class="footer-contact-icon">
                <span class="footer-contact-text">
                    <?= get_field( 'email' ) ?>
                </span>
            </a>
        </div>
    </footer>

    <?php get_template_part( 'template-parts/cookies-notification' ); ?>

    <script src="/build/app.js?version=0.12"></script>
    <?php wp_footer(); ?>
</body>
</html>