<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="">

    <!-- fontawesome -->
    <script src="https://kit.fontawesome.com/ffe9f14d05.js" crossorigin="anonymous"></script>
    <!-- Link to your CSS stylesheet -->
    <link rel="stylesheet" href="wp-content/themes/aitheme/style.css">
    <?php wp_head(); ?>
</head>
<body>
    <!-- https://github.com/ehsan246/p3ai -->
    <!-- https://ehsan246.github.io/p3ai/ -->
    <!-- Header Section -->
    <header>
        <nav>
            <div class="logo">
                <!-- <img src="logo.png" alt="Company Logo"> -->
                <h1><?php the_title(); ?></h1>
                <!-- if you add logo to your page -->
                <?php
                    // if(function_exists('the_custom_logo')){
                    //     //defalt 
                    //     // the_custom_logo();

                    //     //if you need to add custom style in site logo
                    //     $custom_logo_id = get_theme_mod('custom-logo');
                    //     $logo = wp_get_attachment_image_src($custom_logo_id);
                    // }
                ?>
                <img class="mb-3 mx-auto logo" src="<?php $logo ?>" alt="">

            </div>
            <div>
                <?php
                    wp_nav_menu(
                        array(
                            'menu' => 'primary',
                            'container' => '',
                            'theme_location' => 'primary',
                            'items_wrap' => '<ul id="" class="nav-ul">%3$s</ul>'
                        )
                    );
                ?>
                <!-- <ul class="nav-ul">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Solutions</a></li>
                    <li><a href="#">Industries</a></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#" class="cta-button">Contact</a></li>
                </ul> -->
                <i class="fa-solid fa-bars mobile-nav" style="color: #ffffff;"></i>
            </div>
        </nav>
        <!-- <div class="cta">
            <a href="#" class="cta-button">Get Started</a>
        </div> -->
        <!-- Hero Banner Section -->
    </header>
    <main>
        <section class="hero">
            <div>
                <h1>This is Enterprise AI.</h1>
                <p>C3 AI delivers a comprehensive Enterprise AI application development platform and a large and growing family of turnkey enterprise AI applications.</p>
                <a href="#" class="hero-button">Learn More</a>
            </div>
        </section>
    </main>