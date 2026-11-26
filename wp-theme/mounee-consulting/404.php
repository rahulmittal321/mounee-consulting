<?php /* 404 — Meridian style (Nov 2026). Previous: 404-backup-nov26.php */
add_action( 'wp_enqueue_scripts', function () { wp_dequeue_style( 'mounee-consulting-style' ); wp_dequeue_style( 'mounee-google-fonts' ); wp_dequeue_script( 'mounee-consulting-script' ); }, 100 );
status_header( 404 ); ?><!doctype html><html <?php language_attributes(); ?>><head><meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&family=Playfair+Display:ital,wght@0,500;1,500&display=swap" rel="stylesheet">
<style>*{box-sizing:border-box;margin:0;padding:0}body{font-family:Inter,sans-serif;background:#0B1D3A;color:#fff;min-height:100vh;display:flex;flex-direction:column;-webkit-font-smoothing:antialiased}
header{padding:22px 6vw}header img{height:64px}main{flex:1;display:flex;flex-direction:column;justify-content:center;padding:40px 6vw 80px;max-width:900px}
.eyebrow{font-size:12px;letter-spacing:.28em;text-transform:uppercase;color:#F59E0B;display:flex;align-items:center;gap:14px}.eyebrow:before{content:"";width:40px;height:1px;background:#F59E0B}
h1{font-family:'Playfair Display';font-weight:500;font-size:clamp(40px,6vw,84px);line-height:1.05;margin:26px 0}h1 em{color:#F59E0B}p{font-size:18px;font-weight:300;opacity:.8;line-height:1.6;max-width:520px}
.btns{display:flex;gap:16px;margin-top:38px;flex-wrap:wrap}.b1{background:#F59E0B;color:#0B1D3A;padding:17px 30px;font-weight:600;font-size:13px;letter-spacing:.12em;text-transform:uppercase;text-decoration:none}.b2{color:#fff;padding:17px 4px;font-size:13px;letter-spacing:.12em;text-transform:uppercase;text-decoration:none;border-bottom:1px solid rgba(255,255,255,.4)}
footer{padding:26px 6vw;font-size:12px;opacity:.5;border-top:1px solid rgba(255,255,255,.1)}</style>
<?php wp_head(); ?></head><body <?php body_class(); ?>><?php wp_body_open(); ?>
<header><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="https://mouneeconsulting.org/wp-content/uploads/2026/11/logo_color-1.png" alt="Mounee Consulting Services"></a></header>
<main><div class="eyebrow">Error 404</div><h1>This page has <em>moved on.</em></h1><p>The page you're looking for doesn't exist or has been moved. Let's get you back to finding great people.</p>
<div class="btns"><a class="b1" href="<?php echo esc_url( home_url( '/' ) ); ?>">Back to Home →</a><a class="b2" href="<?php echo esc_url( home_url( '/#contact' ) ); ?>">Contact Us →</a></div></main>
<footer>© 2026 Mounee Consulting Services Pvt. Ltd. · Gurugram, India</footer>
<?php wp_footer(); ?></body></html>
