<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php wp_head(); ?>
</head>
<body>
<header class="header">
    <div class="container">
        <div class="header__intro">
            <div class="header__contacts">
                <?php get_template_part('parts/contacts'); ?>
            </div>
            <div class="header__socials">
                <?php get_template_part('parts/socials'); ?>
            </div>
        </div>
        <div class="header__main header--desktop">
            <nav class="header__nav">
                <a href="/" class="header__logo">
                    <img src="<?php echo THEME_DIR_URL . '/media/logo.png'; ?>" alt="Logo">
                </a>
                <ul class="header__nav--left">
                    <li><a href="/" class="active">Home</a></li>
                    <li><a href="/#about">About</a></li>
                    <li><a href="/#features">Features</a></li>
                </ul>
                <div class="header__nav--right">
                    <ul>
                        <li><a href="/#checkout">Screenshot</a></li>
                        <li><a href="/#recent">Blog</a></li>
                    </ul>
                    <a href="/#download" class="header__btn">Download</a>
                </div>
            </nav>
        </div>
        <!--Mobile nav-->
        <div class="header__main header--mobile">
            <div class="header__nav">
                <button id="burger" class="burger-btn" aria-label="Toggle mobile menu">
                    <span class="bar-1"></span>
                    <span class="bar-2"></span>
                    <span class="bar-3"></span>
                </button>
                <a href="/" class="header__logo">
                    <img src="<?php echo THEME_DIR_URL . '/media/logo.png'; ?>" alt="Logo">
                </a>
                <a href="/#download" class="header__btn">Download</a>
            </div>
        </div>
        <nav class="header__mob-menu header--mobile">
            <ul>
                <li><a href="/" class="active">Home</a></li>
                <li><a href="/#about">About</a></li>
                <li><a href="/#features">Features</a></li>
                <li><a href="/#checkout">Screenshot</a></li>
                <li><a href="/#recent">Blog</a></li>
            </ul>
        </nav>
        <!--Mobile nav-->
    </div>
</header>
