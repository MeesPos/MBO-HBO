<?php
/* Template Name: After Login Page */
?>

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
    <nav class="userNavbar na-inlog__navbar navbar-expand-xl navbar-light bg-white " id="menuHeader">
        <a class="na-inlog__image" href="<?php echo home_url(); ?>">
            <?php if (has_custom_logo()) {
                the_custom_logo();
            } else {
            ?> <img src="<?php echo get_template_directory_uri() . '/img/logo.png' ?>" alt="Het logo van MBO-HBO NHF">
            <?php } ?>
        </a>

        <form class="nav__form">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Zoeken">
                <div class="input-group-append">
                    <button class="btn nav__search-icon" type="button">
                        <i class="fa fa-search"></i>
                    </button>
                </div>
            </div>
        </form>
        <div class="nav__uitlog-container">
            <p class="nav__sectorgroep">Juridisch</p>
            <a class="refs__buttons uitlog-knop__knop">Uitloggen</a>
        </div>

        <div class="navigatie__na-login--disable">
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
        </div>
    </nav>

    <div class="na-inlog__container">
        <div class="na-inlog__blue-nav">
            <div class="blue-nav__upload-div">
                <img src="<?php echo get_template_directory_uri() . '/img/icons/upload-icon.png' ?>" alt="upload icoon" class="upload-button__icon-mobile">

                <div class="upload-div__upload-button">
                    <img src="<?php echo get_template_directory_uri() . '/img/icons/upload-icon.png' ?>" alt="upload icoon" class="upload-button__icon">
                    <p class="upload-button__text">UPLOADEN</p>
                </div>
            </div>

            <div class="blue-nav__item-div" onclick="loadDocs()" id="documentModule">
                <img src="<?php echo get_template_directory_uri() . '/img/icons/documenten-icon.png' ?>" alt="Document icoon">
                <p>DOCUMENTEN</p>
            </div>

            <div class="blue-nav__item-div">
                <img src="<?php echo get_template_directory_uri() . '/img/icons/recente-icon.png' ?>" alt="Recente documenten icoon">
                <p>RECENTE DOCUMENTEN</p>
            </div>

            <div class="blue-nav__item-div">
                <img src="<?php echo get_template_directory_uri() . '/img/icons/gedeeld-icon.png' ?>" alt="Gedeeld icoon">
                <p>GEDEELD</p>
            </div>

            <div class="blue-nav__item-div" onclick="loadChat();" id="chatModule">
                <img src="<?php echo get_template_directory_uri() . '/img/icons/chat-icon.png' ?>" alt="Chat icoon">
                <p>CHAT</p>
            </div>

            <div class="blue-nav__item-div">
                <img src="<?php echo get_template_directory_uri() . '/img/icons/prullenbak-icon.png' ?>" alt="Prullenbak icoon">
                <p>PRULLENBAK</p>
            </div>
        </div>
        <div class="na-inlog__right-container" id="ajaxPage">
            <!-- AJAX -->
        </div>
    </div>
    <script>
        // Declare buttons
        let documentButtonDiv   = document.getElementById('documentModule');
        let chatButtonDiv       = document.getElementById('chatModule');
        let activeButton        = ' ';


        function loadChat() {

            // Remove old modifier, re-assign activeButton, add modifier
            activeButton.classList.remove('blue-nav__item-div--active');
            activeButton = chatButtonDiv;
            activeButton.classList.add('blue-nav__item-div--active')

            let xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("ajaxPage").innerHTML =
                        this.responseText;
                }
            };
            xhttp.open("GET", "<?php echo get_template_directory_uri() . '/chat.php' ?>", true);
            xhttp.send();
        }
        
        function loadDocs() {
            // If first load -> set activeButton and add modifier
            if (activeButton == ' ') {
                activeButton = documentButtonDiv;
                activeButton.classList.add('blue-nav__item-div--active')
            } else {
                // Remove old modifier, re-assign activeButton, add modifier
                activeButton.classList.remove('blue-nav__item-div--active');
                activeButton = documentButtonDiv;
                activeButton.classList.add('blue-nav__item-div--active')
            }

            
            let xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("ajaxPage").innerHTML = this.responseText;
                    fillEmptyFolderIcons();
                }
                
            };
            xhttp.open("GET", "<?php echo get_template_directory_uri() . '/documenten.php' ?>", true);
            xhttp.send();
        }

        function fillEmptyFolderIcons() {
            let imgFolderIcons = document.querySelectorAll('.folder-icon');
            imgFolderIcons.forEach(folderIcon => folderIcon.src = '<?php echo get_template_directory_uri() . '/img/icons/folder-icon.png' ?>');
        }

        loadDocs();


    </script>
    <?php get_footer(); ?>