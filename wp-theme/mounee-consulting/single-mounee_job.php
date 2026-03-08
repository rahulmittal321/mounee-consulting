<?php
/**
 * Single Job Listing Template
 *
 * @package Mounee_Consulting
 */

get_header();

while ( have_posts() ) : the_post();
    $company = get_post_meta( get_the_ID(), '_mounee_job_company', true );
    $job_type = get_post_meta( get_the_ID(), '_mounee_job_type', true );
    $experience = get_post_meta( get_the_ID(), '_mounee_job_experience', true );
    $salary = get_post_meta( get_the_ID(), '_mounee_job_salary', true );
    $deadline = get_post_meta( get_the_ID(), '_mounee_job_deadline', true );
    $apply_url = get_post_meta( get_the_ID(), '_mounee_job_apply_url', true );
    $location = wp_get_post_terms( get_the_ID(), 'job_location', array( 'fields' => 'names' ) );
    $category = wp_get_post_terms( get_the_ID(), 'job_category', array( 'fields' => 'names' ) );

    // Google for Jobs Schema Markup
    $employment_type_map = array(
        'Full-time' => 'FULL_TIME',
        'Part-time' => 'PART_TIME',
        'Contract' => 'CONTRACTOR',
    );
    $employment_type = isset( $employment_type_map[ $job_type ] ) ? $employment_type_map[ $job_type ] : 'FULL_TIME';
    
    $schema = array(
        '@context' => 'https://schema.org/',
        '@type' => 'JobPosting',
        'title' => get_the_title(),
        'description' => wp_strip_all_tags( get_the_content() ),
        'datePosted' => get_the_date( 'c' ),
        'hiringOrganization' => array(
            '@type' => 'Organization',
            'name' => $company ? $company : 'Mounee Consulting',
            'sameAs' => 'https://mouneeconsulting.org',
        ),
        'jobLocation' => array(
            '@type' => 'Place',
            'address' => array(
                '@type' => 'PostalAddress',
                'addressLocality' => ! empty( $location ) ? $location[0] : 'India',
                'addressCountry' => 'IN',
            ),
        ),
        'employmentType' => $employment_type,
    );

    // Add valid through (deadline) if set
    if ( $deadline ) {
        $deadline_timestamp = strtotime( $deadline );
        if ( $deadline_timestamp > current_time( 'timestamp' ) ) {
            $schema['validThrough'] = date( 'c', $deadline_timestamp );
        }
    }

    // Add base salary if set
    if ( $salary ) {
        $schema['baseSalary'] = array(
            '@type' => 'MonetaryAmount',
            'currency' => 'INR',
            'value' => array(
                '@type' => 'QuantitativeValue',
                'value' => $salary,
                'unitText' => 'YEAR',
            ),
        );
    }

    // Add experience requirements if set
    if ( $experience ) {
        $schema['experienceRequirements'] = array(
            '@type' => 'OccupationalExperienceRequirements',
            'monthsOfExperience' => $experience,
        );
    }

    // Output JSON-LD
    echo '<script type="application/ld+json">' . wp_json_encode( $schema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT ) . '</script>';
?>

<section class="single-job-header">
    <div class="container">
        <div class="job-header-content">
            <h1 class="job-title"><?php the_title(); ?></h1>
            <?php if ( $company ) : ?>
                <p class="job-company-name"><?php echo esc_html( $company ); ?></p>
            <?php endif; ?>

            <div class="job-meta-badges">
                <?php if ( $job_type ) : ?>
                    <span class="job-type-badge job-type-<?php echo esc_attr( strtolower( str_replace( ' ', '-', $job_type ) ) ); ?>">
                        <?php echo esc_html( $job_type ); ?>
                    </span>
                <?php endif; ?>
                <?php if ( ! empty( $location ) ) : ?>
                    <span class="job-meta-item">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                            <circle cx="12" cy="10" r="3"></circle>
                        </svg>
                        <?php echo esc_html( $location[0] ); ?>
                    </span>
                <?php endif; ?>
                <?php if ( ! empty( $category ) ) : ?>
                    <span class="job-meta-item">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M20 7h-9"></path>
                            <path d="M14 17H5"></path>
                            <circle cx="17" cy="17" r="3"></circle>
                            <circle cx="7" cy="7" r="3"></circle>
                        </svg>
                        <?php echo esc_html( $category[0] ); ?>
                    </span>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<section class="single-job-content">
    <div class="container">
        <div class="job-content-grid">
            <div class="job-main-content">
                <div class="job-description">
                    <h2>Job Description</h2>
                    <?php the_content(); ?>
                </div>

                <!-- Application Form -->
                <?php if ( empty( $apply_url ) ) : ?>
                    <div class="job-application-form" id="jobApplicationForm">
                        <h2>Apply for this Position</h2>
                        <form id="applyForm" enctype="multipart/form-data">
                            <input type="hidden" name="job_id" value="<?php echo get_the_ID(); ?>">

                            <div class="form-row">
                                <div class="form-group">
                                    <label for="applicantName">Full Name *</label>
                                    <input type="text" id="applicantName" name="name" required>
                                </div>
                                <div class="form-group">
                                    <label for="applicantEmail">Email *</label>
                                    <input type="email" id="applicantEmail" name="email" required>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group">
                                    <label for="applicantPhone">Phone *</label>
                                    <input type="tel" id="applicantPhone" name="phone" required>
                                </div>
                                <div class="form-group">
                                    <label for="applicantResume">Resume (PDF) *</label>
                                    <input type="file" id="applicantResume" name="resume" accept=".pdf" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="coverLetter">Cover Letter</label>
                                <textarea id="coverLetter" name="cover_letter" rows="6" placeholder="Tell us why you're interested in this position..."></textarea>
                            </div>

                            <div class="form-message" id="formMessage"></div>

                            <button type="submit" class="btn btn-primary btn-large" id="submitBtn">
                                Submit Application
                            </button>
                        </form>
                    </div>
                <?php else : ?>
                    <div class="external-apply">
                        <h2>Apply for this Position</h2>
                        <p>This position is managed externally. Click the button below to apply on the company's website.</p>
                        <a href="<?php echo esc_url( $apply_url ); ?>" class="btn btn-primary btn-large" target="_blank" rel="noopener">
                            Apply on Company Website →
                        </a>
                    </div>
                <?php endif; ?>
            </div>

            <div class="job-sidebar">
                <div class="job-summary-card">
                    <h3>Job Summary</h3>
                    <div class="summary-item">
                        <strong>Posted:</strong>
                        <span><?php echo human_time_diff( get_the_time( 'U' ), current_time( 'timestamp' ) ); ?> ago</span>
                    </div>
                    <?php if ( $company ) : ?>
                        <div class="summary-item">
                            <strong>Company:</strong>
                            <span><?php echo esc_html( $company ); ?></span>
                        </div>
                    <?php endif; ?>
                    <?php if ( $job_type ) : ?>
                        <div class="summary-item">
                            <strong>Job Type:</strong>
                            <span><?php echo esc_html( $job_type ); ?></span>
                        </div>
                    <?php endif; ?>
                    <?php if ( ! empty( $location ) ) : ?>
                        <div class="summary-item">
                            <strong>Location:</strong>
                            <span><?php echo esc_html( $location[0] ); ?></span>
                        </div>
                    <?php endif; ?>
                    <?php if ( $experience ) : ?>
                        <div class="summary-item">
                            <strong>Experience:</strong>
                            <span><?php echo esc_html( $experience ); ?></span>
                        </div>
                    <?php endif; ?>
                    <?php if ( $salary ) : ?>
                        <div class="summary-item">
                            <strong>Salary Range:</strong>
                            <span><?php echo esc_html( $salary ); ?></span>
                        </div>
                    <?php endif; ?>
                    <?php if ( $deadline ) : 
                        $deadline_timestamp = strtotime( $deadline );
                        if ( $deadline_timestamp > current_time( 'timestamp' ) ) :
                    ?>
                        <div class="summary-item">
                            <strong>Application Deadline:</strong>
                            <span class="deadline-date"><?php echo date_i18n( 'F j, Y', $deadline_timestamp ); ?></span>
                        </div>
                    <?php 
                        endif;
                    endif; 
                    ?>
                </div>

                <div class="share-job-card">
                    <h3>Share this Job</h3>
                    <div class="share-buttons">
                        <a href="https://www.linkedin.com/sharing/share-offsite/?url=<?php echo urlencode( get_permalink() ); ?>" target="_blank" class="share-btn linkedin">
                            LinkedIn
                        </a>
                        <a href="https://twitter.com/intent/tweet?url=<?php echo urlencode( get_permalink() ); ?>&text=<?php echo urlencode( get_the_title() ); ?>" target="_blank" class="share-btn twitter">
                            Twitter
                        </a>
                        <a href="mailto:?subject=<?php echo urlencode( get_the_title() ); ?>&body=<?php echo urlencode( get_permalink() ); ?>" class="share-btn email">
                            Email
                        </a>
                    </div>
                </div>

                <div class="back-to-jobs">
                    <a href="<?php echo esc_url( get_post_type_archive_link( 'mounee_job' ) ); ?>" class="btn btn-secondary">
                        ← All Job Openings
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
endwhile;
get_footer();
