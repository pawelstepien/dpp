<?php /* Template Name: Kontakt */ ?>
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

<body class="show-captcha-badge">

    <?php get_template_part( 'template-parts/menu' ); ?>

    <main id="contact-page" class="page-main">
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
                <?= format_phone( get_field( 'header-text' ) ) ?>
                </div>
            </div>
        </section>

        <section class="section-contact-icons">
            <div class="contact-icons-wrapper">
                <a href="tel:<?= get_field( 'phone' ) ?>" class="contact-anchor">
                    <img src="/build/media/contact-phone-icon.png?version=0.12" alt="Telefon" class="contact-icon">
                    <span class="contact-text">
                        <?= format_phone( get_field( 'phone' ) ) ?>
                    </span>
                </a>
                <a href="mailto:<?= get_field( 'email' ) ?>" class="contact-anchor">
                    <img src="/build/media/contact-mail-icon.png?version=0.12" alt="e-mail" class="contact-icon">
                    <span class="contact-text">
                        <?= get_field( 'email' ) ?>
                    </span>
                </a>
                <a href="<?= get_field( 'facebook' ) ?>" class="contact-anchor" target="_blank">
                    <img src="/build/media/contact-facebook-icon.png?version=0.12" alt="Facebook" class="contact-icon">
                    <span class="contact-text">
                        facebook
                    </span>
                </a>
                <a href="<?= get_field( 'messenger' ) ?>" class="contact-anchor" target="_blank">
                    <img src="/build/media/contact-messenger-icon.png?version=0.12" alt="Messenger" class="contact-icon">
                    <span class="contact-text">
                        messenger
                    </span>
                </a>
                <a href="//<?= get_field( 'page-url' ) ?>" class="contact-anchor" target="_blank">
                    <img src="/build/media/contact-site-icon.png?version=0.12" alt="Strona" class="contact-icon">
                    <span class="contact-text">
                        <?= get_field( 'page-url' ) ?>
                    </span>
                </a>
            </div>
        </section>
        <section class="section-contact-form">

            <?php echo do_shortcode( '[contact-form-7 id="310" title="Contact form 1"]' ); ?>
            
        </section>
    </main>

    <?php get_template_part( 'template-parts/cookies-notification' ); ?>

    <script src="/build/app.js?version=0.12"></script>
    <?php wp_footer(); ?>
</body>
</html>