<?php
/**
 * 404
 */
get_header();
?>
    <main class="not-found">
        <div class="container">
            <h1><?php echo __('404: Page not found', 'appolly'); ?></h1>
            <h3><?php echo __('Take me back to', 'appolly'); ?>
                <a href="<?php echo home_url(); ?>"><?php echo get_bloginfo('name'); ?></a>
            </h3>
        </div>
    </main>
<?php
get_footer();