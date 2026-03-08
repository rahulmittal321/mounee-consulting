<?php
/**
 * The main template file
 *
 * @package Mounee_Consulting
 */

get_header();
?>

<div class="content-area">
    <div class="container">
        <div class="page-header">
            <h1 class="page-title">
                <?php
                if ( is_home() && ! is_front_page() ) :
                    single_post_title();
                elseif ( is_archive() ) :
                    the_archive_title();
                elseif ( is_search() ) :
                    printf( __( 'Search Results for: %s', 'mounee-consulting' ), get_search_query() );
                else :
                    _e( 'Blog', 'mounee-consulting' );
                endif;
                ?>
            </h1>
        </div>

        <div class="posts-wrapper">
            <?php
            if ( have_posts() ) :
                while ( have_posts() ) :
                    the_post();
                    ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class( 'post-card' ); ?>>
                        <?php if ( has_post_thumbnail() ) : ?>
                            <div class="post-thumbnail">
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_post_thumbnail( 'large' ); ?>
                                </a>
                            </div>
                        <?php endif; ?>

                        <div class="post-content">
                            <header class="entry-header">
                                <h2 class="entry-title">
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                </h2>

                                <div class="entry-meta">
                                    <span class="posted-on">
                                        <time datetime="<?php echo get_the_date( 'c' ); ?>">
                                            <?php echo get_the_date(); ?>
                                        </time>
                                    </span>
                                    <span class="byline">
                                        <?php _e( 'by', 'mounee-consulting' ); ?> <?php the_author(); ?>
                                    </span>
                                </div>
                            </header>

                            <div class="entry-summary">
                                <?php the_excerpt(); ?>
                            </div>

                            <a href="<?php the_permalink(); ?>" class="read-more">
                                <?php _e( 'Read More', 'mounee-consulting' ); ?> →
                            </a>
                        </div>
                    </article>
                    <?php
                endwhile;

                // Pagination
                the_posts_pagination( array(
                    'mid_size'  => 2,
                    'prev_text' => __( '← Previous', 'mounee-consulting' ),
                    'next_text' => __( 'Next →', 'mounee-consulting' ),
                ) );

            else :
                ?>
                <div class="no-posts">
                    <h2><?php _e( 'Nothing Found', 'mounee-consulting' ); ?></h2>
                    <p><?php _e( 'It seems we can\'t find what you\'re looking for. Perhaps searching can help.', 'mounee-consulting' ); ?></p>
                    <?php get_search_form(); ?>
                </div>
                <?php
            endif;
            ?>
        </div>
    </div>
</div>

<?php
get_footer();
