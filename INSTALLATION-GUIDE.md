# Mounee Consulting WordPress Theme - Installation Guide

## 📦 Package Contents

Your complete WordPress theme package is ready at:
- **Theme Folder:** `/data/.openclaw/workspace/mounee-consulting/wp-theme/mounee-consulting/`
- **Installable ZIP:** `/data/.openclaw/workspace/mounee-consulting/wp-theme/mounee-consulting.zip`

## 🚀 Quick Installation

### Step 1: Install the Theme

1. Log in to your WordPress admin panel
2. Go to **Appearance → Themes → Add New**
3. Click **Upload Theme**
4. Choose the `mounee-consulting.zip` file
5. Click **Install Now**
6. Once installed, click **Activate**

### Step 2: Initial Setup (5 minutes)

#### 2.1 Upload Logo
1. Go to **Appearance → Customize → Site Identity**
2. Click **Select Logo**
3. Upload: `/assets/images/Mounee-COnsulting-Services-1-1-1-300x74.png`
4. Click **Publish**

#### 2.2 Create Main Menu
1. Go to **Appearance → Menus**
2. Create a new menu called "Main Menu"
3. Add these Custom Links:
   - **Home** → `#home`
   - **About** → `#about`
   - **Services** → `#services`
   - **Team** → `#team`
   - **Gallery** → `#gallery`
   - **Contact** → `#contact`
4. Check **Primary Menu** under Menu Settings
5. Click **Save Menu**

#### 2.3 Set Homepage
1. Go to **Settings → Reading**
2. Select **A static page**
3. Homepage: (WordPress will auto-detect the front-page.php)
4. Posts page: Create a new page called "Blog"
5. Click **Save Changes**

#### 2.4 Customize Hero Section
1. Go to **Appearance → Customize → Hero Section**
2. Verify/adjust:
   - Hero Title: "Helping Companies Hire the Right Talent"
   - Hero Subtitle: "Expert recruitment solutions for finding exceptional talent that drives your business forward."
   - Primary CTA: "Find Your Next Hire" → `#contact`
   - Secondary CTA: "Our Services" → `#services`
3. Click **Publish**

#### 2.5 Set Contact Information
1. Go to **Appearance → Customize → Contact Information**
2. Enter:
   - Email: parul.sharma@mouneeconsulting.org
   - Phone: Your phone number
   - Address: Your full address
3. Click **Publish**

### Step 3: Install Contact Form 7 (Recommended)

1. Go to **Plugins → Add New**
2. Search for "Contact Form 7"
3. Click **Install Now**, then **Activate**
4. Go to **Contact → Contact Forms**
5. Copy the shortcode from the default form (e.g., `[contact-form-7 id="123"]`)
6. Edit `front-page.php` via **Appearance → Theme File Editor**
7. Find line ~875 (search for `.form-placeholder`)
8. Replace the placeholder div with:
   ```php
   <?php echo do_shortcode('[contact-form-7 id="123"]'); ?>
   ```
9. Click **Update File**

### Step 4: Setup Footer Widgets (Optional)

1. Go to **Appearance → Widgets**
2. Add widgets to the three footer areas:

**Footer Widget 1 - About:**
- Add a **Text** widget
- Title: "About Mounee Consulting"
- Content: Your company description

**Footer Widget 2 - Quick Links:**
- Add a **Navigation Menu** widget
- Select your Main Menu or create a custom one

**Footer Widget 3 - Contact:**
- Add a **Text** widget
- Title: "Get In Touch"
- Content: Your contact information

## ✅ What's Included

### Complete WordPress Theme Files
- `style.css` - Theme information and WordPress header
- `functions.php` - All theme functionality and WordPress integration
- `header.php` - Header and navigation
- `footer.php` - Footer with widget areas
- `front-page.php` - **Main homepage with all sections**
- `index.php` - Blog archive template
- `page.php` - Single page template
- `single.php` - Single blog post template
- `404.php` - Error page

### Assets
- `assets/css/main.css` - Complete responsive stylesheet (24KB)
- `assets/js/main.js` - Interactive features and animations (9KB)
- `assets/images/` - All logos, team photos, gallery images, icons

### Homepage Sections (All Pre-Built!)
1. ✅ Hero Section - Recruitment-first messaging with process steps
2. ✅ About Section - Company info with stats
3. ✅ Services Section - Recruitment (featured), Training, Wellness
4. ✅ Why Choose Us - 4 key differentiators
5. ✅ Industries - 6 sector icons
6. ✅ Team Section - 3 team members with photos + extended team
7. ✅ Gallery - 8 event/workshop photos
8. ✅ Partners - 2 partner logos
9. ✅ Testimonials - 3 placeholder testimonials
10. ✅ CTA Banner - "Ready to Build Your Dream Team?"
11. ✅ Contact Section - Contact info + form placeholder

## 🎨 Design Features

### Color Scheme
- Deep Navy: `#0B1D3A` (primary)
- Blue: `#1E5FBB` (accent)
- Amber: `#F59E0B` (call-to-action)
- Clean whites and grays

### Typography
- **Headings:** Playfair Display (elegant serif)
- **Body:** Inter (clean, modern sans-serif)
- Both loaded from Google Fonts

### Responsive Design
- ✅ Desktop (1200px+)
- ✅ Tablet (768px - 1199px)
- ✅ Mobile (320px - 767px)
- Mobile-first approach
- Touch-friendly navigation

### Interactive Features
- Smooth scrolling to sections
- Sticky header with shadow on scroll
- Mobile hamburger menu
- Hover animations on cards
- Fade-in animations on scroll
- Back-to-top button
- Active menu highlighting

## 📝 Content Customization

All content can be customized via:
1. **WordPress Customizer** (no coding required)
   - Hero section text and CTAs
   - Contact information
   - Logo and site identity

2. **File Editing** (for advanced changes)
   - `front-page.php` - Edit section content
   - `assets/css/main.css` - Adjust styling
   - `functions.php` - Modify functionality

## 🔧 Technical Details

### Requirements
- WordPress 5.0 or higher
- PHP 7.0 or higher
- Modern web browser

### No External Dependencies
- Only external resource: Google Fonts
- No jQuery required
- No Bootstrap or other frameworks
- Lightweight and fast

### WordPress Features Supported
- Custom Logo
- Navigation Menus (Primary & Footer)
- Widget Areas (3 footer widgets)
- Featured Images
- Post Thumbnails
- Custom Customizer Settings
- HTML5 markup
- Responsive Embeds

## 📞 Support

For questions or customization:
- Email: parul.sharma@mouneeconsulting.org
- Website: https://mouneeconsulting.org

## 🎯 Next Steps After Installation

1. ✅ Install and activate the theme
2. ✅ Complete the initial setup (Steps 2.1 - 2.5 above)
3. ✅ Install Contact Form 7 and integrate it
4. ✅ Add footer widgets
5. ✅ Review and adjust content in `front-page.php`
6. ✅ Test on mobile devices
7. ✅ Set up SEO plugin (Yoast SEO recommended)
8. ✅ Enable caching (WP Super Cache recommended)
9. ✅ Go live!

## 📸 Preview

The theme includes:
- Hero with recruitment process visualization
- Company stats (2 offices, 50+ customers, 20+ employees, 20+ projects)
- 3 service cards with recruitment featured
- 4 "Why Choose Us" features
- 6 industry icons
- 3 team member photos + extended team mention
- 8 gallery images from recent events
- 2 partner logos
- Professional contact section

Everything is ready to go live immediately after installation!

---

**Theme Version:** 1.0.0  
**Build Date:** March 1, 2026  
**Built for:** Mounee Consulting  
**Focus:** Recruitment Agency Website
