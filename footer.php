<footer class="footer">
    <div class="container">
        <div class="footer__content">
            <div class="footer__column">
                <a href="/" class="footer__logo">
                    <img src="<?php echo THEME_DIR_URL . '/media/logo.png'; ?>" alt="Logo">
                </a>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Viverra nunc ante velit vitae. Est tellus vitae, nullam lobortis enim.</p>
                <div class="footer__socials">
                    <?php get_template_part('parts/socials'); ?>
                </div>
            </div>
            <div class="footer__column">
                <h3>quick link</h3>
                <nav class="footer__nav">
                    <ul>
                        <li><a href="/about">About</a></li>
                        <li><a href="/features">Features</a></li>
                        <li><a href="/screenshot">Screenshot</a></li>
                        <li><a href="/blog">Blog</a></li>
                    </ul>
                </nav>
            </div>
            <div class="footer__column footer__newsletter">
                <h3>newsletter</h3>
                <p>Subscribe our newsletter to get our latest update & news</p>
                <form id="footer-subscribe" action="#">
                    <label>
                        <input id="footer-email" type="email" placeholder="Your email address" required>
                    </label>
                    <button id="footer-submit" type="submit">
                        <svg><use xlink:href="<?php echo THEME_DIR_URL . '/media/sprite.svg#icon-send'; ?>"></use></svg>
                    </button>
                </form>
            </div>
        </div>
        <div class="footer__copyright">
            <p>
                <svg><use xlink:href="<?php echo THEME_DIR_URL . '/media/sprite.svg#icon-ad'; ?>"></use></svg>
                Copyright 2025 .Ojjomedia. All Right Reserved.
            </p>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>

</body>
</html>