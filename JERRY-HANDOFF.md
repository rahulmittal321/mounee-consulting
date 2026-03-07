# Jerry Handoff — Mounee Consulting

## ⚠️ CREDENTIALS (fill in and save to your memory, then delete from this file)
- **WordPress Admin URL:** mouneeconsulting.org/wp-admin
- **WordPress Username:** [ASK RAHUL/PARUL]
- **WordPress Password:** [ASK RAHUL/PARUL]
- **Hosting Provider:** [ASK — likely Hostinger or similar]
- **SFTP/SSH Host:** [ASK]
- **SFTP/SSH User:** [ASK]
- **SFTP/SSH Password:** [ASK]
- **Domain Registrar:** [ASK if needed]

## What This Project Is
Mounee Consulting (mouneeconsulting.org) is a recruitment agency website for Dr. Parul Sharma (Rahul's wife). It's a WordPress theme built from scratch.

## Project Location
`/data/.openclaw/workspace/mounee-consulting/`

### Key Files
- `wp-theme/mounee-consulting/` — the full WordPress theme
- `wp-theme/mounee-consulting.zip` — installable package
- `THEME-BUILD-SUMMARY.md` — complete build docs (read this first)
- `INSTALLATION-GUIDE.md` — setup instructions
- `index.html` — standalone preview (pre-WordPress)

### Theme Structure
```
wp-theme/mounee-consulting/
├── style.css            — Theme header + base styles
├── functions.php        — WordPress integration (255 lines)
├── header.php           — Responsive nav
├── footer.php           — 3-column footer
├── front-page.php       — Homepage (11 sections, 482 lines)
├── index.php            — Blog archive
├── page.php             — Static pages
├── single.php           — Blog posts
├── 404.php              — Error page
├── assets/
│   ├── css/main.css     — All styles (1,267 lines)
│   ├── js/main.js       — Interactive features (289 lines)
│   └── images/          — 24 images (logos, team, gallery)
└── README.md            — Full docs
```

## Design System
- **Primary:** Deep Navy `#0B1D3A`
- **Accent:** Blue `#1E5FBB`
- **CTA:** Amber `#F59E0B`
- **Fonts:** Playfair Display (headings) + Inter (body) via Google Fonts
- **Approach:** Mobile-first responsive

## Homepage Sections (11)
1. Hero — recruitment headline + 4-step process visualization
2. About — company info + stats (2 offices, 50+ customers, 20+ team)
3. Services — Recruitment (featured), Training, Wellness
4. Why Choose Us — 4 differentiators
5. Industries — Aviation, Hospitality, Automotive, Retail, Real Estate, Education
6. Team — Dr. Parul Sharma (Founder), Dr. Veenu Bansal, Akansha Gaur
7. Gallery — 8 event/workshop photos
8. Partners — MindXL + partner org
9. Testimonials — 3 placeholder quotes
10. CTA Banner
11. Contact — email: parul.sharma@mouneeconsulting.org

## Contact Info
- **Owner:** Dr. Parul Sharma (Rahul's wife)
- **Email:** parul.sharma@mouneeconsulting.org
- **Domain:** mouneeconsulting.org

## Important Notes
- Theme is production-ready (v1.0.0, built March 1, 2026)
- WordPress Customizer integration for hero text, CTAs, contact info
- Contact Form 7 placeholder included — needs plugin installed
- No external dependencies except Google Fonts
- All assets bundled in theme (2.3 MB total)

## What Jerry Might Need To Do
- Content updates (text, images, team members)
- Add new sections or pages
- Style tweaks
- WordPress plugin integration
- SEO improvements
- Blog setup
- Any changes Dr. Parul requests

## How To Test Changes
1. Edit files in `wp-theme/mounee-consulting/`
2. Re-zip: `cd wp-theme && zip -r mounee-consulting.zip mounee-consulting/`
3. Upload to WordPress via Appearance → Themes → Add New → Upload
4. Or if direct server access: copy theme folder to `wp-content/themes/`
