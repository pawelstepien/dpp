    <header id="header">
        <div class="header-left">
            <a href="/home" class="logo-anchor">
                <picture class="logo">
                    <img src="/build/media/logo.png" alt="logo">
                </picture>
            </a>

            <nav id="navigation">
                <ul class="navigation-links-list" id="navigation-links-list">

                <?php foreach (wp_get_nav_menu_items( 'menu-top' ) as $item ) { ?>
                    <li class="navigation-links-list-item">
                        <a class="navigation-link-anchor" href="<?= $item->url ?>" title="<?= $item->title ?>">
                            <?= $item->title ?>
                        </a>
                    </li>
                <?php } ?>        

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