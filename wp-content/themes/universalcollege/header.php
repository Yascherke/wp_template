<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Universal College</title>

    <?php wp_head(); ?>
</head>
<body>


    <h3 class="text-secondary float-left">Universal College</h3><br>
    <p class="text-secondary float-right">
        <a class="text-secondary" href="#">Libero</a> | <a class="text-secondary" href="#">Maecenas</a> |
        <a class="text-secondary" href="#">Mauris</a> | <a class="text-secondary" href="#">Suspendisse</a>
    </p><br>

    <p class="text-secondary float-left">Free PSD Website Template</p><br>
    <p class="text-secondary float-right">Tel:
        <a class="text-secondary" href="#">xxxxx xxxxxxxxxx</a> |
        Mail: <a class="text-secondary" href="#">info@domain.com</a>
    </p><br><br>



    <nav class="navbar navbar-expand-lg border">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <?php
            wp_nav_menu(
                    array(
                        'theme_location' => 'primary',
                        'container' => false,
                        'menu_class' => 'navbar-nav mr-auto container-fluid nav-link',
                    )
            );

            get_search_form();
            ?>

        </div>

    </nav>

    <img src="<?php header_image(); ?>" height="<?php get_custom_header()->height; ?>" width="<?php get_custom_header()->width; ?>">



