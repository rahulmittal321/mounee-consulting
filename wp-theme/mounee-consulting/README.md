# Mounee Consulting WordPress Theme

A professional recruitment agency theme for Mounee Consulting, showcasing talent acquisition services, corporate training, and wellness programs.

## Theme Information

- **Theme Name:** Mounee Consulting
- **Version:** 1.0.0
- **Author:** Mounee Consulting
- **License:** GPL v2 or later

## Description

This custom WordPress theme is designed specifically for Mounee Consulting, a recruitment agency that helps companies hire the right talent. The theme features:

- Recruitment-first messaging and design
- Modern, responsive layout that works on all devices
- Professional color scheme (Deep Navy, Blue, Amber)
- Google Fonts integration (Inter & Playfair Display)
- Custom sections for services, team, gallery, and more
- WordPress Customizer support for easy content management

## Installation

### Method 1: WordPress Admin (Recommended)

1. Download or create the theme zip file: `mounee-consulting.zip`
2. Log in to your WordPress admin panel
3. Go to **Appearance → Themes → Add New**
4. Click **Upload Theme**
5. Choose the `mounee-consulting.zip` file
6. Click **Install Now**
7. Once installed, click **Activate**

### Method 2: Manual Installation

1. Download the theme folder
2. Upload the entire `mounee-consulting` folder to `/wp-content/themes/`
3. Log in to WordPress admin
4. Go to **Appearance → Themes**
5. Find "Mounee Consulting" and click **Activate**

## Initial Setup

### 1. Upload Your Logo

1. Go to **Appearance → Customize → Site Identity**
2. Click **Select Logo** and upload your logo image
3. Recommended logo dimensions: 300x100px (transparent PNG)
4. Click **Publish** to save

### 2. Create Navigation Menu

1. Go to **Appearance → Menus**
2. Create a new menu (e.g., "Main Menu")
3. Add the following menu items:
   - Custom Link: **Home** → `#home`
   - Custom Link: **About** → `#about`
   - Custom Link: **Services** → `#services`
   - Custom Link: **Team** → `#team`
   - Custom Link: **Gallery** → `#gallery`
   - Custom Link: **Contact** → `#contact`
4. Under "Menu Settings", check **Primary Menu**
5. Click **Save Menu**

### 3. Customize Hero Section

1. Go to **Appearance → Customize → Hero Section**
2. Customize the following:
   - **Hero Title:** Default is "Helping Companies Hire the Right Talent"
   - **Hero Subtitle:** Your value proposition
   - **Primary CTA Button Text:** e.g., "Find Your Next Hire"
   - **Primary CTA Link:** e.g., `#contact` or contact page URL
   - **Secondary CTA Button Text:** e.g., "Our Services"
   - **Secondary CTA Link:** e.g., `#services`
3. Click **Publish**

### 4. Set Contact Information

1. Go to **Appearance → Customize → Contact Information**
2. Enter:
   - **Email Address:** parul.sharma@mouneeconsulting.org
   - **Phone Number:** Your phone number
   - **Address:** Your full address
3. Click **Publish**

### 5. Set Homepage Display

1. Go to **Settings → Reading**
2. Under "Your homepage displays", select **A static page**
3. Homepage: Select **Front Page** (WordPress will auto-detect `front-page.php`)
4. Posts page: Select or create a "Blog" page
5. Click **Save Changes**

## Contact Form Setup

The theme includes a placeholder for a contact form. To enable the contact form:

### Option 1: Contact Form 7 (Recommended)

1. Install and activate **Contact Form 7** plugin
2. Go to **Contact → Contact Forms**
3. Create a new form or use the default form
4. Copy the shortcode (e.g., `[contact-form-7 id="123"]`)
5. Edit `front-page.php` (line ~875)
6. Replace the `.form-placeholder` div with your shortcode:
   ```php
   <?php echo do_shortcode('[contact-form-7 id="123"]'); ?>
   ```

### Option 2: Other Form Plugins

You can use any WordPress form plugin:
- WPForms
- Gravity Forms
- Ninja Forms
- Formidable Forms

Just replace the placeholder in `front-page.php` with your form shortcode.

## Footer Widgets

The theme includes 3 footer widget areas:

1. Go to **Appearance → Widgets**
2. You'll see three widget areas:
   - **Footer Widget 1**
   - **Footer Widget 2**
   - **Footer Widget 3**
3. Add widgets like:
   - Text widget for "About Us"
   - Navigation Menu for "Quick Links"
   - Text widget for "Contact Info"

## Customization Tips

### Changing Colors

Edit `/assets/css/main.css` and modify the CSS variables at the top:

```css
:root {
    --color-navy: #0B1D3A;      /* Main dark color */
    --color-blue: #1E5FBB;      /* Primary blue */
    --color-amber: #F59E0B;     /* Accent color */
}
```

### Adding More Gallery Images

1. Edit `front-page.php`
2. Find the Gallery Section (around line 630)
3. Add more gallery items:
   ```php
   <div class="gallery-item">
       <img src="<?php echo get_template_directory_uri(); ?>/assets/images/your-image.jpg" alt="Description">
   </div>
   ```

### Editing Team Members

1. Edit `front-page.php`
2. Find the Team Section (around line 570)
3. Modify team member information or add new members

### Changing Fonts

The theme uses Google Fonts. To change fonts:

1. Edit `functions.php`
2. Find the `mounee_consulting_scripts()` function
3. Change the Google Fonts URL to your preferred fonts
4. Update CSS variables in `main.css`:
   ```css
   --font-body: 'YourBodyFont', sans-serif;
   --font-heading: 'YourHeadingFont', serif;
   ```

## File Structure

```
mounee-consulting/
├── assets/
│   ├── css/
│   │   └── main.css           # Main stylesheet
│   ├── js/
│   │   └── main.js            # JavaScript functionality
│   └── images/                # Theme images
│       ├── 10.jpg             # Hero background
│       ├── about.jpg          # About section image
│       ├── *.png              # Logos, icons, team photos
│       └── ...
├── template-parts/            # Template part files (for future use)
├── 404.php                    # 404 error page
├── footer.php                 # Footer template
├── front-page.php             # Homepage template (MAIN PAGE)
├── functions.php              # Theme functions & setup
├── header.php                 # Header template
├── index.php                  # Blog archive template
├── page.php                   # Single page template
├── single.php                 # Single post template
├── style.css                  # Theme info (WordPress required)
├── screenshot.png             # Theme screenshot
└── README.md                  # This file
```

## Key Features

### 🎨 Design
- Clean, modern, professional design
- Recruitment-first messaging
- Mobile-responsive (works on all devices)
- Smooth scrolling and animations
- Professional color scheme

### 📱 Responsive
- Mobile-first design approach
- Hamburger menu on mobile devices
- Optimized layouts for tablet and mobile
- Touch-friendly navigation

### ⚙️ WordPress Features
- Custom logo support
- Navigation menus (Primary & Footer)
- Widget areas (3 footer widgets)
- WordPress Customizer integration
- Blog and page templates included

### 🚀 Performance
- Lightweight codebase
- No external dependencies (except Google Fonts)
- Optimized images
- Clean, semantic HTML5

## Browser Support

- Chrome (latest)
- Firefox (latest)
- Safari (latest)
- Edge (latest)
- Mobile browsers (iOS Safari, Chrome Mobile)

## Recommended Plugins

While the theme works standalone, these plugins enhance functionality:

1. **Contact Form 7** - For contact forms
2. **Yoast SEO** - For search engine optimization
3. **Wordfence Security** - For security
4. **WP Super Cache** - For performance
5. **Akismet** - For spam protection

## Support & Customization

For theme support or customization requests:
- Email: parul.sharma@mouneeconsulting.org
- Website: https://mouneeconsulting.org

## Credits

- **Design & Development:** Custom theme for Mounee Consulting
- **Fonts:** Google Fonts (Inter & Playfair Display)
- **Icons:** Heroicons (embedded SVG)
- **Photos:** Mounee Consulting event and team photos

## Changelog

### Version 1.0.0 - March 2026
- Initial release
- Complete homepage with all sections
- Responsive design
- WordPress Customizer integration
- Mobile navigation
- Blog templates
- Footer widgets

## License

This theme is licensed under the GPL v2 or later.

---

**Made with ❤️ for Mounee Consulting**

*Helping Companies Hire the Right Talent*
