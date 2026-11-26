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
    <div class="hero-background" style="background-image: url('<?php echo home_url(); ?>/wp-content/uploads/2021/09/10.jpg');"></div>
    <div class="container">
        <div class="hero-content">
            <h1 class="hero-title" style="font-size: 3.8rem; margin-bottom: 8px;">Mounee Consulting Services</h1>
            <p class="hero-tagline" style="font-size: 1.5rem; font-style: italic; opacity: 0.9; margin-bottom: 36px; font-weight: 300; letter-spacing: 0.5px;">Helping Companies Hire the Right Talent</p>
            <p class="hero-subtitle">Empowering organizations through expert recruitment, HR operations, and training solutions. Combining technology, market insight, and custom strategies for your unique hiring needs.</p>
            
            <!-- Recruitment Process Steps -->
            <div class="recruitment-process">
                <div class="process-step">
                    <div class="step-icon">1</div>
                    <h3>Kickoff Session</h3>
                </div>
                <div class="process-arrow">&rarr;</div>
                <div class="process-step">
                    <div class="step-icon">2</div>
                    <h3>AI-Powered Sourcing</h3>
                </div>
                <div class="process-arrow">&rarr;</div>
                <div class="process-step">
                    <div class="step-icon">3</div>
                    <h3>Video Screening</h3>
                </div>
                <div class="process-arrow">&rarr;</div>
                <div class="process-step">
                    <div class="step-icon">4</div>
                    <h3>Rapid Delivery</h3>
                </div>
            </div>

            <div class="hero-cta">
                <a href="<?php echo esc_url( get_theme_mod( 'mounee_hero_cta_primary_link', '#contact' ) ); ?>" class="btn btn-primary">
                    <?php echo esc_html( get_theme_mod( 'mounee_hero_cta_primary', 'Find Your Next Hire' ) ); ?>
                </a>
                <a href="<?php echo esc_url( get_theme_mod( 'mounee_hero_cta_secondary_link', '#services' ) ); ?>" class="btn btn-secondary">
                    <?php echo esc_html( get_theme_mod( 'mounee_hero_cta_secondary', 'Our Services' ) ); ?>
                </a>
                <a href="https://mouneeconsulting.hiresome.ai/#jobs-list" target="_blank" rel="noopener" class="btn btn-primary" style="background: linear-gradient(135deg, #F59E0B, #D97706); border: none; margin-left: 8px; box-shadow: 0 4px 15px rgba(245,158,11,0.4);">
                    Explore Job Openings &rarr;
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
                <img src="<?php echo home_url(); ?>/wp-content/uploads/2021/09/about.jpg" alt="About Mounee Consulting">
            </div>
            <div class="about-content">
                <h2 class="section-title">AI-Driven Recruitment, Human-Centered Results</h2>
                <p class="lead">Mounee Consulting Services (MCS) is an AI-driven specialized talent recruitment firm dedicated to addressing complex talent acquisition challenges since 2019. We combine technology, market insight, and custom strategies to deliver the right talent — faster.</p>
                <p>With a proven track record across India and the EMEA region, we go beyond traditional recruitment. Our approach integrates AI-powered sourcing with deep human expertise in HR operations and training & development — ensuring not just placements, but lasting fits.</p>
                
                <div class="stats-grid">
                    <div class="stat-item">
                        <div class="stat-number">80%</div>
                        <div class="stat-label">Hit Ratio</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number">India + EMEA</div>
                        <div class="stat-label">Global Reach</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number">Since 2019</div>
                        <div class="stat-label">Trusted Experience</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number">50+</div>
                        <div class="stat-label">Clients Served</div>
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
            <!-- AI-Powered Recruitment - Featured -->
            <div class="service-card featured">
                <div class="service-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                    </svg>
                </div>
                <h3>AI-Powered Recruitment</h3>
                <p>Our technology-driven recruitment engine combines AI-powered sourcing with our extensive in-house talent pool to identify, screen, and deliver qualified candidates — fast. 80% of profiles we present get shortlisted for interviews.</p>
                <ul class="service-features">
                    <li>Executive & Leadership Search</li>
                    <li>AI-Powered Candidate Sourcing</li>
                    <li>Video Screening & Assessment</li>
                    <li>Volume & Specialized Hiring</li>
                    <li>Contract & Temporary Staffing</li>
                </ul>
            </div>

            <!-- HR Operations -->
            <div class="service-card">
                <div class="service-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                    </svg>
                </div>
                <h3>HR Operations</h3>
                <p>End-to-end HR operations support that streamlines your people processes. From policy design to compliance, we help organizations build robust HR infrastructure.</p>
                <ul class="service-features">
                    <li>HR Policy & Process Design</li>
                    <li>Compliance & Statutory Support</li>
                    <li>Performance Management Systems</li>
                    <li>Employee Lifecycle Management</li>
                </ul>
            </div>

            <!-- Training & Development -->
            <div class="service-card">
                <div class="service-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                    </svg>
                </div>
                <h3>Training & Development</h3>
                <p>Customized learning programs that build capabilities and drive organizational transformation. We design and deliver training that sticks.</p>
                <ul class="service-features">
                    <li>Leadership Development</li>
                    <li>Skills Enhancement Programs</li>
                    <li>Team Building Workshops</li>
                    <li>Onboarding & Induction Programs</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Why Choose Us Section -->
<section class="why-choose-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Why Organizations Choose MCS</h2>
            <p class="section-subtitle">A recruitment partner that delivers results, not just resumes</p>
        </div>

        <div class="features-grid">
            <div class="feature-item">
                <div class="feature-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <h3>80% Hit Ratio</h3>
                <p>4 out of 5 candidates we present get shortlisted for interviews. Our AI-powered screening ensures only the best reach your desk.</p>
            </div>

            <div class="feature-item">
                <div class="feature-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" />
                    </svg>
                </div>
                <h3>AI + Human Expertise</h3>
                <p>We leverage AI-powered sourcing and our in-house talent pool, combined with deep industry knowledge for precision matching.</p>
            </div>

            <div class="feature-item">
                <div class="feature-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                    </svg>
                </div>
                <h3>Rapid Delivery</h3>
                <p>From kickoff to candidate presentation in record time. Our streamlined process means you don't lose great talent to slow hiring.</p>
            </div>

            <div class="feature-item">
                <div class="feature-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <h3>India + EMEA Reach</h3>
                <p>Proven track record of successful placements across India and the EMEA region, with deep networks in multiple sectors.</p>
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
                <span class="industry-icon" style="font-size: 2.5rem; display: block; margin-bottom: 8px;">💻</span>
                <span class="industry-name" style="font-weight: 600; display: block;">Information Technology</span>
                <span class="industry-desc" style="font-size: 0.8rem; color: #6B7280; display: block; margin-top: 4px;">Software development, IT infrastructure, and digital transformation</span>
            </div>
            <div class="industry-item">
                <span class="industry-icon" style="font-size: 2.5rem; display: block; margin-bottom: 8px;">⚡</span>
                <span class="industry-name" style="font-weight: 600; display: block;">Energy & Power</span>
                <span class="industry-desc" style="font-size: 0.8rem; color: #6B7280; display: block; margin-top: 4px;">Conventional and renewable power solutions</span>
            </div>
            <div class="industry-item">
                <span class="industry-icon" style="font-size: 2.5rem; display: block; margin-bottom: 8px;">🔧</span>
                <span class="industry-name" style="font-weight: 600; display: block;">Engineering</span>
                <span class="industry-desc" style="font-size: 0.8rem; color: #6B7280; display: block; margin-top: 4px;">Technical and project engineering roles</span>
            </div>
            <div class="industry-item">
                <span class="industry-icon" style="font-size: 2.5rem; display: block; margin-bottom: 8px;">💰</span>
                <span class="industry-name" style="font-weight: 600; display: block;">Finance</span>
                <span class="industry-desc" style="font-size: 0.8rem; color: #6B7280; display: block; margin-top: 4px;">Banking, fintech, and financial services talent</span>
            </div>
            <div class="industry-item">
                <span class="industry-icon" style="font-size: 2.5rem; display: block; margin-bottom: 8px;">🏭</span>
                <span class="industry-name" style="font-weight: 600; display: block;">Manufacturing</span>
                <span class="industry-desc" style="font-size: 0.8rem; color: #6B7280; display: block; margin-top: 4px;">Production and operations specialists</span>
            </div>
            <div class="industry-item">
                <span class="industry-icon" style="font-size: 2.5rem; display: block; margin-bottom: 8px;">💧</span>
                <span class="industry-name" style="font-weight: 600; display: block;">Water & Infrastructure</span>
                <span class="industry-desc" style="font-size: 0.8rem; color: #6B7280; display: block; margin-top: 4px;">Water treatment and infrastructure projects</span>
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
                    <img src="<?php echo home_url(); ?>/wp-content/uploads/2025/01/WhatsApp-Image-2025-01-29-at-18.50.54-1-e1738324020720.jpeg" alt="Dr. Parul Sharma">
                </div>
                <h3>Dr. Parul Sharma</h3>
                <p class="member-role">Founder & Managing Director</p>
                <p class="member-bio">Visionary leader with extensive experience in talent acquisition and organizational development.</p>
            </div>

            <div class="team-member">
                <div class="member-image">
                    <img src="https://mouneeconsulting.org/wp-content/uploads/2026/03/antima-mittal.jpg" alt="Antima Mittal">
                </div>
                <h3>Antima Mittal</h3>
                <p class="member-role">Recruitment Director</p>
                <p class="member-bio">Experienced HR professional specializing in strategic talent solutions and employee engagement.</p>
            </div>

            <div class="team-member">
                <div class="member-placeholder">
                    <div class="member-initials">AG</div>
                </div>
                <h3>Akansha Gaur</h3>
                <p class="member-role">Talent Acquisition Specialist</p>
                <p class="member-bio">Specialist in infrastructure & IT recruitment, connecting top talent to large-scale energy and infrastructure projects across India.</p>
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
                <img src="<?php echo home_url(); ?>/wp-content/uploads/2025/02/WhatsApp-Image-2025-02-03-at-16.47.09.jpeg" alt="Corporate Training Event">
            </div>
            <div class="gallery-item">
                <img src="<?php echo home_url(); ?>/wp-content/uploads/2025/02/WhatsApp-Image-2025-02-03-at-16.50.46.jpeg" alt="Workshop Session">
            </div>
            <div class="gallery-item">
                <img src="<?php echo home_url(); ?>/wp-content/uploads/2025/02/WhatsApp-Image-2025-02-03-at-17.06.33.jpeg" alt="Team Building Activity">
            </div>
            <div class="gallery-item">
                <img src="<?php echo home_url(); ?>/wp-content/uploads/2025/02/WhatsApp-Image-2025-02-03-at-17.08.48.jpeg" alt="Training Program">
            </div>
            <div class="gallery-item">
                <img src="<?php echo home_url(); ?>/wp-content/uploads/2025/02/WhatsApp-Image-2025-02-03-at-17.20.34-scaled.jpeg" alt="Corporate Event">
            </div>
            <div class="gallery-item">
                <img src="<?php echo home_url(); ?>/wp-content/uploads/2025/02/WhatsApp-Image-2025-02-03-at-17.38.45.jpeg" alt="Leadership Development">
            </div>
            <div class="gallery-item">
                <img src="<?php echo home_url(); ?>/wp-content/uploads/2025/02/WhatsApp-Image-2025-02-03-at-17.43.57.jpeg" alt="Group Workshop">
            </div>
            <div class="gallery-item">
                <img src="<?php echo home_url(); ?>/wp-content/uploads/2025/02/WhatsApp-Image-2025-02-03-at-17.45.34.jpeg" alt="Team Collaboration">
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
                <img src="<?php echo home_url(); ?>/wp-content/uploads/2021/09/MindXL_Transp-removebg-preview.png" alt="MindXL Partner">
            </div>
            <div class="partner-logo">
                <img src="<?php echo home_url(); ?>/wp-content/uploads/2021/12/Screenshot_180-removebg-preview.png" alt="Partner Organization">
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
                    <p>"MCS transformed our hiring process. Their AI-powered sourcing found us candidates we couldn't find through traditional channels. 4 out of 5 profiles were spot-on for our requirements."</p>
                </div>
                <div class="testimonial-author">
                    <strong>— Technology Client</strong>
                    <span>VP of Engineering</span>
                </div>
            </div>

            <div class="testimonial-card">
                <div class="testimonial-content">
                    <p>"We needed specialized talent for our renewable energy projects across India. Mounee Consulting delivered qualified candidates within days, not weeks. Their understanding of the energy sector is exceptional."</p>
                </div>
                <div class="testimonial-author">
                    <strong>— Energy Sector Client</strong>
                    <span>HR Director</span>
                </div>
            </div>

            <div class="testimonial-card">
                <div class="testimonial-content">
                    <p>"What sets MCS apart is their hit ratio. We've worked with many agencies, but none come close to the quality of candidates Mounee presents. They truly understand our business."</p>
                </div>
                <div class="testimonial-author">
                    <strong>— Infrastructure Client</strong>
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
            <h2>Ready to Hire Smarter, Faster?</h2>
            <p>Let our AI-driven recruitment platform and expert team find the talent your organization needs. 80% of our candidates get shortlisted — let's make your next hire count.</p>
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
                <h3>Let's Solve Your Talent Challenge</h3>
                <p style="margin-bottom: 24px; color: #6B7280;">Whether you need one specialist or an entire team, our AI-powered recruitment finds the right fit — fast.</p>
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
                <form class="mounee-contact-form" id="mouneeContactForm" method="post">
                    <div class="form-group">
                        <input type="text" name="name" placeholder="Your Name" required>
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" placeholder="Email Address" required>
                    </div>
                    <div class="form-group">
                        <input type="text" name="company" placeholder="Company Name">
                    </div>
                    <div class="form-group">
                        <input type="tel" name="phone" placeholder="Phone Number">
                    </div>
                    <div class="form-group">
                        <select name="inquiry_type">
                            <option value="" disabled selected>I'm looking to...</option>
                            <option value="hire">Hire talent for my company</option>
                            <option value="training">Explore training & workshops</option>
                            <option value="wellness">Discuss wellness programs</option>
                            <option value="career">Career counselling</option>
                            <option value="other">Other</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <textarea name="message" placeholder="Tell us about your requirements..." rows="4"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Send Message</button>
                    <div class="form-status" id="formStatus" style="display:none; margin-top: 15px; padding: 12px; border-radius: 6px;"></div>
                </form>
                <style>
                .mounee-contact-form .form-group { margin-bottom: 16px; }
                .mounee-contact-form input,
                .mounee-contact-form select,
                .mounee-contact-form textarea {
                    width: 100%; padding: 12px 16px; border: 1px solid #E5E7EB; border-radius: 8px;
                    font-family: inherit; font-size: 0.95rem; color: #374151;
                    background: #F9FAFB; transition: border-color 0.2s;
                }
                .mounee-contact-form input:focus,
                .mounee-contact-form select:focus,
                .mounee-contact-form textarea:focus {
                    outline: none; border-color: #1E5FBB; background: #FFF;
                }
                .mounee-contact-form textarea { resize: vertical; min-height: 100px; }
                .mounee-contact-form .btn { cursor: pointer; border: none; }
                </style>
                <script>
                document.getElementById('mouneeContactForm').addEventListener('submit', function(e) {
                    e.preventDefault();
                    var btn = this.querySelector('button[type="submit"]');
                    var status = document.getElementById('formStatus');
                    btn.textContent = 'Sending...';
                    btn.disabled = true;
                    // Simple mailto fallback
                    var data = new FormData(this);
                    var body = 'Name: ' + data.get('name') + '\nEmail: ' + data.get('email') + 
                               '\nCompany: ' + data.get('company') + '\nPhone: ' + data.get('phone') +
                               '\nInquiry: ' + data.get('inquiry_type') + '\nMessage: ' + data.get('message');
                    window.location.href = 'mailto:parul.sharma@mouneeconsulting.org?subject=Website Inquiry from ' + 
                        encodeURIComponent(data.get('name')) + '&body=' + encodeURIComponent(body);
                    status.style.display = 'block';
                    status.style.background = '#ECFDF5';
                    status.style.color = '#065F46';
                    status.innerHTML = '✓ Opening your email client. You can also email us directly at <a href="mailto:parul.sharma@mouneeconsulting.org">parul.sharma@mouneeconsulting.org</a>';
                    btn.textContent = 'Message Sent ✓';
                    setTimeout(function() { btn.textContent = 'Send Message'; btn.disabled = false; }, 3000);
                });
                </script>
            </div>
        </div>
    </div>
</section>

<?php
get_footer();
