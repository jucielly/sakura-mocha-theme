<html>

<head>
    <title>Sakura Mocha theme</title>
    
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() . './style.css'; ?>">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/11e9e029cd.js" crossorigin="anonymous"></script>
</head>

<body>

    <header class="header-container">
        <div class="theme-title">
        <img class="sakura-white" src="<?php bloginfo('template_url'); ?>/assets/sakura-white.png" alt="sakura-white">
            <h1>Sakura Mocha </h1>
        </div>
        <?php
        wp_nav_menu(array(
            'theme_location' => 'my-custom-menu',
            'container_class' => 'custom-menu-class'
        ));
        ?>
        <button class="default-button header-button">Purchase</button>
    </header>