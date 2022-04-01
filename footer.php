<?php
/**
 * look created by ThemeRuby
 * this file render footer of theme
 */ ?>
</div>
<?php // get_template_part( 'templates/section', 'footer' ); ?>

    <div class="mainAbout">
        <div class="mainAbout__wrap container">
            <h2>O PsiBufet</h2>
            <div class="content">
                <?php echo get_field('about_text', 2647); ?>
            </div>
        </div>
    </div>
    <footer id="siteFooter" class="siteFooter">
        <div class="siteFooter__wrap">
            <div class="siteFooter__logo">
                <img src="<?php echo get_template_directory_uri() . '/assets/images/psibufet_logo.svg'; ?>"/>
            </div>
            <div class="siteFooter__menu">
                <div class="linksWrap">
                    <ul class="links">
                        <li><a href="/jak-to-dziala" class="dir">Jak to działa?</a></li>
                        <li><a href="/nasze-przepisy" class="dir">Nasze przepisy</a></li>
                        <li><a href="/o-nas" class="dir">O Nas</a></li>
                        <li><a href="https://panel.psibufet.pl" class="dir">Zaloguj się</a></li>
                        <li><a href="https://zamowienie.psibufet.pl" class="dir order">Zamów</a></li>
                        <li><a href="/program-partnerski" class="dir">Zostań partnerem</a></li>
                    </ul>
                    <ul class="links">
                        
                        <li><a href="/restauracje" class="dir">Psyjazne restauracje</a></li>
                        <li><a href="/pomoc" class="dir">Pomoc</a></li>
                        <li><a href="https://psibufet.pl/blog/" class="dir">Blog</a></li>
                        <li><a href="/rasy-psow" class="dir">Rasy psów</a></li>
                        <li>
                            <a href="/pracuj-w-psibufet" class="dir">Praca</a>
                            <div class="flag">Zatrudniamy</div>
                        </li>
                    </ul>
                </div>
                <div class="info">
                    <div class="logo">
                        <img src="<?php echo get_template_directory_uri() . '/assets/images/psibufet_logo.svg'; ?>"/>
                    </div>
                    <a href="mailto:kontakt@psibufet.pl">kontakt@psibufet.pl</a>
                    <p class="hours">
                        Godziny otwarcia:<br/>
                        pon.-pt. (9:00-18:00)
                    </p>
                    <div class="social">
                        <a class="social__ig" href="https://www.instagram.com/psibufet/" target="_blank"><img src="<?php echo get_template_directory_uri() . '/assets/images/footer/ig_ico.svg'; ?>"/></a>
                        <a class="social__fb" href="https://www.facebook.com/psibufet" target="_blank"><img src="<?php echo get_template_directory_uri() . '/assets/images/footer/fb_ico.svg'; ?>"/></a>
                    </div>
                </div>
                <div class="payment">
                    <p>Metody płatności:</p>
                    <div class="payment__list">
                        <div><img src="<?php echo get_template_directory_uri() . '/assets/images/footer/mastercard.svg'; ?>"/></div>
                        <div><img src="<?php echo get_template_directory_uri() . '/assets/images/footer/visa.svg'; ?>"/></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="siteInfo">
            <div class="siteInfo__wrap">
                <div class="siteInfo__left">
                    <p class="company">Feedwell sp. z o.o. NIP: 1133005563<br />
                    ul. Sienna 64, 00-825 Warszawa</p>
                </div>
                <div class="siteInfo__right">
                    <a target="_blank" href="https://wizytowka.rzetelnafirma.pl/FKSA1C9O" rel="nofollow" class="rzetelna"><img src="<?php echo get_template_directory_uri() . '/assets/images/footer/rzetelnafirma_ico.svg'; ?>"/></a>
                    <a class="ue"><img src="<?php echo get_template_directory_uri() . '/assets/images/footer/ue_ico.svg'; ?>" /></a>
                    <a href="https://psibufet.pl/regulamin.pdf" target="_blank" class="dir">Regulamin</a>
                    <a href="https://psibufet.pl/polityka-prywatnosci.pdf" target="_blank" class="dir">Polityka prywatności</a>
                </div>
            </div>
        </div>
    </footer>
</div>
</div>
<?php wp_footer(); ?>
</body>
</html>