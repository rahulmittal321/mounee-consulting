<?php
/**
 * Template Name: Front Page
 * Mounee Consulting - Redesigned May 2026
 */
get_header();

$theme_uri = get_template_directory_uri();
$home_url = home_url();
?>

<main id="primary" class="site-main">

    <!-- SECTION 1: HERO -->
    <section class="hero-section" id="home">
        <div class="hero-overlay"></div>
        <div class="hero-background" style="background-image: url('<?php echo $home_url; ?>/wp-content/uploads/2021/09/10.jpg');"></div>
        <div class="container">
            <div class="hero-inner-flex">
                <div class="hero-text-col">
                    <span class="hero-badge">Recruitment That Delivers</span>
                    <h1 class="hero-title-new">We Find the People<br><span class="text-amber">Who Build the Future.</span></h1>
                    <p class="hero-desc-new">Mounee Consulting is a specialist recruitment firm that helps companies across Energy, Infrastructure, Pharma, Technology, and Finance hire the right talent &mdash; faster. With deep industry expertise and a 30,000+ professional network across India and MENA.</p>
                    <div class="hero-buttons">
                        <a href="mailto:antimamittal@mouneeconsulting.org?subject=Hiring%20Enquiry%20%E2%80%94%20Mounee%20Consulting&body=Hi%20Antima%2C%0A%0AWe%20are%20looking%20to%20hire%20for%20the%20following%20role(s)%3A%0A%0ARole%3A%20%0AIndustry%3A%20%0ALocation%3A%20%0AUrgency%3A%20%0A%0APlease%20get%20in%20touch.%0A%0ACompany%3A%20%0AName%3A%20%0APhone%3A%20" class="btn btn-primary">Find Your Next Hire &rarr;</a>
                        <a href="https://mouneeconsulting.hiresome.ai/#jobs-list" target="_blank" rel="noopener" class="btn btn-outline-light">Explore Job Openings &rarr;</a>
                    </div>
                    <div class="hero-stats-row">
                        <div class="hero-stat">
                            <span class="stat-number">80%</span>
                            <span class="stat-label">Interview Conversion</span>
                        </div>
                        <div class="hero-stat">
                            <span class="stat-number">3 Days</span>
                            <span class="stat-label">Avg. Time to Shortlist</span>
                        </div>
                        <div class="hero-stat">
                            <span class="stat-number">30K+</span>
                            <span class="stat-label">Talent Pool</span>
                        </div>
                    </div>
                </div>
                <div class="hero-card-col">
                    <div class="hero-process-card">
                        <h3>Our Process</h3>
                        <div class="process-mini-step"><span class="mini-num">01</span><span>Kickoff &amp; JD Deep-Dive</span></div>
                        <div class="process-mini-step"><span class="mini-num">02</span><span>Smart Sourcing &amp; Screening</span></div>
                        <div class="process-mini-step"><span class="mini-num">03</span><span>Video Assessment &amp; Evaluation</span></div>
                        <div class="process-mini-step"><span class="mini-num">04</span><span>Shortlist Delivery in 3 Days</span></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION 2: ABOUT + DIFFERENTIATORS -->
    <section class="about-section" id="about">
        <div class="container">
            <div class="about-grid">
                <div class="about-text-col">
                    <h2>Recruitment Expertise,<br>Human-Centered Results</h2>
                    <p>Since 2019, we have combined deep sector expertise with smart sourcing to place 200+ professionals across large-scale projects. We don't just fill positions &mdash; we understand your industry, your workflows, and what separates a great hire from an average one.</p>
                    <p>Our team scans 30,000+ pre-evaluated professionals and matches them against your requirements in hours, not weeks. The result: shortlists that actually convert.</p>
                </div>
                <div class="diff-grid">
                    <div class="diff-card">
                        <div class="diff-number">80%</div>
                        <div class="diff-title">Hit Ratio</div>
                        <div class="diff-desc">Shortlist-to-interview conversion vs 30-40% industry average</div>
                    </div>
                    <div class="diff-card">
                        <div class="diff-number">3 Days</div>
                        <div class="diff-title">Turnaround</div>
                        <div class="diff-desc">Average time from requirement to qualified shortlist</div>
                    </div>
                    <div class="diff-card">
                        <div class="diff-number">India + MENA</div>
                        <div class="diff-title">Coverage</div>
                        <div class="diff-desc">UAE, KSA, Uzbekistan, Egypt, South Africa, CIS</div>
                    </div>
                    <div class="diff-card">
                        <div class="diff-number">Since 2019</div>
                        <div class="diff-title">Track Record</div>
                        <div class="diff-desc">200+ placements across multiple industries</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION 3: SERVICES -->
    <section class="services-section" id="services">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">How We Help</h2>
                <p class="section-subtitle">End-to-end talent solutions tailored to your industry</p>
            </div>
            <div class="services-grid-new">
                <div class="service-card-new">
                    <div class="service-icon-new">&#128269;</div>
                    <h3>Executive Search &amp; Recruitment</h3>
                    <p>From Project Directors to Software Engineers &mdash; we source, screen, and place technical and leadership talent. Smart matching with deep human expertise.</p>
                    <span class="service-tag">Our Core Service</span>
                </div>
                <div class="service-card-new">
                    <div class="service-icon-new">&#9881;&#65039;</div>
                    <h3>HR Operations &amp; Consulting</h3>
                    <p>Compliance, performance management, policy design, and payroll. We extend your HR team with specialists who understand your industry dynamics.</p>
                    <span class="service-tag">End-to-End HR</span>
                </div>
                <div class="service-card-new">
                    <div class="service-icon-new">&#127891;</div>
                    <h3>Training &amp; Development</h3>
                    <p>Leadership development, technical upskilling, team building, and wellness programs. Building capability at every level of your organization.</p>
                    <span class="service-tag">Capability Building</span>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION 4: INDUSTRIES -->
    <section class="industries-section" id="industries">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title" style="color: white;">Industries We Serve</h2>
                <p class="section-subtitle" style="color: rgba(200,215,240,0.5);">Deep domain expertise across high-growth sectors</p>
            </div>
            <div class="industries-grid-new">
                <div class="industry-card-new">
                    <div class="industry-icon-new">&#9889;</div>
                    <h3>Power Generation</h3>
                    <p>Conventional &amp; Renewable Energy</p>
                </div>
                <div class="industry-card-new">
                    <div class="industry-icon-new">&#128167;</div>
                    <h3>Water &amp; Wastewater</h3>
                    <p>Treatment, desalination, distribution</p>
                </div>
                <div class="industry-card-new">
                    <div class="industry-icon-new">&#127981;</div>
                    <h3>Infrastructure</h3>
                    <p>Transmission, substations, civil works</p>
                </div>
                <div class="industry-card-new">
                    <div class="industry-icon-new">&#128138;</div>
                    <h3>Pharmaceuticals</h3>
                    <p>Manufacturing, R&amp;D, regulatory</p>
                </div>
                <div class="industry-card-new">
                    <div class="industry-icon-new">&#128187;</div>
                    <h3>Technology &amp; ITES</h3>
                    <p>Software, IT services, digital</p>
                </div>
                <div class="industry-card-new">
                    <div class="industry-icon-new">&#127974;</div>
                    <h3>Finance &amp; Banking</h3>
                    <p>Banking, insurance, fintech</p>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION 5: TEAM -->
    <section class="team-section" id="team">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Our Leadership</h2>
                <p class="section-subtitle">The people behind your next great hire</p>
            </div>
            <div class="team-grid">
                <div class="team-member">
                    <div class="member-image">
                        <img src="<?php echo $home_url; ?>/wp-content/uploads/2025/01/WhatsApp-Image-2025-01-29-at-18.50.54-1-e1738324020720.jpeg" alt="Dr. Parul Sharma">
                    </div>
                    <h3>Dr. Parul Sharma</h3>
                    <p class="member-role">Founder &amp; Managing Director</p>
                    <p class="member-bio">Leading Mounee's vision with expertise in corporate training, leadership development, and strategic HR consulting.</p>
                </div>
                <div class="team-member">
                    <div class="member-image">
                        <img src="<?php echo $home_url; ?>/wp-content/uploads/2026/03/antima-mittal.jpg" alt="Antima Mittal">
                    </div>
                    <h3>Antima Mittal</h3>
                    <p class="member-role">Co-Founder &amp; Recruitment Director</p>
                    <p class="member-bio">Driving end-to-end recruitment delivery and smart sourcing for clients across energy, infrastructure, and technology sectors.</p>
                </div>
                <div class="team-member">
                    <div class="member-image">
                        <img src="<?php echo $home_url; ?>/wp-content/uploads/2023/01/WhatsApp-Image-2023-01-15-at-20.14.25.jpeg" alt="Akansha Gaur">
                    </div>
                    <h3>Akansha Gaur</h3>
                    <p class="member-role">HR Specialist</p>
                    <p class="member-bio">Expert in talent management, candidate engagement, and recruitment operations across multiple sectors.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION 6: GALLERY -->
    <section class="gallery-section" id="gallery">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Events, Workshops &amp; Team Moments</h2>
            </div>
            <div class="gallery-grid">
                <div class="gallery-item"><img src="<?php echo $home_url; ?>/wp-content/uploads/2025/02/WhatsApp-Image-2025-02-03-at-16.47.09.jpeg" alt="Corporate Training Event"></div>
                <div class="gallery-item"><img src="<?php echo $home_url; ?>/wp-content/uploads/2025/02/WhatsApp-Image-2025-02-03-at-16.50.46.jpeg" alt="Workshop Session"></div>
                <div class="gallery-item"><img src="<?php echo $home_url; ?>/wp-content/uploads/2025/02/WhatsApp-Image-2025-02-03-at-17.06.33.jpeg" alt="Team Building Activity"></div>
                <div class="gallery-item"><img src="<?php echo $home_url; ?>/wp-content/uploads/2025/02/WhatsApp-Image-2025-02-03-at-17.08.48.jpeg" alt="Training Program"></div>
                <div class="gallery-item"><img src="<?php echo $home_url; ?>/wp-content/uploads/2025/02/WhatsApp-Image-2025-02-03-at-17.20.34-scaled.jpeg" alt="Corporate Event"></div>
                <div class="gallery-item"><img src="<?php echo $home_url; ?>/wp-content/uploads/2025/02/WhatsApp-Image-2025-02-03-at-17.38.45.jpeg" alt="Leadership Development"></div>
                <div class="gallery-item"><img src="<?php echo $home_url; ?>/wp-content/uploads/2025/02/WhatsApp-Image-2025-02-03-at-17.43.57.jpeg" alt="Group Workshop"></div>
                <div class="gallery-item"><img src="<?php echo $home_url; ?>/wp-content/uploads/2025/02/WhatsApp-Image-2025-02-03-at-17.45.34.jpeg" alt="Team Collaboration"></div>
            </div>
        </div>
    </section>

    <!-- SECTION 7: CTA -->
    <section class="cta-banner" id="cta">
        <div class="container" style="text-align: center;">
            <h2>Ready to Build Your Team?</h2>
            <p>Tell us about your hiring needs and we'll show you how Mounee Consulting can deliver the right talent, fast.</p>
            <div class="cta-buttons-row">
                <a href="mailto:antimamittal@mouneeconsulting.org?subject=Consultation%20Request%20%E2%80%94%20Mounee%20Consulting&body=Hi%20Antima%2C%0A%0AI%27d%20like%20to%20schedule%20a%2030-minute%20consultation%20to%20discuss%20our%20hiring%20needs.%0A%0APreferred%20time%20slots%3A%0A1.%20%0A2.%20%0A%0ACompany%3A%20%0AName%3A%20%0APhone%3A%20" class="btn btn-primary">Schedule a Consultation &rarr;</a>
                <a href="https://mouneeconsulting.hiresome.ai/#jobs-list" target="_blank" rel="noopener" class="btn btn-outline-light">Explore Job Openings</a>
            </div>
        </div>
    </section>

    <!-- SECTION 8: CONTACT -->
    <section class="contact-section" id="contact">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Get In Touch</h2>
                <p class="section-subtitle">Let's solve your talent challenge</p>
            </div>
            <div class="contact-grid">
                <div class="contact-info">
                    <div class="contact-item">
                        <h4>Email</h4>
                        <p><a href="mailto:parul.sharma@mouneeconsulting.org">parul.sharma@mouneeconsulting.org</a><br>
                        <a href="mailto:antimamittal@mouneeconsulting.org">antimamittal@mouneeconsulting.org</a></p>
                    </div>
                    
                    <div class="contact-item">
                        <h4>Address</h4>
                        <p>93/18, Sector 11, Gurugram,<br>Haryana - 122001, India</p>
                    </div>
                </div>
                <div class="contact-form-wrap">
                    <form id="mouneeContactForm" onsubmit="return sendContactEmail()">
                        <div class="form-row">
                            <input type="text" id="cf_name" name="name" placeholder="Your Name" required>
                            <input type="email" id="cf_email" name="email" placeholder="Your Email" required>
                        </div>
                        <div class="form-row">
                            <input type="text" id="cf_company" name="company" placeholder="Company Name">
                            <input type="tel" id="cf_phone" name="phone" placeholder="Phone Number">
                        </div>
                        <textarea id="cf_message" name="message" placeholder="Tell us about your hiring needs..." rows="4" required></textarea>
                        <button type="submit" class="btn btn-primary" style="width: 100%;">Send Message &rarr;</button>
                        <p id="formStatus" style="text-align:center; margin-top:12px; display:none;"></p>
                    </form>
                    <script>
                    function sendContactEmail() {
                        var name = document.getElementById('cf_name').value;
                        var email = document.getElementById('cf_email').value;
                        var company = document.getElementById('cf_company').value;
                        var phone = document.getElementById('cf_phone').value;
                        var message = document.getElementById('cf_message').value;
                        
                        var subject = 'Website Enquiry from ' + name + (company ? ' (' + company + ')' : '');
                        var body = 'Name: ' + name + '%0D%0A' +
                                   'Email: ' + email + '%0D%0A' +
                                   'Company: ' + company + '%0D%0A' +
                                   'Phone: ' + phone + '%0D%0A%0D%0A' +
                                   'Message:%0D%0A' + message;
                        
                        window.location.href = 'mailto:antimamittal@mouneeconsulting.org?subject=' + encodeURIComponent(subject) + '&body=' + body;
                        
                        var status = document.getElementById('formStatus');
                        status.style.display = 'block';
                        status.style.color = '#16A34A';
                        status.innerHTML = 'Opening your email client... If it does not open, please email us directly at antimamittal@mouneeconsulting.org';
                        
                        return false;
                    }
                    </script>
                </div>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>