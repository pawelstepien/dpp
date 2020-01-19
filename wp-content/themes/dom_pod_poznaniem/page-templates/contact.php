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
    <link href="/build/app.css?version=0.3" rel="stylesheet">
    <title>Kontakt - Dom Pod Poznaniem</title>
</head>

<body>

    <?php get_template_part( 'template-parts/menu' ); ?>

    <main id="contact-page" class="page-main">
        <section class="section-contact-top">
            <picture>
                <source srcset="/build/media/contact-header_mobile.jpg?version=0.0"
                media="(max-width: 1024px)">
                <img class="contact-top-photo" src="/build/media/contact-header.jpg?version=0.0"> 
            </picture>
            <div class="contact-top-content">
                <h1 class="section-title">
                    Kontakt
                </h1>
                <p class="contact-top-content-text">
                Jesteśmy do Państwa dyspozycji od poniedziałku do piątku 
                w&nbsp;godzinach od 8.00 do 17.00.<br>
                Istnieje możliwość spotkania poza godzinami pracy oraz w sobotę
                po&nbsp;wcześniejszym uzgodnieniu telefonicznym.
                </p>
            </div>
        </section>

        <section class="section-contact-icons">
            <div class="contact-icons-wrapper">
                <a href="tel:7307008164" class="contact-anchor">
                    <img src="/build/media/contact-phone-icon.png?version=0.3" alt="Telefon" class="contact-icon">
                    <span class="contact-text">
                        +&nbsp;48&nbsp;730&nbsp;008&nbsp;164
                    </span>
                </a>
                <a href="mailto:test@test.test" class="contact-anchor">
                    <img src="/build/media/contact-mail-icon.png?version=0.3" alt="Telefon" class="contact-icon">
                    <span class="contact-text">
                        biuro@dompodpoznaniem.pl
                    </span>
                </a>
                <a href="https://www.facebook.com/DomPodPoznaniem" class="contact-anchor" target="_blank">
                    <img src="/build/media/contact-facebook-icon.png?version=0.3" alt="Facebook" class="contact-icon">
                    <span class="contact-text">
                        facebook
                    </span>
                </a>
                <a href="https://m.me/DomPodPoznaniem" class="contact-anchor" target="_blank">
                    <img src="/build/media/contact-messenger-icon.png?version=0.3" alt="Messenger" class="contact-icon">
                    <span class="contact-text">
                        messenger
                    </span>
                </a>
                <a href="//www.dompodpoznaniem.pl" class="contact-anchor" target="_blank">
                    <img src="/build/media/contact-site-icon.png?version=0.3" alt="Strona" class="contact-icon">
                    <span class="contact-text">
                        www.dompodpoznaniem.pl
                    </span>
                </a>
            </div>
        </section>
        <section class="section-contact-form">

            <form action="" id="contact-form">
                <div class="inputs-wrapper">
                    <div class="input-wrapper">
                        <label for="input-name" class="contact-label">
                            Imię i nazwisko*
                        </label>
                        <input type="text" name="name" id="input-name" class="contact-input" required>
                    </div>
        
                    <div class="input-wrapper">
                        <label for="input-mail" class="contact-label">
                            Adres e-mail*
                        </label>
                        <input type="email" name="mail" id="input-mail" class="contact-input" required>
                    </div>
                </div>
    
                <label for="input-message" class="contact-label">
                    Treść wiadomości*
                </label>
                <textarea name="message" id="" required id="input-message" class="contact-input contact-textarea"></textarea>

                <p class="contact-disclaimer">
                    * pola wymagane
                </p>

                <div class="consent-wrapper">
                    <label for="consent" class="checkbox-wrapper">
                        <input type="checkbox" name="consent" id="consent" class="checkbox" required>
                        <div class="checkmark"></div>
                    </label>
                    <p class="consent-text">
                        Wyrażam zgodę na przetwarzanie moich danych osobowych zgodnie z ustawą o ochronie danych osobowych w związku z realizacją zgłoszenia. Podanie danych jest dobrowolne, ale niezbędne do
                        przetworzenia zapytania. Zostałem /am poinformowany /a, że przysługuje mi prawo dostępu do swoich danych, możliwości ich poprawiania oraz żądania zaprzestania ich przetwarzania. 
                        Administratorem danych osobowych jest Dom pod Poznaniem.
                    </p>
                </div>

                <div class="form-bottom-wrapper">
                    <button type="submit" class="button submit">
                        <span class="button-text">Wyślij</span>
                    </button>
                </div>

            </form>
            

        </section>
    </main>

    <script src="/build/app.js?version=0.3"></script>
</body>
</html>