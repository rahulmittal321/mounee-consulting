<?php
/**
 * The template for displaying all single posts
 *
 * @package Mounee_Consulting
 */

get_header();
?>

<div class="content-area">
    <div class="container">
        <?php
        while ( have_posts() ) :
            the_post();
            ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <header class="entry-header">
                    <h1 class="entry-title"><?php the_title(); ?></h1>

                    <div class="entry-meta">
                        <span class="posted-on">
                            <time datetime="<?php echo get_the_date( 'c' ); ?>">
                                <?php echo get_the_date(); ?>
                            </time>
                        </span>
                        <span class="byline">
                            <?php _e( 'by', 'mounee-consulting' ); ?> <?php the_author(); ?>
                        </span>
                        <?php if ( has_category() ) : ?>
                            <span class="cat-links">
                                <?php _e( 'in', 'mounee-consulting' ); ?> <?php the_category( ', ' ); ?>
                            </span>
                        <?php endif; ?>
                    </div>
                </header>

                <?php if ( has_post_thumbnail() ) : ?>
                    <div class="featured-image">
                        <?php the_post_thumbnail( 'large' ); ?>
                    </div>
                <?php endif; ?>

                <div class="entry-content">
                    <?php
                    the_content();

                    wp_link_pages( array(
                        'before' => '<div class="page-links">' . __( 'Pages:', 'mounee-consulting' ),
                        'after'  => '</div>',
                    ) );
                    ?>
                </div>

                <?php if ( has_tag() ) : ?>
                    <footer class="entry-footer">
                        <div class="tags-links">
                            <?php the_tags( '<strong>' . __( 'Tags:', 'mounee-consulting' ) . '</strong> ', ', ', '' ); ?>
                        </div>
                    </footer>
                <?php endif; ?>

                <?php
                // Post navigation
                the_post_navigation( array(
                    'prev_text' => '<span class="nav-subtitle">' . __( 'Previous:', 'mounee-consulting' ) . '</span> <span class="nav-title">%title</span>',
                    'next_text' => '<span class="nav-subtitle">' . __( 'Next:', 'mounee-consulting' ) . '</span> <span class="nav-title">%title</span>',
                ) );
                ?>

                <?php if ( comments_open() || get_comments_number() ) : ?>
                    <div class="comments-area">
                        <?php comments_template(); ?>
                    </div>
                <?php endif; ?>
            </article>
            <?php
        endwhile;
        ?>
    </div>
</div>

<?php
get_footer();
