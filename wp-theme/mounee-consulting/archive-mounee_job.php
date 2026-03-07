<?php
/**
 * Archive Template for Job Listings
 *
 * @package Mounee_Consulting
 */

get_header();
?>

<section class="page-header jobs-header">
    <div class="container">
        <h1 class="page-title">Job Openings</h1>
        <p class="page-subtitle">Explore exciting career opportunities with our partner organizations</p>
    </div>
</section>

<section class="jobs-archive-section">
    <div class="container">
        <!-- Search and Filter Bar -->
        <div class="jobs-filter-bar">
            <form method="get" class="jobs-search-form" id="jobsFilterForm">
                <div class="filter-group">
                    <input type="text" name="s" placeholder="Search jobs..." value="<?php echo get_search_query(); ?>" class="search-input">
                </div>

                <div class="filter-group">
                    <select name="job_category" id="jobCategory" class="filter-select">
                        <option value="">All Categories</option>
                        <?php
                        $categories = get_terms( array( 'taxonomy' => 'job_category', 'hide_empty' => false ) );
                        foreach ( $categories as $category ) {
                            $selected = ( isset( $_GET['job_category'] ) && $_GET['job_category'] == $category->slug ) ? 'selected' : '';
                            echo '<option value="' . esc_attr( $category->slug ) . '" ' . $selected . '>' . esc_html( $category->name ) . '</option>';
                        }
                        ?>
                    </select>
                </div>

                <div class="filter-group">
                    <select name="job_location" id="jobLocation" class="filter-select">
                        <option value="">All Locations</option>
                        <?php
                        $locations = get_terms( array( 'taxonomy' => 'job_location', 'hide_empty' => false ) );
                        foreach ( $locations as $location ) {
                            $selected = ( isset( $_GET['job_location'] ) && $_GET['job_location'] == $location->slug ) ? 'selected' : '';
                            echo '<option value="' . esc_attr( $location->slug ) . '" ' . $selected . '>' . esc_html( $location->name ) . '</option>';
                        }
                        ?>
                    </select>
                </div>

                <div class="filter-group">
                    <select name="job_type" id="jobType" class="filter-select">
                        <option value="">All Job Types</option>
                        <option value="Full-time" <?php echo ( isset( $_GET['job_type'] ) && $_GET['job_type'] == 'Full-time' ) ? 'selected' : ''; ?>>Full-time</option>
                        <option value="Part-time" <?php echo ( isset( $_GET['job_type'] ) && $_GET['job_type'] == 'Part-time' ) ? 'selected' : ''; ?>>Part-time</option>
                        <option value="Contract" <?php echo ( isset( $_GET['job_type'] ) && $_GET['job_type'] == 'Contract' ) ? 'selected' : ''; ?>>Contract</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Filter</button>
            </form>
        </div>

        <!-- Job Listings -->
        <div class="jobs-listing-grid">
            <?php
            // Build query args
            $args = array(
                'post_type' => 'mounee_job',
                'posts_per_page' => 12,
                'paged' => get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1,
            );

            // Add taxonomy filters
            $tax_query = array();
            if ( ! empty( $_GET['job_category'] ) ) {
                $tax_query[] = array(
                    'taxonomy' => 'job_category',
                    'field' => 'slug',
                    'terms' => sanitize_text_field( $_GET['job_category'] ),
                );
            }
            if ( ! empty( $_GET['job_location'] ) ) {
                $tax_query[] = array(
                    'taxonomy' => 'job_location',
                    'field' => 'slug',
                    'terms' => sanitize_text_field( $_GET['job_location'] ),
                );
            }
            if ( count( $tax_query ) > 0 ) {
                $args['tax_query'] = $tax_query;
            }

            // Add meta query for job type
            if ( ! empty( $_GET['job_type'] ) ) {
                $args['meta_query'] = array(
                    array(
                        'key' => '_mounee_job_type',
                        'value' => sanitize_text_field( $_GET['job_type'] ),
                        'compare' => '=',
                    ),
                );
            }

            // Add search query
            if ( ! empty( $_GET['s'] ) ) {
                $args['s'] = sanitize_text_field( $_GET['s'] );
            }

            $jobs_query = new WP_Query( $args );

            if ( $jobs_query->have_posts() ) :
                while ( $jobs_query->have_posts() ) : $jobs_query->the_post();
                    $company = get_post_meta( get_the_ID(), '_mounee_job_company', true );
                    $job_type = get_post_meta( get_the_ID(), '_mounee_job_type', true );
                    $location = wp_get_post_terms( get_the_ID(), 'job_location', array( 'fields' => 'names' ) );
                    $salary = get_post_meta( get_the_ID(), '_mounee_job_salary', true );
                    $deadline = get_post_meta( get_the_ID(), '_mounee_job_deadline', true );
                    ?>
                    <div class="job-card">
                        <div class="job-header">
                            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                            <?php if ( $company ) : ?>
                                <p class="job-company"><?php echo esc_html( $company ); ?></p>
                            <?php endif; ?>
                        </div>

                        <div class="job-meta">
                            <?php if ( $job_type ) : ?>
                                <span class="job-type-badge job-type-<?php echo esc_attr( strtolower( str_replace( ' ', '-', $job_type ) ) ); ?>">
                                    <?php echo esc_html( $job_type ); ?>
                                </span>
                            <?php endif; ?>
                            <?php if ( ! empty( $location ) ) : ?>
                                <span class="job-location">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                                        <circle cx="12" cy="10" r="3"></circle>
                                    </svg>
                                    <?php echo esc_html( $location[0] ); ?>
                                </span>
                            <?php endif; ?>
                            <?php if ( $salary ) : ?>
                                <span class="job-salary">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <line x1="12" y1="1" x2="12" y2="23"></line>
                                        <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
                                    </svg>
                                    <?php echo esc_html( $salary ); ?>
                                </span>
                            <?php endif; ?>
                        </div>

                        <div class="job-excerpt">
                            <?php echo wp_trim_words( get_the_excerpt(), 25 ); ?>
                        </div>

                        <div class="job-footer">
                            <span class="job-posted">Posted <?php echo human_time_diff( get_the_time( 'U' ), current_time( 'timestamp' ) ); ?> ago</span>
                            <?php if ( $deadline ) : 
                                $deadline_timestamp = strtotime( $deadline );
                                if ( $deadline_timestamp > current_time( 'timestamp' ) ) :
                            ?>
                                <span class="job-deadline">Deadline: <?php echo date_i18n( 'M j, Y', $deadline_timestamp ); ?></span>
                            <?php 
                                endif;
                            endif; 
                            ?>
                        </div>

                        <a href="<?php the_permalink(); ?>" class="job-apply-link">View Details & Apply →</a>
                    </div>
                <?php
                endwhile;
            else :
                ?>
                <div class="no-jobs-found">
                    <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                        <circle cx="11" cy="11" r="8"></circle>
                        <path d="m21 21-4.35-4.35"></path>
                    </svg>
                    <h3>No jobs found</h3>
                    <p>Try adjusting your search filters or check back later for new opportunities.</p>
                </div>
            <?php
            endif;
            ?>
        </div>

        <!-- Pagination -->
        <?php if ( $jobs_query->max_num_pages > 1 ) : ?>
            <div class="jobs-pagination">
                <?php
                echo paginate_links( array(
                    'total' => $jobs_query->max_num_pages,
                    'current' => max( 1, get_query_var( 'paged' ) ),
                    'prev_text' => '← Previous',
                    'next_text' => 'Next →',
                ) );
                ?>
            </div>
        <?php endif; ?>

        <?php wp_reset_postdata(); ?>
    </div>
</section>

<?php
get_footer();
