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
        <div class="header__main">
            <nav class="header__nav">
                <a href="/" class="header__logo">
                    <img src="<?php echo THEME_DIR_URL . '/images/logo.png'; ?>" alt="Logo">
                </a>
                <ul class="header__nav--left">
                    <li><a href="/" class="active">Home</a></li>
                    <li><a href="/about">About</a></li>
                    <li><a href="/features">Features</a></li>
                </ul>
                <ul class="header__nav--right">
                    <li><a href="/screenshot">Screenshot</a></li>
                    <li><a href="/blog">Blog</a></li>
                    <li><a href="/download" class="header__btn">Download</a></li>
                </ul>
            </nav>
        </div>
    </div>
</header>
