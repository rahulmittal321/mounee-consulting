<?php
/**
 * Front Page Template
 *
 * @package Mounee_Consulting
 */

get_header();
?>

<!-- Hero Section -->
<section class="hero-section" id="home">
    <div class="hero-overlay"></div>
    <div class="hero-background" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/10.jpg');"></div>
    <div class="container">
        <div class="hero-content">
            <h1 class="hero-title"><?php echo esc_html( get_theme_mod( 'mounee_hero_title', 'Helping Companies Hire the Right Talent' ) ); ?></h1>
            <p class="hero-subtitle"><?php echo esc_html( get_theme_mod( 'mounee_hero_subtitle', 'Expert recruitment solutions for finding exceptional talent that drives your business forward.' ) ); ?></p>
            
            <!-- Recruitment Process Steps -->
            <div class="recruitment-process">
                <div class="process-step">
                    <div class="step-icon">1</div>
                    <h3>Understand</h3>
                </div>
                <div class="process-arrow">→</div>
                <div class="process-step">
                    <div class="step-icon">2</div>
                    <h3>Source & Screen</h3>
                </div>
                <div class="process-arrow">→</div>
                <div class="process-step">
                    <div class="step-icon">3</div>
                    <h3>Evaluate</h3>
                </div>
                <div class="process-arrow">→</div>
                <div class="process-step">
                    <div class="step-icon">4</div>
                    <h3>Place</h3>
                </div>
            </div>

            <div class="hero-cta">
                <a href="<?php echo esc_url( get_theme_mod( 'mounee_hero_cta_primary_link', '#contact' ) ); ?>" class="btn btn-primary">
                    <?php echo esc_html( get_theme_mod( 'mounee_hero_cta_primary', 'Find Your Next Hire' ) ); ?>
                </a>
                <a href="<?php echo esc_url( get_theme_mod( 'mounee_hero_cta_secondary_link', '#services' ) ); ?>" class="btn btn-secondary">
                    <?php echo esc_html( get_theme_mod( 'mounee_hero_cta_secondary', 'Our Services' ) ); ?>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- About Section -->
<section class="about-section" id="about">
    <div class="container">
        <div class="about-grid">
            <div class="about-image">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about.jpg" alt="About Mounee Consulting">
            </div>
            <div class="about-content">
                <h2 class="section-title">Your Partner in Talent Excellence</h2>
                <p class="lead">Founded by Dr. Parul Sharma, Mounee Consulting has emerged as a trusted partner for organizations seeking exceptional talent and transformative learning solutions.</p>
                <p>We combine deep industry expertise with innovative recruitment methodologies to connect companies with professionals who drive real business impact. Our holistic approach extends beyond placement to include corporate training, wellness programs, and career development.</p>
                
                <div class="stats-grid">
                    <div class="stat-item">
                        <div class="stat-number">2</div>
                        <div class="stat-label">Offices</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number">50+</div>
                        <div class="stat-label">Customers</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number">20+</div>
                        <div class="stat-label">Team Members</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number">20+</div>
                        <div class="stat-label">Projects</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Services Section -->
<section class="services-section" id="services">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Our Services</h2>
            <p class="section-subtitle">Comprehensive solutions for talent acquisition, development, and organizational wellness</p>
        </div>

        <div class="services-grid">
            <!-- Recruitment - Featured -->
            <div class="service-card featured">
                <div class="service-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                    </svg>
                </div>
                <h3>Recruitment Services</h3>
                <p>Strategic talent acquisition solutions that connect you with exceptional professionals who align with your company culture and drive business growth.</p>
                <ul class="service-features">
                    <li>Executive Search</li>
                    <li>Volume Hiring</li>
                    <li>Specialized Recruitment</li>
                    <li>Contract Staffing</li>
                </ul>
            </div>

            <!-- Corporate Training -->
            <div class="service-card">
                <div class="service-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                    </svg>
                </div>
                <h3>Corporate Training & Events</h3>
                <p>Customized training programs and corporate events designed to enhance skills, boost productivity, and foster team collaboration.</p>
                <ul class="service-features">
                    <li>Leadership Development</li>
                    <li>Team Building Workshops</li>
                    <li>Skills Enhancement</li>
                    <li>Corporate Events</li>
                </ul>
            </div>

            <!-- Wellness -->
            <div class="service-card">
                <div class="service-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                    </svg>
                </div>
                <h3>Wellness & Education</h3>
                <p>Holistic wellness programs and educational services that support employee wellbeing and create healthier, more engaged workplaces.</p>
                <ul class="service-features">
                    <li>Wellness Programs</li>
                    <li>Stress Management</li>
                    <li>Career Counselling</li>
                    <li>Personal Development</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Why Choose Us Section -->
<section class="why-choose-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Why Choose Mounee Consulting?</h2>
            <p class="section-subtitle">We deliver exceptional recruitment outcomes through our proven approach</p>
        </div>

        <div class="features-grid">
            <div class="feature-item">
                <div class="feature-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <h3>Deep Screening</h3>
                <p>Rigorous multi-stage evaluation process ensuring only the most qualified candidates reach your desk.</p>
            </div>

            <div class="feature-item">
                <div class="feature-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                    </svg>
                </div>
                <h3>Industry Expertise</h3>
                <p>Specialized knowledge across multiple sectors including hospitality, education, automotive, and retail.</p>
            </div>

            <div class="feature-item">
                <div class="feature-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                    </svg>
                </div>
                <h3>Speed & Efficiency</h3>
                <p>Rapid turnaround times without compromising quality, getting your positions filled faster.</p>
            </div>

            <div class="feature-item">
                <div class="feature-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                    </svg>
                </div>
                <h3>Guarantee</h3>
                <p>Replacement guarantee ensuring your satisfaction and the right long-term fit for your organization.</p>
            </div>
        </div>
    </div>
</section>

<!-- Industries Section -->
<section class="industries-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Industries We Serve</h2>
            <p class="section-subtitle">Specialized recruitment expertise across diverse sectors</p>
        </div>

        <div class="industries-grid">
            <div class="industry-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons8-american-airlines-50.png" alt="Aviation">
                <span>Aviation & Travel</span>
            </div>
            <div class="industry-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons8-beach-48.png" alt="Hospitality">
                <span>Hospitality</span>
            </div>
            <div class="industry-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons8-car-48.png" alt="Automotive">
                <span>Automotive</span>
            </div>
            <div class="industry-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons8-clothes-48.png" alt="Retail">
                <span>Retail & Fashion</span>
            </div>
            <div class="industry-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons8-condo-48.png" alt="Real Estate">
                <span>Real Estate</span>
            </div>
            <div class="industry-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons8-university-48.png" alt="Education">
                <span>Education</span>
            </div>
        </div>
    </div>
</section>

<!-- Team Section -->
<section class="team-section" id="team">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Our Expert Team</h2>
            <p class="section-subtitle">Experienced professionals dedicated to your success</p>
        </div>

        <div class="team-grid">
            <div class="team-member">
                <div class="member-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/WhatsApp-Image-2025-01-29-at-18.50.54-1-e1738324020720.jpeg" alt="Dr. Parul Sharma">
                </div>
                <h3>Dr. Parul Sharma</h3>
                <p class="member-role">Founder & Managing Director</p>
                <p class="member-bio">Visionary leader with extensive experience in talent acquisition and organizational development.</p>
            </div>

            <div class="team-member">
                <div class="member-placeholder">
                    <div class="member-initials">AM</div>
                </div>
                <h3>Antima Mittal</h3>
                <p class="member-role">Recruitment Director</p>
                <p class="member-bio">Experienced HR professional specializing in strategic talent solutions and employee engagement.</p>
            </div>

            <div class="team-member">
                <div class="member-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/WhatsApp-Image-2023-01-15-at-20.14.25.jpeg" alt="Akansha Gaur">
                </div>
                <h3>Akansha Gaur</h3>
                <p class="member-role">HR Expert</p>
                <p class="member-bio">Specialist in recruitment strategy and talent management solutions.</p>
            </div>

            <div class="team-member">
                <div class="member-placeholder">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                    </svg>
                </div>
                <h3>Extended Team</h3>
                <p class="member-role">Specialists</p>
                <p class="member-bio">Sabita Govindan (HR Specialist), Shachi Kant Sharma (HR Specialist), Nilesh Zope (Holistic Health), Laxmi Rao (EFT/NLP Trainer)</p>
            </div>
        </div>
    </div>
</section>

<!-- Gallery Section -->
<section class="gallery-section" id="gallery">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Our Work in Action</h2>
            <p class="section-subtitle">Moments from our workshops, training sessions, and corporate events</p>
        </div>

        <div class="gallery-grid">
            <div class="gallery-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/WhatsApp-Image-2025-02-03-at-16.47.09.jpeg" alt="Corporate Training Event">
            </div>
            <div class="gallery-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/WhatsApp-Image-2025-02-03-at-16.50.46.jpeg" alt="Workshop Session">
            </div>
            <div class="gallery-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/WhatsApp-Image-2025-02-03-at-17.06.33.jpeg" alt="Team Building Activity">
            </div>
            <div class="gallery-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/WhatsApp-Image-2025-02-03-at-17.08.48.jpeg" alt="Training Program">
            </div>
            <div class="gallery-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/WhatsApp-Image-2025-02-03-at-17.20.34-scaled.jpeg" alt="Corporate Event">
            </div>
            <div class="gallery-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/WhatsApp-Image-2025-02-03-at-17.38.45.jpeg" alt="Leadership Development">
            </div>
            <div class="gallery-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/WhatsApp-Image-2025-02-03-at-17.43.57.jpeg" alt="Group Workshop">
            </div>
            <div class="gallery-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/WhatsApp-Image-2025-02-03-at-17.45.34.jpeg" alt="Team Collaboration">
            </div>
        </div>
    </div>
</section>

<!-- Partners Section -->
<section class="partners-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Our Partners</h2>
            <p class="section-subtitle">Trusted collaborations that enhance our services</p>
        </div>

        <div class="partners-grid">
            <div class="partner-logo">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/MindXL_Transp-removebg-preview.png" alt="MindXL Partner">
            </div>
            <div class="partner-logo">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Screenshot_180-removebg-preview.png" alt="Partner Organization">
            </div>
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<section class="testimonials-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">What Our Clients Say</h2>
            <p class="section-subtitle">Success stories from organizations we've helped</p>
        </div>

        <div class="testimonials-grid">
            <div class="testimonial-card">
                <div class="testimonial-content">
                    <p>"Mounee Consulting helped us find exceptional talent that perfectly aligned with our company culture. Their thorough screening process saved us time and delivered quality candidates."</p>
                </div>
                <div class="testimonial-author">
                    <strong>— Corporate Client</strong>
                    <span>HR Director</span>
                </div>
            </div>

            <div class="testimonial-card">
                <div class="testimonial-content">
                    <p>"The training programs were transformative for our team. Dr. Bansal's expertise and engaging approach made a real difference in our organizational effectiveness."</p>
                </div>
                <div class="testimonial-author">
                    <strong>— Training Participant</strong>
                    <span>Operations Manager</span>
                </div>
            </div>

            <div class="testimonial-card">
                <div class="testimonial-content">
                    <p>"Professional, efficient, and results-driven. Mounee Consulting has been our go-to partner for all recruitment needs. Highly recommended!"</p>
                </div>
                <div class="testimonial-author">
                    <strong>— Business Partner</strong>
                    <span>CEO</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Job Openings Section -->
<section class="job-openings-section" id="jobs">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Current Job Openings</h2>
            <p class="section-subtitle">Explore exciting career opportunities with our partner organizations</p>
        </div>

        <?php
        // Query latest job listings
        $jobs_query = new WP_Query( array(
            'post_type'      => 'mounee_job',
            'posts_per_page' => 4,
            'post_status'    => 'publish',
            'orderby'        => 'date',
            'order'          => 'DESC',
        ) );

        if ( $jobs_query->have_posts() ) :
        ?>
            <div class="jobs-grid">
                <?php while ( $jobs_query->have_posts() ) : $jobs_query->the_post(); 
                    $company = get_post_meta( get_the_ID(), '_mounee_job_company', true );
                    $job_type = get_post_meta( get_the_ID(), '_mounee_job_type', true );
                    $location = wp_get_post_terms( get_the_ID(), 'job_location', array( 'fields' => 'names' ) );
                    $salary = get_post_meta( get_the_ID(), '_mounee_job_salary', true );
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
                                <span class="job-salary"><?php echo esc_html( $salary ); ?></span>
                            <?php endif; ?>
                        </div>
                        <div class="job-excerpt">
                            <?php echo wp_trim_words( get_the_excerpt(), 20 ); ?>
                        </div>
                        <a href="<?php the_permalink(); ?>" class="job-apply-link">View Details →</a>
                    </div>
                <?php endwhile; ?>
            </div>

            <div class="job-openings-cta">
                <a href="<?php echo esc_url( get_post_type_archive_link( 'mounee_job' ) ); ?>" class="btn btn-primary">View All Openings</a>
            </div>
        <?php 
        else :
        ?>
            <div class="no-jobs-message">
                <p>New opportunities coming soon. Send us your resume!</p>
                <a href="#contact" class="btn btn-primary">Contact Us</a>
            </div>
        <?php
        endif;
        wp_reset_postdata();
        ?>
    </div>
</section>

<!-- CTA Banner Section -->
<section class="cta-banner">
    <div class="container">
        <div class="cta-content">
            <h2>Ready to Build Your Dream Team?</h2>
            <p>Let's discuss how we can help you find exceptional talent that drives your business forward.</p>
            <a href="#contact" class="btn btn-large">Get Started Today</a>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section class="contact-section" id="contact">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Get In Touch</h2>
            <p class="section-subtitle">Let's start a conversation about your recruitment needs</p>
        </div>

        <div class="contact-grid">
            <div class="contact-info">
                <h3>Contact Information</h3>
                <div class="contact-item">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                    </svg>
                    <div>
                        <strong>Email</strong>
                        <a href="mailto:<?php echo esc_attr( get_theme_mod( 'mounee_contact_email', 'parul.sharma@mouneeconsulting.org' ) ); ?>">
                            <?php echo esc_html( get_theme_mod( 'mounee_contact_email', 'parul.sharma@mouneeconsulting.org' ) ); ?>
                        </a>
                    </div>
                </div>

                <?php if ( get_theme_mod( 'mounee_contact_phone' ) ) : ?>
                <div class="contact-item">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                    </svg>
                    <div>
                        <strong>Phone</strong>
                        <span><?php echo esc_html( get_theme_mod( 'mounee_contact_phone' ) ); ?></span>
                    </div>
                </div>
                <?php endif; ?>

                <?php if ( get_theme_mod( 'mounee_contact_address' ) ) : ?>
                <div class="contact-item">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                    <div>
                        <strong>Location</strong>
                        <span><?php echo esc_html( get_theme_mod( 'mounee_contact_address', 'India' ) ); ?></span>
                    </div>
                </div>
                <?php endif; ?>

                <div class="contact-item">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
                    </svg>
                    <div>
                        <strong>Website</strong>
                        <a href="https://mouneeconsulting.org" target="_blank" rel="noopener">mouneeconsulting.org</a>
                    </div>
                </div>
            </div>

            <div class="contact-form">
                <h3>Send Us a Message</h3>
                <?php 
                // Contact Form 7 shortcode placeholder
                // User should install Contact Form 7 plugin and replace [contact-form-7 id="1"] with actual form ID
                ?>
                <div class="form-placeholder">
                    <p><strong>Contact Form 7 Integration</strong></p>
                    <p>To enable the contact form:</p>
                    <ol>
                        <li>Install and activate the <strong>Contact Form 7</strong> plugin</li>
                        <li>Create a new contact form</li>
                        <li>Edit front-page.php and replace this placeholder with: <code>[contact-form-7 id="YOUR_FORM_ID"]</code></li>
                    </ol>
                    <p>Or use any other contact form plugin of your choice.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
get_footer();
