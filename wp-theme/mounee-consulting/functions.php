<?php
/**
 * Mounee Consulting Theme Functions
 *
 * @package Mounee_Consulting
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Theme Setup
 */
function mounee_consulting_setup() {
    // Add default posts and comments RSS feed links to head
    add_theme_support( 'automatic-feed-links' );

    // Let WordPress manage the document title
    add_theme_support( 'title-tag' );

    // Enable support for Post Thumbnails
    add_theme_support( 'post-thumbnails' );

    // Custom logo support
    add_theme_support( 'custom-logo', array(
        'height'      => 100,
        'width'       => 300,
        'flex-height' => true,
        'flex-width'  => true,
    ) );

    // Register navigation menus
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'mounee-consulting' ),
        'footer'  => __( 'Footer Menu', 'mounee-consulting' ),
    ) );

    // Switch default core markup to output valid HTML5
    add_theme_support( 'html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ) );

    // Add support for responsive embedded content
    add_theme_support( 'responsive-embeds' );
}
add_action( 'after_setup_theme', 'mounee_consulting_setup' );

/**
 * Enqueue scripts and styles
 */
function mounee_consulting_scripts() {
    // Google Fonts
    wp_enqueue_style( 'mounee-google-fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Playfair+Display:wght@400;500;600;700&display=swap', array(), null );

    // Main stylesheet
    wp_enqueue_style( 'mounee-consulting-style', get_template_directory_uri() . '/assets/css/main.css', array(), '1.0.0' );

    // Main JavaScript
    wp_enqueue_script( 'mounee-consulting-script', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0.0', true );

    // Comment reply script
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'mounee_consulting_scripts' );

/**
 * Register widget areas
 */
function mounee_consulting_widgets_init() {
    // Footer Widget Area 1
    register_sidebar( array(
        'name'          => __( 'Footer Widget 1', 'mounee-consulting' ),
        'id'            => 'footer-1',
        'description'   => __( 'Add widgets here to appear in your footer.', 'mounee-consulting' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );

    // Footer Widget Area 2
    register_sidebar( array(
        'name'          => __( 'Footer Widget 2', 'mounee-consulting' ),
        'id'            => 'footer-2',
        'description'   => __( 'Add widgets here to appear in your footer.', 'mounee-consulting' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );

    // Footer Widget Area 3
    register_sidebar( array(
        'name'          => __( 'Footer Widget 3', 'mounee-consulting' ),
        'id'            => 'footer-3',
        'description'   => __( 'Add widgets here to appear in your footer.', 'mounee-consulting' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
}
add_action( 'widgets_init', 'mounee_consulting_widgets_init' );

/**
 * Customizer additions
 */
function mounee_consulting_customize_register( $wp_customize ) {
    
    // Hero Section
    $wp_customize->add_section( 'mounee_hero_section', array(
        'title'    => __( 'Hero Section', 'mounee-consulting' ),
        'priority' => 30,
    ) );

    // Hero Title
    $wp_customize->add_setting( 'mounee_hero_title', array(
        'default'           => 'Helping Companies Hire the Right Talent',
        'sanitize_callback' => 'sanitize_text_field',
    ) );

    $wp_customize->add_control( 'mounee_hero_title', array(
        'label'   => __( 'Hero Title', 'mounee-consulting' ),
        'section' => 'mounee_hero_section',
        'type'    => 'text',
    ) );

    // Hero Subtitle
    $wp_customize->add_setting( 'mounee_hero_subtitle', array(
        'default'           => 'Expert recruitment solutions for finding exceptional talent that drives your business forward.',
        'sanitize_callback' => 'sanitize_textarea_field',
    ) );

    $wp_customize->add_control( 'mounee_hero_subtitle', array(
        'label'   => __( 'Hero Subtitle', 'mounee-consulting' ),
        'section' => 'mounee_hero_section',
        'type'    => 'textarea',
    ) );

    // Primary CTA Text
    $wp_customize->add_setting( 'mounee_hero_cta_primary', array(
        'default'           => 'Find Your Next Hire',
        'sanitize_callback' => 'sanitize_text_field',
    ) );

    $wp_customize->add_control( 'mounee_hero_cta_primary', array(
        'label'   => __( 'Primary CTA Button Text', 'mounee-consulting' ),
        'section' => 'mounee_hero_section',
        'type'    => 'text',
    ) );

    // Primary CTA Link
    $wp_customize->add_setting( 'mounee_hero_cta_primary_link', array(
        'default'           => '#contact',
        'sanitize_callback' => 'esc_url_raw',
    ) );

    $wp_customize->add_control( 'mounee_hero_cta_primary_link', array(
        'label'   => __( 'Primary CTA Button Link', 'mounee-consulting' ),
        'section' => 'mounee_hero_section',
        'type'    => 'url',
    ) );

    // Secondary CTA Text
    $wp_customize->add_setting( 'mounee_hero_cta_secondary', array(
        'default'           => 'Our Services',
        'sanitize_callback' => 'sanitize_text_field',
    ) );

    $wp_customize->add_control( 'mounee_hero_cta_secondary', array(
        'label'   => __( 'Secondary CTA Button Text', 'mounee-consulting' ),
        'section' => 'mounee_hero_section',
        'type'    => 'text',
    ) );

    // Secondary CTA Link
    $wp_customize->add_setting( 'mounee_hero_cta_secondary_link', array(
        'default'           => '#services',
        'sanitize_callback' => 'esc_url_raw',
    ) );

    $wp_customize->add_control( 'mounee_hero_cta_secondary_link', array(
        'label'   => __( 'Secondary CTA Button Link', 'mounee-consulting' ),
        'section' => 'mounee_hero_section',
        'type'    => 'url',
    ) );

    // Contact Section
    $wp_customize->add_section( 'mounee_contact_section', array(
        'title'    => __( 'Contact Information', 'mounee-consulting' ),
        'priority' => 35,
    ) );

    // Email Address
    $wp_customize->add_setting( 'mounee_contact_email', array(
        'default'           => 'parul.sharma@mouneeconsulting.org',
        'sanitize_callback' => 'sanitize_email',
    ) );

    $wp_customize->add_control( 'mounee_contact_email', array(
        'label'   => __( 'Email Address', 'mounee-consulting' ),
        'section' => 'mounee_contact_section',
        'type'    => 'email',
    ) );

    // Phone Number
    $wp_customize->add_setting( 'mounee_contact_phone', array(
        'default'           => '+91 XXX XXX XXXX',
        'sanitize_callback' => 'sanitize_text_field',
    ) );

    $wp_customize->add_control( 'mounee_contact_phone', array(
        'label'   => __( 'Phone Number', 'mounee-consulting' ),
        'section' => 'mounee_contact_section',
        'type'    => 'text',
    ) );

    // Address
    $wp_customize->add_setting( 'mounee_contact_address', array(
        'default'           => 'India',
        'sanitize_callback' => 'sanitize_textarea_field',
    ) );

    $wp_customize->add_control( 'mounee_contact_address', array(
        'label'   => __( 'Address', 'mounee-consulting' ),
        'section' => 'mounee_contact_section',
        'type'    => 'textarea',
    ) );
}
add_action( 'customize_register', 'mounee_consulting_customize_register' );

/**
 * Custom template tags for this theme
 */

// Display custom logo or site title
function mounee_consulting_logo() {
    if ( has_custom_logo() ) {
        the_custom_logo();
    } else {
        ?>
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="site-title">
            <?php bloginfo( 'name' ); ?>
        </a>
        <?php
    }
}

/**
 * Job Board Functionality
 */

// Register Job Post Type
function mounee_register_job_post_type() {
    $labels = array(
        'name'                  => _x( 'Job Listings', 'Post type general name', 'mounee-consulting' ),
        'singular_name'         => _x( 'Job Listing', 'Post type singular name', 'mounee-consulting' ),
        'menu_name'             => _x( 'Job Listings', 'Admin Menu text', 'mounee-consulting' ),
        'name_admin_bar'        => _x( 'Job Listing', 'Add New on Toolbar', 'mounee-consulting' ),
        'add_new'               => __( 'Add New', 'mounee-consulting' ),
        'add_new_item'          => __( 'Add New Job Listing', 'mounee-consulting' ),
        'new_item'              => __( 'New Job Listing', 'mounee-consulting' ),
        'edit_item'             => __( 'Edit Job Listing', 'mounee-consulting' ),
        'view_item'             => __( 'View Job Listing', 'mounee-consulting' ),
        'all_items'             => __( 'All Job Listings', 'mounee-consulting' ),
        'search_items'          => __( 'Search Job Listings', 'mounee-consulting' ),
        'not_found'             => __( 'No job listings found.', 'mounee-consulting' ),
        'not_found_in_trash'    => __( 'No job listings found in Trash.', 'mounee-consulting' ),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'jobs' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 20,
        'menu_icon'          => 'dashicons-portfolio',
        'show_in_rest'       => true,
        'supports'           => array( 'title', 'editor', 'excerpt' ),
    );

    register_post_type( 'mounee_job', $args );
}
add_action( 'init', 'mounee_register_job_post_type' );

// Register Job Taxonomies
function mounee_register_job_taxonomies() {
    // Job Category
    register_taxonomy( 'job_category', 'mounee_job', array(
        'labels' => array(
            'name'              => _x( 'Job Categories', 'taxonomy general name', 'mounee-consulting' ),
            'singular_name'     => _x( 'Job Category', 'taxonomy singular name', 'mounee-consulting' ),
            'search_items'      => __( 'Search Job Categories', 'mounee-consulting' ),
            'all_items'         => __( 'All Job Categories', 'mounee-consulting' ),
            'edit_item'         => __( 'Edit Job Category', 'mounee-consulting' ),
            'update_item'       => __( 'Update Job Category', 'mounee-consulting' ),
            'add_new_item'      => __( 'Add New Job Category', 'mounee-consulting' ),
            'new_item_name'     => __( 'New Job Category Name', 'mounee-consulting' ),
            'menu_name'         => __( 'Job Categories', 'mounee-consulting' ),
        ),
        'hierarchical'      => true,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'show_in_rest'      => true,
        'rewrite'           => array( 'slug' => 'job-category' ),
    ) );

    // Job Location
    register_taxonomy( 'job_location', 'mounee_job', array(
        'labels' => array(
            'name'              => _x( 'Job Locations', 'taxonomy general name', 'mounee-consulting' ),
            'singular_name'     => _x( 'Job Location', 'taxonomy singular name', 'mounee-consulting' ),
            'search_items'      => __( 'Search Job Locations', 'mounee-consulting' ),
            'all_items'         => __( 'All Job Locations', 'mounee-consulting' ),
            'edit_item'         => __( 'Edit Job Location', 'mounee-consulting' ),
            'update_item'       => __( 'Update Job Location', 'mounee-consulting' ),
            'add_new_item'      => __( 'Add New Job Location', 'mounee-consulting' ),
            'new_item_name'     => __( 'New Job Location Name', 'mounee-consulting' ),
            'menu_name'         => __( 'Job Locations', 'mounee-consulting' ),
        ),
        'hierarchical'      => false,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'show_in_rest'      => true,
        'rewrite'           => array( 'slug' => 'job-location' ),
    ) );
}
add_action( 'init', 'mounee_register_job_taxonomies' );

// Add Job Meta Boxes
function mounee_add_job_meta_boxes() {
    add_meta_box(
        'mounee_job_details',
        __( 'Job Details', 'mounee-consulting' ),
        'mounee_job_details_callback',
        'mounee_job',
        'normal',
        'high'
    );
}
add_action( 'add_meta_boxes', 'mounee_add_job_meta_boxes' );

// Job Meta Box Callback
function mounee_job_details_callback( $post ) {
    wp_nonce_field( 'mounee_job_details_nonce', 'mounee_job_details_nonce' );

    $company = get_post_meta( $post->ID, '_mounee_job_company', true );
    $job_type = get_post_meta( $post->ID, '_mounee_job_type', true );
    $experience = get_post_meta( $post->ID, '_mounee_job_experience', true );
    $salary = get_post_meta( $post->ID, '_mounee_job_salary', true );
    $deadline = get_post_meta( $post->ID, '_mounee_job_deadline', true );
    $apply_url = get_post_meta( $post->ID, '_mounee_job_apply_url', true );
    ?>
    <table class="form-table">
        <tr>
            <th><label for="mounee_job_company"><?php _e( 'Company Name', 'mounee-consulting' ); ?></label></th>
            <td><input type="text" id="mounee_job_company" name="mounee_job_company" value="<?php echo esc_attr( $company ); ?>" class="regular-text"></td>
        </tr>
        <tr>
            <th><label for="mounee_job_type"><?php _e( 'Job Type', 'mounee-consulting' ); ?></label></th>
            <td>
                <select id="mounee_job_type" name="mounee_job_type">
                    <option value=""><?php _e( 'Select Type', 'mounee-consulting' ); ?></option>
                    <option value="Full-time" <?php selected( $job_type, 'Full-time' ); ?>><?php _e( 'Full-time', 'mounee-consulting' ); ?></option>
                    <option value="Part-time" <?php selected( $job_type, 'Part-time' ); ?>><?php _e( 'Part-time', 'mounee-consulting' ); ?></option>
                    <option value="Contract" <?php selected( $job_type, 'Contract' ); ?>><?php _e( 'Contract', 'mounee-consulting' ); ?></option>
                </select>
            </td>
        </tr>
        <tr>
            <th><label for="mounee_job_experience"><?php _e( 'Experience Required', 'mounee-consulting' ); ?></label></th>
            <td><input type="text" id="mounee_job_experience" name="mounee_job_experience" value="<?php echo esc_attr( $experience ); ?>" class="regular-text" placeholder="e.g., 2-5 years"></td>
        </tr>
        <tr>
            <th><label for="mounee_job_salary"><?php _e( 'Salary Range', 'mounee-consulting' ); ?></label></th>
            <td><input type="text" id="mounee_job_salary" name="mounee_job_salary" value="<?php echo esc_attr( $salary ); ?>" class="regular-text" placeholder="e.g., ₹5L - ₹8L per annum"></td>
        </tr>
        <tr>
            <th><label for="mounee_job_deadline"><?php _e( 'Application Deadline', 'mounee-consulting' ); ?></label></th>
            <td><input type="date" id="mounee_job_deadline" name="mounee_job_deadline" value="<?php echo esc_attr( $deadline ); ?>"></td>
        </tr>
        <tr>
            <th><label for="mounee_job_apply_url"><?php _e( 'External Apply URL (Optional)', 'mounee-consulting' ); ?></label></th>
            <td><input type="url" id="mounee_job_apply_url" name="mounee_job_apply_url" value="<?php echo esc_url( $apply_url ); ?>" class="regular-text" placeholder="https://"></td>
        </tr>
    </table>
    <?php
}

// Save Job Meta
function mounee_save_job_meta( $post_id ) {
    if ( ! isset( $_POST['mounee_job_details_nonce'] ) || ! wp_verify_nonce( $_POST['mounee_job_details_nonce'], 'mounee_job_details_nonce' ) ) {
        return;
    }

    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
        return;
    }

    if ( ! current_user_can( 'edit_post', $post_id ) ) {
        return;
    }

    $fields = array( 'mounee_job_company', 'mounee_job_type', 'mounee_job_experience', 'mounee_job_salary', 'mounee_job_deadline', 'mounee_job_apply_url' );

    foreach ( $fields as $field ) {
        if ( isset( $_POST[ $field ] ) ) {
            $value = sanitize_text_field( $_POST[ $field ] );
            update_post_meta( $post_id, '_' . $field, $value );
        }
    }
}
add_action( 'save_post_mounee_job', 'mounee_save_job_meta' );

// Register Application Post Type
function mounee_register_application_post_type() {
    register_post_type( 'mounee_application', array(
        'labels' => array(
            'name' => __( 'Job Applications', 'mounee-consulting' ),
            'singular_name' => __( 'Job Application', 'mounee-consulting' ),
        ),
        'public' => false,
        'show_ui' => true,
        'show_in_menu' => 'edit.php?post_type=mounee_job',
        'capability_type' => 'post',
        'supports' => array( 'title' ),
    ) );
}
add_action( 'init', 'mounee_register_application_post_type' );

// Enqueue Job Scripts and Styles
function mounee_enqueue_job_scripts() {
    if ( is_post_type_archive( 'mounee_job' ) || is_singular( 'mounee_job' ) || is_front_page() ) {
        wp_enqueue_style( 'mounee-jobs-css', get_template_directory_uri() . '/assets/css/jobs.css', array(), '1.0.0' );
    }

    if ( is_post_type_archive( 'mounee_job' ) || is_singular( 'mounee_job' ) ) {
        wp_enqueue_script( 'mounee-jobs-js', get_template_directory_uri() . '/assets/js/jobs.js', array( 'jquery' ), '1.0.0', true );
        wp_localize_script( 'mounee-jobs-js', 'mouneeJobs', array(
            'ajaxurl' => admin_url( 'admin-ajax.php' ),
            'nonce' => wp_create_nonce( 'mounee_job_application' ),
        ) );
    }
}
add_action( 'wp_enqueue_scripts', 'mounee_enqueue_job_scripts' );

// Handle Job Application Submission
function mounee_handle_job_application() {
    check_ajax_referer( 'mounee_job_application', 'nonce' );

    $job_id = intval( $_POST['job_id'] );
    $name = sanitize_text_field( $_POST['name'] );
    $email = sanitize_email( $_POST['email'] );
    $phone = sanitize_text_field( $_POST['phone'] );
    $cover_letter = sanitize_textarea_field( $_POST['cover_letter'] );

    // Handle file upload
    $resume_url = '';
    if ( ! empty( $_FILES['resume']['name'] ) ) {
        require_once( ABSPATH . 'wp-admin/includes/file.php' );
        $uploaded_file = $_FILES['resume'];
        $upload_overrides = array( 'test_form' => false );
        $movefile = wp_handle_upload( $uploaded_file, $upload_overrides );

        if ( $movefile && ! isset( $movefile['error'] ) ) {
            $resume_url = $movefile['url'];
        } else {
            wp_send_json_error( array( 'message' => $movefile['error'] ) );
            return;
        }
    }

    // Create application post
    $application_id = wp_insert_post( array(
        'post_type' => 'mounee_application',
        'post_title' => $name . ' - Application for ' . get_the_title( $job_id ),
        'post_status' => 'publish',
    ) );

    if ( ! is_wp_error( $application_id ) ) {
        // Save application meta
        update_post_meta( $application_id, '_mounee_app_job_id', $job_id );
        update_post_meta( $application_id, '_mounee_app_name', $name );
        update_post_meta( $application_id, '_mounee_app_email', $email );
        update_post_meta( $application_id, '_mounee_app_phone', $phone );
        update_post_meta( $application_id, '_mounee_app_resume', $resume_url );
        update_post_meta( $application_id, '_mounee_app_cover_letter', $cover_letter );

        // Send email notification to admin
        $admin_email = get_option( 'admin_email' );
        $subject = 'New Job Application: ' . get_the_title( $job_id );
        $message = "New application received\n\n";
        $message .= "Job: " . get_the_title( $job_id ) . "\n";
        $message .= "Name: $name\n";
        $message .= "Email: $email\n";
        $message .= "Phone: $phone\n";
        $message .= "Resume: $resume_url\n\n";
        $message .= "Cover Letter:\n$cover_letter\n";

        wp_mail( $admin_email, $subject, $message );

        wp_send_json_success( array( 'message' => 'Application submitted successfully!' ) );
    } else {
        wp_send_json_error( array( 'message' => 'Failed to submit application.' ) );
    }
}
add_action( 'wp_ajax_mounee_job_application', 'mounee_handle_job_application' );
add_action( 'wp_ajax_nopriv_mounee_job_application', 'mounee_handle_job_application' );

// REST API Endpoints for Job Management
function mounee_register_job_rest_routes() {
    // Create Job
    register_rest_route( 'mounee/v1', '/jobs', array(
        'methods' => 'POST',
        'callback' => 'mounee_rest_create_job',
        'permission_callback' => 'mounee_rest_auth',
    ) );

    // List Jobs
    register_rest_route( 'mounee/v1', '/jobs', array(
        'methods' => 'GET',
        'callback' => 'mounee_rest_list_jobs',
        'permission_callback' => 'mounee_rest_auth',
    ) );

    // Update Job
    register_rest_route( 'mounee/v1', '/jobs/(?P<id>\d+)', array(
        'methods' => 'PUT',
        'callback' => 'mounee_rest_update_job',
        'permission_callback' => 'mounee_rest_auth',
    ) );

    // Delete Job
    register_rest_route( 'mounee/v1', '/jobs/(?P<id>\d+)', array(
        'methods' => 'DELETE',
        'callback' => 'mounee_rest_delete_job',
        'permission_callback' => 'mounee_rest_auth',
    ) );
}
add_action( 'rest_api_init', 'mounee_register_job_rest_routes' );

// REST API Authentication
function mounee_rest_auth( $request ) {
    $api_key = $request->get_header( 'X-API-Key' );
    $valid_key = defined( 'MOUNEE_JOBS_API_KEY' ) ? MOUNEE_JOBS_API_KEY : '';

    if ( empty( $valid_key ) || $api_key !== $valid_key ) {
        return new WP_Error( 'rest_forbidden', __( 'Invalid API key.', 'mounee-consulting' ), array( 'status' => 403 ) );
    }

    return true;
}

// REST: Create Job
function mounee_rest_create_job( $request ) {
    $params = $request->get_json_params();

    $post_id = wp_insert_post( array(
        'post_type' => 'mounee_job',
        'post_title' => sanitize_text_field( $params['title'] ),
        'post_content' => wp_kses_post( $params['description'] ),
        'post_status' => 'publish',
    ) );

    if ( is_wp_error( $post_id ) ) {
        return new WP_Error( 'creation_failed', __( 'Failed to create job.', 'mounee-consulting' ), array( 'status' => 500 ) );
    }

    // Save meta fields
    if ( ! empty( $params['company'] ) ) update_post_meta( $post_id, '_mounee_job_company', sanitize_text_field( $params['company'] ) );
    if ( ! empty( $params['job_type'] ) ) update_post_meta( $post_id, '_mounee_job_type', sanitize_text_field( $params['job_type'] ) );
    if ( ! empty( $params['experience'] ) ) update_post_meta( $post_id, '_mounee_job_experience', sanitize_text_field( $params['experience'] ) );
    if ( ! empty( $params['salary'] ) ) update_post_meta( $post_id, '_mounee_job_salary', sanitize_text_field( $params['salary'] ) );
    if ( ! empty( $params['deadline'] ) ) update_post_meta( $post_id, '_mounee_job_deadline', sanitize_text_field( $params['deadline'] ) );

    // Set taxonomies
    if ( ! empty( $params['category'] ) ) wp_set_object_terms( $post_id, $params['category'], 'job_category' );
    if ( ! empty( $params['location'] ) ) wp_set_object_terms( $post_id, $params['location'], 'job_location' );

    return rest_ensure_response( array( 'id' => $post_id, 'message' => 'Job created successfully.' ) );
}

// REST: List Jobs
function mounee_rest_list_jobs( $request ) {
    $args = array(
        'post_type' => 'mounee_job',
        'posts_per_page' => -1,
    );

    $posts = get_posts( $args );
    $jobs = array();

    foreach ( $posts as $post ) {
        $jobs[] = array(
            'id' => $post->ID,
            'title' => $post->post_title,
            'description' => $post->post_content,
            'company' => get_post_meta( $post->ID, '_mounee_job_company', true ),
            'job_type' => get_post_meta( $post->ID, '_mounee_job_type', true ),
            'location' => wp_get_post_terms( $post->ID, 'job_location', array( 'fields' => 'names' ) ),
        );
    }

    return rest_ensure_response( $jobs );
}

// REST: Update Job
function mounee_rest_update_job( $request ) {
    $id = intval( $request['id'] );
    $params = $request->get_json_params();

    $post_id = wp_update_post( array(
        'ID' => $id,
        'post_title' => sanitize_text_field( $params['title'] ),
        'post_content' => wp_kses_post( $params['description'] ),
    ) );

    if ( is_wp_error( $post_id ) ) {
        return new WP_Error( 'update_failed', __( 'Failed to update job.', 'mounee-consulting' ), array( 'status' => 500 ) );
    }

    return rest_ensure_response( array( 'message' => 'Job updated successfully.' ) );
}

// REST: Delete Job
function mounee_rest_delete_job( $request ) {
    $id = intval( $request['id'] );
    $result = wp_delete_post( $id, true );

    if ( ! $result ) {
        return new WP_Error( 'delete_failed', __( 'Failed to delete job.', 'mounee-consulting' ), array( 'status' => 500 ) );
    }

    return rest_ensure_response( array( 'message' => 'Job deleted successfully.' ) );
}

// Update nav menu registration to include Jobs
function mounee_consulting_setup_menus() {
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'mounee-consulting' ),
        'footer'  => __( 'Footer Menu', 'mounee-consulting' ),
        'jobs'    => __( 'Jobs Menu', 'mounee-consulting' ),
    ) );
}
add_action( 'after_setup_theme', 'mounee_consulting_setup_menus' );

// Flush rewrite rules on theme activation
function mounee_theme_activation() {
    mounee_register_job_post_type();
    mounee_register_job_taxonomies();
    flush_rewrite_rules();
}
add_action( 'after_switch_theme', 'mounee_theme_activation' );
