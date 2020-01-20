<?php /* Template Name: O_nas */ ?>
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

    <main id="about-us-page" class="page-main">
        <section class="section-contact-top">
            <picture>
                <source srcset="/build/media/actual-about-us-header_mobile.jpg?version=0.0"
                    media="(max-width: 1024px)">
                <img class="contact-top-photo" src="/build/media/actual-about-us-header.jpg?version=0.3"> 
            </picture>
            <div class="contact-top-content">
                <h1 class="section-title">
                    <?= get_the_title() ?>
                </h1>
                <p class="contact-top-content-text">
                    <?= get_field( 'header-content' ) ?>
                <!-- Dom pod Poznaniem to firma rodzinna. Nie korzystamy z usług generalnego wykonawcy, we własnym zakresie prowadzimy budowę oraz nadzór nad postępem prac, co przekłada się
                na wysoką jakość wykonania i staranny dobór używanych materiałów. -->
                </p>
            </div>
        </section>

        <section class="section-about-us-description">
            <p class="about-us-paragraph">
                <?= get_field( 'description-paragraph_1' ) ?>
                <!-- Projektując każdą inwestycję wybieramy najlepszą lokalizację z łatwym dostępem do powierzchni handlowo-usługowych, szkół i przedszkoli, terenów zielonych oraz infrastruktury rozrywkowej.  -->
            </p>
            <p class="about-us-paragraph">
                <?= get_field( 'description-paragraph_2' ) ?>
                <!-- Nasze domy charakteryzują się praktycznym układem, który jesteśmy w stanie dostosować<br>
                do indywidualnych potrzeb naszych klientów. Jednocześnie gwarantujemy najwyższą jakość materiałów z których wykonane są nasze realizacje. -->
            </p>
        </section>

        <section class="section-about-us-benefits">
            <h4 class="benefits-title">
                <?= get_field( 'benefits-title' ) ?>
                <!-- Czego możesz od nas oczekiwać i w jaki sposób to realizujemy: -->
            </h4>

            <article class="benefit-wrapper">
                <figure class="benefit-icon-wrapper">
                    <img class="benefit-icon" src="<?= get_field( 'benefit_1-icon' )['url'] ?>?version=0.3"> 
                    <!-- <img class="benefit-icon" src="/build/media/actual-about-us-phone-icon.png?version=0.3">  -->
                </figure>
                <div class="benefit-text-wrapper">
                    <h5 class="benefit-title">
                        <?= get_field( 'benefit_1-title' ) ?>
                        <!-- Stałego kontaktu na każdym etapie realizacji  -->
                    </h5>
                    <p class="benefit-paragraph">
                        <?= get_field( 'benefit_1-description' ) ?>
                        <!-- Na bieżąco informujemy naszych klientów o postępach prac na budowie. -->
                    </p>
                </div>
            </article>

            <article class="benefit-wrapper">
                <figure class="benefit-icon-wrapper">
                    <img class="benefit-icon" src="<?= get_field( 'benefit_2-icon' )['url'] ?>?version=0.3"> 
                    <!-- <img class="benefit-icon" src="/build/media/actual-about-us-decency-icon.png?version=0.3">  -->
                </figure>
                <div class="benefit-text-wrapper">
                    <h5 class="benefit-title">
                        <?= get_field( 'benefit_2-title' ) ?>
                        <!-- Rzetelności i uczciwości   -->
                    </h5>
                    <p class="benefit-paragraph">
                        <?= get_field( 'benefit_2-description' ) ?>
                        <!-- Tłumaczymy, dlaczego zastosowaliśmy dane rozwiązania. Wyjaśniamy zawiłości prawne związane z zakupem
                        domu. Podpowiadamy, na co zwracać uwagę przy porównywaniu ofert. Zależy nam na tym, żeby klienci podjęli 
                        decyzję o zakupie swojego domu z poczuciem spokoju i bezpieczeństwa. -->
                    </p>
                </div>
            </article>

            <article class="benefit-wrapper">
                <figure class="benefit-icon-wrapper">
                    <img class="benefit-icon" src="<?= get_field( 'benefit_3-icon' )['url'] ?>?version=0.3"> 
                    <!-- <img class="benefit-icon" src="/build/media/actual-about-us-advise-icon.png?version=0.3">  -->
                </figure>
                <div class="benefit-text-wrapper">
                    <h5 class="benefit-title">
                        <?= get_field( 'benefit_3-title' ) ?>
                        <!-- Doradztwa w zakresie pozyskania finansowania oraz bezpieczeństwa zakupu -->
                    </h5>
                    <p class="benefit-paragraph">
                        <?= get_field( 'benefit_3-description' ) ?>
                        <!-- Nasz doradca finansowy specjalizujący się w kredytach hipotecznych podpowie gdzie i jak otrzymać środki
                        na&nbsp;realizację marzeń o własnym domu. Decydują się na zakup, płacisz tylko za to co już zostało wybudowane. 
                        Transakcja gwarantowany jest przez umowę deweloperską oraz zabezpieczona przez rachunek powierniczy. -->
                    </p>
                </div>
            </article>

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

    <script src="/build/app.js?version=0.3"></script>
</body>
</html>