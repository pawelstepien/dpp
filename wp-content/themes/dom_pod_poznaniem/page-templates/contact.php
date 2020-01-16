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
    <link href="/build/app.css?version=0.2" rel="stylesheet">
    <title>Kontakt - Dom Pod Poznaniem</title>
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
                        <a class="navigation-link-anchor" href="/dom-w-swarzedzu" title="Dom w Swarzędzu">
                            Dom&nbsp;w&nbsp;swarzędzu
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
                        <a class="contact-link-anchor" href="https://www.facebook.com/DomPodPoznaniem" target="_blank">
                            <img src="/build/media/facebook-icon_white.png" alt="" class="contact-icon">
                        </a>
                    </li>
                    <li class="contact-links-list-item">
                        <a class="contact-link-anchor" href="https://m.me/DomPodPoznaniem" target="_blank">
                            <img src="/build/media/messenger-icon_white.png" alt="" class="contact-icon">
                        </a>
                    </li>
                    <li class="contact-links-list-item">
                        <a class="contact-link-anchor" href="tel:7307008164">
                            <img src="/build/media/phone-icon_white.png" alt="" class="contact-icon">
                            <span class="contact-phone-text">
                                +48&nbsp;730&nbsp;008&nbsp;164
                            </span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </header>

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
                    <img src="/build/media/contact-phone-icon.png" alt="Telefon" class="contact-icon">
                    <span class="contact-text">
                        +&nbsp;48&nbsp;730&nbsp;008&nbsp;164
                    </span>
                </a>
                <a href="mailto:test@test.test" class="contact-anchor">
                    <img src="/build/media/contact-mail-icon.png" alt="Telefon" class="contact-icon">
                    <span class="contact-text">
                        biuro@dompodpoznaniem.pl
                    </span>
                </a>
                <a href="www.dompodpoznaniem.pl" class="contact-anchor">
                    <img src="/build/media/contact-site-icon.png" alt="Strona" class="contact-icon">
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

    <script src="/build/app.js?version=0.2"></script>
</body>
</html>