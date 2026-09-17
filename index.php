<?php
/**
 * Main Template File & Agency Front-Page Layout
 *
 * @package Lemon_Media_Company
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

get_header();
?>

<main>
    <!-- Hero Banner Section -->
    <section id="top" class="shell hero">
        <div class="hero-copy reveal">
            <p class="eyebrow">
                <span></span> <?php echo esc_html( get_theme_mod( 'hero_eyebrow', __( 'Creative growth agency — Delhi · Mumbai', 'lemon-media' ) ) ); ?>
            </p>
            <h1>
                <?php
                $hero_title = get_theme_mod( 'hero_title', __( 'We make brands impossible to ignore.', 'lemon-media' ) );
                echo wp_kses_post( $hero_title );
                ?>
            </h1>
            <p class="hero-intro">
                <?php echo esc_html( get_theme_mod( 'hero_subtitle', __( 'A full-service studio for brands that want to be seen, chosen and remembered. Strategy, content, performance, branding and digital — all under one roof.', 'lemon-media' ) ) ); ?>
            </p>
            <div class="hero-actions">
                <?php if ( get_theme_mod( 'hero_btn_1_text', __( 'See the work', 'lemon-media' ) ) ) : ?>
                    <a class="lemon-button" href="<?php echo esc_url( get_theme_mod( 'hero_btn_1_url', '#work' ) ); ?>">
                        <?php echo esc_html( get_theme_mod( 'hero_btn_1_text', __( 'See the work', 'lemon-media' ) ) ); ?>
                        <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-down-right" aria-hidden="true"><path d="m7 7 10 10"></path><path d="M17 7v10H7"></path></svg>
                    </a>
                <?php endif; ?>

                <?php if ( get_theme_mod( 'hero_btn_2_text', __( 'Explore services', 'lemon-media' ) ) ) : ?>
                    <a class="line-button" href="<?php echo esc_url( get_theme_mod( 'hero_btn_2_url', '#services' ) ); ?>">
                        <?php echo esc_html( get_theme_mod( 'hero_btn_2_text', __( 'Explore services', 'lemon-media' ) ) ); ?>
                    </a>
                <?php endif; ?>
            </div>
        </div>

        <figure class="hero-visual reveal delay-1">
            <?php
            $hero_img = get_theme_mod( 'hero_image' );
            if ( $hero_img ) :
                ?>
                <img src="<?php echo esc_url( $hero_img ); ?>" alt="<?php esc_attr_e( 'Lemon Media Agency', 'lemon-media' ); ?>">
            <?php else : ?>
                <div style="background: linear-gradient(135deg, #1f2937, #374151); border-radius:var(--radius); height:520px; display:flex; align-items:center; justify-content:center; text-align:center; padding:40px; border:1px solid rgba(255,255,255,0.1);">
                    <div>
                        <span style="font-size:3rem; display:block; margin-bottom:10px;">🍋</span>
                        <h3 style="color:#fff; font-size:1.8rem; font-family:Syne, sans-serif;"><?php esc_html_e( 'Fresh thinking. Sharp results.', 'lemon-media' ); ?></h3>
                        <p style="color:#9ca3af; font-size:0.95rem; margin-top:8px;"><?php esc_html_e( 'Upload custom hero image in Customizer', 'lemon-media' ); ?></p>
                    </div>
                </div>
            <?php endif; ?>
            <figcaption>
                <span><?php esc_html_e( 'Fresh thinking.', 'lemon-media' ); ?></span>
                <span><?php esc_html_e( 'Sharp results.', 'lemon-media' ); ?></span>
            </figcaption>
        </figure>
    </section>

    <!-- Capability Band -->
    <div class="capability-band">
        <div class="shell capability-inner">
            <span class="eyebrow-label"><?php echo esc_html( get_theme_mod( 'capability_label', __( 'Everything in-house', 'lemon-media' ) ) ); ?></span>
            <div>
                <?php echo esc_html( get_theme_mod( 'capability_items', __( 'Content · Performance · Influencer · Branding · Packaging · Web · Talent', 'lemon-media' ) ) ); ?>
            </div>
        </div>
    </div>

    <!-- Our Clients & Stats Section -->
    <section id="clients" class="shell stats" aria-label="<?php esc_attr_e( 'Our Clients & Credibility', 'lemon-media' ); ?>">
        <div>
            <strong><?php echo esc_html( get_theme_mod( 'stat_1_num', '350+' ) ); ?></strong>
            <span><?php echo esc_html( get_theme_mod( 'stat_1_lbl', __( 'Brands worked with', 'lemon-media' ) ) ); ?></span>
        </div>
        <div>
            <strong><?php echo esc_html( get_theme_mod( 'stat_2_num', '25K+' ) ); ?></strong>
            <span><?php echo esc_html( get_theme_mod( 'stat_2_lbl', __( 'Leads & followers generated', 'lemon-media' ) ) ); ?></span>
        </div>
        <div>
            <strong><?php echo esc_html( get_theme_mod( 'stat_3_num', '02' ) ); ?></strong>
            <span><?php echo esc_html( get_theme_mod( 'stat_3_lbl', __( 'Studios — Delhi & Mumbai', 'lemon-media' ) ) ); ?></span>
        </div>
        <div>
            <strong><?php echo esc_html( get_theme_mod( 'stat_4_num', '07' ) ); ?></strong>
            <span><?php echo esc_html( get_theme_mod( 'stat_4_lbl', __( 'Disciplines, one team', 'lemon-media' ) ) ); ?></span>
        </div>
    </section>

    <!-- Our Work Section -->
    <section id="work" class="shell section-block">
        <div class="section-heading">
            <div>
                <p class="eyebrow-label"><?php esc_html_e( 'Selected work', 'lemon-media' ); ?></p>
                <h2><?php esc_html_e( 'Built to perform.', 'lemon-media' ); ?><br><em><?php esc_html_e( 'Designed to last.', 'lemon-media' ); ?></em></h2>
            </div>
            <a class="text-link" href="#contact">
                <?php esc_html_e( 'Build yours', 'lemon-media' ); ?>
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-up-right" aria-hidden="true"><path d="M7 7h10v10"></path><path d="M7 17 17 7"></path></svg>
            </a>
        </div>

        <div class="work-grid">
            <article class="project project-one">
                <div class="project-image">
                    <?php
                    $p1_img = get_theme_mod( 'project_1_image' );
                    if ( $p1_img ) :
                        ?>
                        <img src="<?php echo esc_url( $p1_img ); ?>" alt="<?php echo esc_attr( get_theme_mod( 'project_1_title', 'Citrus & Co.' ) ); ?>">
                    <?php else : ?>
                        <div style="background:linear-gradient(135deg, #374151, #1f2937); aspect-ratio:4/3; display:flex; align-items:center; justify-content:center; color:#fff; font-family:Syne, sans-serif; font-size:1.5rem; text-align:center; padding:20px;">
                            <?php echo esc_html( get_theme_mod( 'project_1_title', 'Citrus & Co.' ) ); ?>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="project-meta">
                    <div>
                        <p class="project-number"><?php echo esc_html( get_theme_mod( 'project_1_num', '01 / Brand launch' ) ); ?></p>
                        <h3><?php echo esc_html( get_theme_mod( 'project_1_title', 'Citrus & Co.' ) ); ?></h3>
                        <span><?php echo esc_html( get_theme_mod( 'project_1_services', 'Branding · Packaging · Social' ) ); ?></span>
                    </div>
                    <strong><?php echo esc_html( get_theme_mod( 'project_1_stat_num', '1.2M' ) ); ?><small><?php echo esc_html( get_theme_mod( 'project_1_stat_lbl', 'campaign views' ) ); ?></small></strong>
                </div>
            </article>

            <article class="project project-two">
                <div class="project-image">
                    <?php
                    $p2_img = get_theme_mod( 'project_2_image' );
                    if ( $p2_img ) :
                        ?>
                        <img src="<?php echo esc_url( $p2_img ); ?>" alt="<?php echo esc_attr( get_theme_mod( 'project_2_title', 'Velvet Skin' ) ); ?>">
                    <?php else : ?>
                        <div style="background:linear-gradient(135deg, #1f2937, #111827); aspect-ratio:4/3; display:flex; align-items:center; justify-content:center; color:#fff; font-family:Syne, sans-serif; font-size:1.5rem; text-align:center; padding:20px;">
                            <?php echo esc_html( get_theme_mod( 'project_2_title', 'Velvet Skin' ) ); ?>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="project-meta">
                    <div>
                        <p class="project-number"><?php echo esc_html( get_theme_mod( 'project_2_num', '02 / D2C growth' ) ); ?></p>
                        <h3><?php echo esc_html( get_theme_mod( 'project_2_title', 'Velvet Skin' ) ); ?></h3>
                        <span><?php echo esc_html( get_theme_mod( 'project_2_services', 'Web · Content · Performance' ) ); ?></span>
                    </div>
                    <strong><?php echo esc_html( get_theme_mod( 'project_2_stat_num', '3.4×' ) ); ?><small><?php echo esc_html( get_theme_mod( 'project_2_stat_lbl', 'return on ad spend' ) ); ?></small></strong>
                </div>
            </article>
        </div>
    </section>

    <!-- Our Services Section (7 core services) -->
    <section id="services" class="dark-section">
        <div class="shell services-layout">
            <div class="services-intro">
                <p class="eyebrow-label"><?php esc_html_e( 'What we do', 'lemon-media' ); ?></p>
                <h2><?php esc_html_e( 'One team.', 'lemon-media' ); ?><br><em><?php esc_html_e( 'Every touchpoint.', 'lemon-media' ); ?></em></h2>
                <p><?php esc_html_e( 'No hand-offs, no diluted thinking. Specialists work together from first brief to final result.', 'lemon-media' ); ?></p>
            </div>

            <?php
            $services_slugs = array(
                1 => 'social-media',
                2 => 'content-creation',
                3 => 'photography-videography',
                4 => 'performance-marketing',
                5 => 'influencer-marketing',
                6 => 'website-development',
                7 => 'brand-packaging-design',
            );

            $defaults = array(
                1 => array( 'title' => 'Our Social Media Services', 'desc' => 'Campaigns, films, stills & social storytelling' ),
                2 => array( 'title' => 'Content Creation', 'desc' => 'Captivating graphics, copywriting, reels, and video content' ),
                3 => array( 'title' => 'Photography & Videography', 'desc' => 'Professional studio photography and high-end video production' ),
                4 => array( 'title' => 'Performance Marketing', 'desc' => 'Paid media, CRO & data-driven conversion funnels' ),
                5 => array( 'title' => 'Influencer Marketing', 'desc' => 'Strategic creator partnerships and viral activations' ),
                6 => array( 'title' => 'Website Development', 'desc' => 'Fast, expressive, conversion-led sites' ),
                7 => array( 'title' => 'Brand And Packaging Design', 'desc' => 'Positioning, voice, visual systems & shelf presence' ),
            );
            ?>

            <ol class="service-list">
                <?php for ( $i = 1; $i <= 7; $i++ ) :
                    $stitle = get_theme_mod( "service_{$i}_title", $defaults[$i]['title'] );
                    $sdesc  = get_theme_mod( "service_{$i}_desc", $defaults[$i]['desc'] );
                    $slug   = $services_slugs[$i];
                    ?>
                    <li id="<?php echo esc_attr( $slug ); ?>">
                        <span>0<?php echo $i; ?></span>
                        <h3><?php echo esc_html( $stitle ); ?></h3>
                        <p><?php echo esc_html( $sdesc ); ?></p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-up-right" aria-hidden="true"><path d="M7 7h10v10"></path><path d="M7 17 17 7"></path></svg>
                    </li>
                <?php endfor; ?>
            </ol>
        </div>
    </section>

    <!-- Our Story Section / Studio -->
    <section id="story" class="shell studio-section">
        <div class="studio-image">
            <?php
            $studio_img = get_theme_mod( 'studio_image' );
            if ( $studio_img ) :
                ?>
                <img src="<?php echo esc_url( $studio_img ); ?>" alt="<?php esc_attr_e( 'Lemon Media Studio', 'lemon-media' ); ?>">
            <?php else : ?>
                <div style="background: linear-gradient(135deg, #111827, #1f2937); aspect-ratio:4/5; border-radius:var(--radius); display:flex; align-items:center; justify-content:center; color:#fff; font-family:Syne, sans-serif; font-size:1.8rem; text-align:center; padding:30px;">
                    Lemon Media Studio
                </div>
            <?php endif; ?>
            <span class="image-stamp"><?php esc_html_e( 'Ideas grow better together', 'lemon-media' ); ?></span>
        </div>

        <div class="studio-copy">
            <p class="eyebrow-label"><?php echo esc_html( get_theme_mod( 'story_subtitle', __( 'The studio', 'lemon-media' ) ) ); ?></p>
            <h2><?php echo esc_html( get_theme_mod( 'story_title', __( 'Close-knit by design. Big in ambition.', 'lemon-media' ) ) ); ?></h2>
            <p>
                <?php echo esc_html( get_theme_mod( 'story_desc', __( 'Strategy, design, media and production sit side by side in Delhi and Mumbai. Fewer layers mean sharper decisions, faster making and work that holds together from brief to broadcast.', 'lemon-media' ) ) ); ?>
            </p>
            <blockquote>“We don’t make more content. We make every piece mean more.”</blockquote>
            <div class="city-grid">
                <div>
                    <strong><?php echo esc_html( get_theme_mod( 'studio_city_1_name', 'Delhi' ) ); ?></strong>
                    <span><?php echo esc_html( get_theme_mod( 'studio_city_1_desc', 'Strategy & production' ) ); ?></span>
                </div>
                <div>
                    <strong><?php echo esc_html( get_theme_mod( 'studio_city_2_name', 'Mumbai' ) ); ?></strong>
                    <span><?php echo esc_html( get_theme_mod( 'studio_city_2_desc', 'Media & talent' ) ); ?></span>
                </div>
            </div>
        </div>
    </section>

    <!-- Process Section -->
    <section id="process" class="process-section">
        <div class="shell">
            <div class="section-heading">
                <div>
                    <p class="eyebrow-label"><?php esc_html_e( 'How we work', 'lemon-media' ); ?></p>
                    <h2><?php esc_html_e( 'Clarity before', 'lemon-media' ); ?><br><em><?php esc_html_e( 'creativity.', 'lemon-media' ); ?></em></h2>
                </div>
                <p class="section-note"><?php esc_html_e( 'A rigorous process that keeps brave ideas commercially grounded.', 'lemon-media' ); ?></p>
            </div>

            <ol class="process-grid">
                <li>
                    <span>01</span>
                    <h3><?php esc_html_e( 'Discover', 'lemon-media' ); ?></h3>
                    <p><?php esc_html_e( 'We unpack the category, audience and commercial problem before touching a pixel.', 'lemon-media' ); ?></p>
                </li>
                <li>
                    <span>02</span>
                    <h3><?php esc_html_e( 'Define', 'lemon-media' ); ?></h3>
                    <p><?php esc_html_e( 'One sharp idea becomes the strategic and visual north star for every channel.', 'lemon-media' ); ?></p>
                </li>
                <li>
                    <span>03</span>
                    <h3><?php esc_html_e( 'Create', 'lemon-media' ); ?></h3>
                    <p><?php esc_html_e( 'Our in-house team turns the system into content, design, media and digital experiences.', 'lemon-media' ); ?></p>
                </li>
                <li>
                    <span>04</span>
                    <h3><?php esc_html_e( 'Compound', 'lemon-media' ); ?></h3>
                    <p><?php esc_html_e( 'We launch, learn and optimise against the metrics that actually move your business.', 'lemon-media' ); ?></p>
                </li>
            </ol>
        </div>
    </section>

    <!-- Quote Band -->
    <section class="quote-band">
        <div class="shell quote-inner">
            <span>“</span>
            <blockquote><?php esc_html_e( 'They didn’t just refresh how we looked. They sharpened how the whole business showed up.', 'lemon-media' ); ?></blockquote>
            <p><?php esc_html_e( '— Brand partner, New Delhi', 'lemon-media' ); ?></p>
        </div>
    </section>

    <!-- Contact CTA / Join Our Team Section -->
    <section id="join-team" class="contact-section">
        <div class="shell contact-inner" id="contact">
            <p class="eyebrow-label"><?php esc_html_e( 'Your next chapter starts here', 'lemon-media' ); ?></p>
            <h2>
                <?php
                $contact_title = get_theme_mod( 'contact_title', __( 'Let’s grow something bright.', 'lemon-media' ) );
                echo wp_kses_post( $contact_title );
                ?>
            </h2>
            <p><?php echo esc_html( get_theme_mod( 'contact_desc', __( 'Tell us where you want your brand to go. We’ll bring the strategy, creative fire and honest route to get there.', 'lemon-media' ) ) ); ?></p>
            <div class="contact-actions">
                <a class="dark-button" href="<?php echo esc_url( get_theme_mod( 'contact_whatsapp_url', 'https://wa.me/919711559909' ) ); ?>" target="_blank" rel="noreferrer">
                    <?php esc_html_e( 'Start a conversation', 'lemon-media' ); ?>
                    <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-up-right" aria-hidden="true"><path d="M7 7h10v10"></path><path d="M7 17 17 7"></path></svg>
                </a>
                <a class="email-link" href="mailto:<?php echo esc_attr( get_theme_mod( 'footer_email', 'nayanika@lemonmediaco.com' ) ); ?>">
                    <?php echo esc_html( get_theme_mod( 'footer_email', 'nayanika@lemonmediaco.com' ) ); ?>
                </a>
            </div>
        </div>
    </section>

    <!-- Latest Posts Loop Section -->
    <?php if ( have_posts() ) : ?>
    <section class="shell section-block">
        <div class="section-heading">
            <div>
                <p class="eyebrow-label"><?php esc_html_e( 'Latest News', 'lemon-media' ); ?></p>
                <h2><?php esc_html_e( 'From Our Blog', 'lemon-media' ); ?></h2>
            </div>
        </div>
        <div class="posts-layout no-sidebar">
            <div class="posts-grid" style="display:grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap:30px;">
                <?php
                while ( have_posts() ) :
                    the_post();
                    get_template_part( 'template-parts/content', get_post_type() );
                endwhile;
                ?>
            </div>
        </div>
        <div style="margin-top:30px; text-align:center;">
            <?php the_posts_pagination(); ?>
        </div>
    </section>
    <?php endif; ?>
</main>

<?php
get_footer();
