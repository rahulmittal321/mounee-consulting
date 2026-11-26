<!-- SECTION 0: RENEWABLE ENERGY PHOTO STRIP (scrolls left to right) -->
    <?php $re_imgs = array(
        array('re1.jpg','Solar power plant'),
        array('re2.jpg','Wind farm and transmission lines'),
        array('re3.jpg','Floating solar, Chandigarh'),
        array('re4.jpg','Offshore wind farm'),
        array('re5.jpg','Hydroelectric dam'),
        array('re6.jpg','Wind turbine'),
    ); ?>
    <section class="re-strip" aria-label="Renewable energy">
        <div class="re-strip-track">
            <?php for ($loop = 0; $loop < 2; $loop++) : foreach ($re_imgs as $img) : ?>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/renewable/<?php echo $img[0]; ?>" alt="<?php echo $loop ? '' : esc_attr($img[1]); ?>" loading="eager" width="360" height="200">
            <?php endforeach; endfor; ?>
        </div>
        <a class="re-strip-credit" href="https://commons.wikimedia.org" target="_blank" rel="noopener">Photos: Wikimedia Commons, CC BY-SA</a>
    </section>
    <style>
        .re-strip{position:relative;overflow:hidden;background:#0B1D3A;padding:10px 0;margin-top:84px}
        body:has(.re-strip) .hero-section{margin-top:0 !important;padding-top:60px !important}
        .re-strip-track{display:flex;gap:10px;width:max-content;animation:reStripLTR 45s linear infinite}
        .re-strip:hover .re-strip-track{animation-play-state:paused}
        .re-strip img{height:200px;width:auto;aspect-ratio:9/5;object-fit:cover;border-radius:6px;display:block;flex:none}
        .re-strip-credit{position:absolute;right:10px;bottom:4px;font:10px/1.4 Inter,sans-serif;color:rgba(255,255,255,.6);text-decoration:none}
        @keyframes reStripLTR{from{transform:translateX(calc(-50% - 5px))}to{transform:translateX(0)}}
        @media (max-width:768px){.re-strip{margin-top:98px}.re-strip img{height:130px}}
        @media (max-width:480px){.re-strip img{height:100px}}
        @media (prefers-reduced-motion:reduce){.re-strip-track{animation:none}}
    </style>
