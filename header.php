<!DOCTYPE html>
<html <?php echo language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name') ?></title>
    <?php wp_head() ?>
    <script src="https://kit.fontawesome.com/1eb7c10cba.js" crossorigin="anonymous"></script>
</head>

<body <?php body_class() ?>>
    <nav class="userNavbar navbar navbar-expand-xl navbar-light bg-white" id="menuHeader">
        <a class="navbar-brand" href="<?php echo home_url(); ?>">
            <?php if (has_custom_logo()) {
                the_custom_logo();
            } else {
            ?> <img src="<?php echo get_template_directory_uri() . '/img/logo.png' ?>" alt="Het logo van MBO-HBO NHF">
            <?php } ?>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <?php
        wp_nav_menu(array(
            'theme_location'    => 'primary',
            'depth'             => 2,
            'container'         => 'div',
            'container_class'   => 'collapse navbar-collapse navbar-toggleable-md',
            'container_id'      => 'navbarNav',
            'menu_class'        => 'nav navbar-nav ml-auto',
            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
            'walker'            => new WP_Bootstrap_Navwalker(),
        ));
        ?>
    </nav>
    <div class="blueBorder"></div>

    <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div id="login-register-password">
                    <?php global $user_ID, $user_identity;
                    if (!$user_ID) { ?>
                        <ul class="tabs_login">
                            <li class="active_login"><a href="#tab1_login">Inloggen</a></li>
                            <li><a href="#tab3_login">Wachtwoord vergeten?</a></li>
                        </ul>

                        <div class="tab_container_login">
                            <div id="tab1_login" class="tab_content_login">
                                <?php $reset = $_GET['reset'];
                                if ($reset == true) { ?>
                                    <h3>Gelukt!</h3>
                                    <p>Bekijk je mail om je wachtwoord te wijzigen!</p>
                                <?php } else { ?>
                                    <h3>Heb je al een account?</h3>
                                    <p>Log dan hier in!</p>
                                <?php } ?>

                                <form method="post" action="<?php bloginfo('url') ?>/wp-login.php" class="wp-user-form">
                                    <div class="username">
                                        <label for="user_login"><?php _e('Username'); ?>: </label>
                                        <input type="text" name="log" value="<?php echo esc_attr(stripslashes($user_login)); ?>" size="20" id="user_login" tabindex="11" />
                                    </div>
                                    <div class="password">
                                        <label for="user_pass"><?php _e('Password'); ?>: </label>
                                        <input type="password" name="pwd" value="" size="20" id="user_pass" tabindex="12" />
                                    </div>
                                    <div class="login_fields">
                                        <div class="rememberme">
                                            <label for="rememberme">
                                                <input type="checkbox" name="rememberme" value="forever" checked="checked" id="rememberme" tabindex="13" /> Onthouden
                                            </label>
                                        </div>
                                        <?php do_action('login_form'); ?>
                                        <input type="submit" name="user-submit" value="<?php _e('Inloggen'); ?>" tabindex="14" class="user-submit" />
                                        <input type="hidden" name="redirect_to" value="<?php echo esc_attr($_SERVER['REQUEST_URI']); ?>" />
                                        <input type="hidden" name="user-cookie" value="1" />
                                    </div>
                                </form>
                            </div>

                            <div id="tab3_login" class="tab_content_login" style="display:none;">
                                <h3>Wachtwoord vergeten?</h3>
                                <p>Voor je gebruikersnaam of email adres in voor het resetten van uw wachtwoord!</p>
                                <form method="post" action="<?php echo site_url('wp-login.php?action=lostpassword', 'login_post') ?>" class="wp-user-form">
                                    <div class="username">
                                        <label for="user_login" class="hide"><?php _e('Gebruikersnaam'); ?>: </label>
                                        <input type="text" name="user_login" value="" size="20" id="user_login" tabindex="1001" />
                                    </div>
                                    <div class="login_fields">
                                        <?php do_action('login_form', 'resetpass'); ?>
                                        <input type="submit" name="user-submit" value="<?php _e('Wijzig mijn wachtwoord!'); ?>" class="user-submit" tabindex="1002" />
                                        <?php $reset = $_GET['reset'];
                                        if ($reset == true) {
                                            echo '<p>Bekijk je mail om je wachtwoord te wijzigen!</p>';
                                        } ?>
                                        <input type="hidden" name="redirect_to" value="<?php echo esc_attr($_SERVER['REQUEST_URI']); ?>?reset=true" />
                                        <input type="hidden" name="user-cookie" value="1" />
                                    </div>
                                </form>
                            </div>
                        </div>
                    <?php } else { // is logged in 
                    ?>

                        <div class="sidebox">
                        </div>
                        <a href="<?php echo wp_logout_url('index.php'); ?>">Uitloggen</a> |
                        <?php if (current_user_can('manage_options')) {
                            echo '<a href="' . admin_url() . '">' . __('Admin') . '</a>';
                        } else {
                            echo '<a href="' . admin_url() . 'profile.php">' . __('Profile') . '</a>';
                        } ?>

                        </p>

                    <?php } ?>
                </div>
            </div>
        </div>
    </div>