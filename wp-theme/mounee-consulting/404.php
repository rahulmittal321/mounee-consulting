<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package Mounee_Consulting
 */

get_header();
?>

<div class="content-area error-404-area">
    <div class="container">
        <div class="error-404-content">
            <h1 class="error-404-title">404</h1>
            <h2><?php _e( 'Oops! Page Not Found', 'mounee-consulting' ); ?></h2>
            <p><?php _e( 'It looks like the page you\'re looking for doesn\'t exist. It might have been moved or deleted.', 'mounee-consulting' ); ?></p>

            <div class="error-404-search">
                <p><?php _e( 'Try searching for what you need:', 'mounee-consulting' ); ?></p>
                <?php get_search_form(); ?>
            </div>

            <div class="error-404-links">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn btn-primary">
                    <?php _e( 'Return to Homepage', 'mounee-consulting' ); ?>
                </a>
                <a href="<?php echo esc_url( home_url( '/#contact' ) ); ?>" class="btn btn-secondary">
                    <?php _e( 'Contact Us', 'mounee-consulting' ); ?>
                </a>
            </div>
        </div>
    </div>
</div>

<?php
get_footer();
