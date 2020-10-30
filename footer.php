<?php wp_footer(); ?>

<footer>
    <div class="container-fluid" style="width: 85vw;">
        <div class="row">
            <div class="col-lg-3 col-md-4 contact">
                <h5 class="contact__titel">Contact</h5>
                <p class="contact__naam">Saskia Lammertsma</p>
                <a href="mailto:s.lammertsma@hva.nl" class="contact__email">s.lammertsma@hva.nl</a>
                <p class="contact__taak">Coördinator van het netwerk</p>
            </div>

            <div class="col-lg-3 col-md-4 contact contact__last">
                <h5 class="contact__titel">Contact</h5>
                <p class="contact__naam">Pierre Poell</p>
                <a href="mailto:pierre.poell@inholland.nl" class="contact__email">pierre.poell@inholland.nl</a>
                <p class="contact__taak">Coördinator van het netwerk</p>
            </div>

            <div class="col-lg-6 col-md-4 refs">
                <a href="#" class="refs__buttons refs__contact-button">Contact</a>
                <a href="#" class="refs__buttons">Inloggen</a>
            </div>
        </div>
    </div>
</footer>

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>
<script type="text/javascript" charset="utf-8">
    jQuery(document).ready(function() {
        jQuery(".tab_content_login").hide();
        jQuery("ul.tabs_login li:first").addClass("active_login").show();
        jQuery(".tab_content_login:first").show();
        jQuery("ul.tabs_login li").click(function() {
            jQuery("ul.tabs_login li").removeClass("active_login");
            jQuery(this).addClass("active_login");
            jQuery(".tab_content_login").hide();
            var activeTab = jQuery(this).find("a").attr("href");
            if (jQuery.browser.msie) {
                jQuery(activeTab).show();
            } else {
                jQuery(activeTab).show();
            }
            return false;
        });
    });
</script>

<script type="text/javascript">
    jQuery(document).ready(function($) {
        $('.launch-login-modal').find('a').attr('data-toggle', 'modal');
        $('.launch-login-modal').find('a').attr('data-target', '#loginModal');
    });
</script>

</body>