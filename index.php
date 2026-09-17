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

<!-- Hero Banner Section -->
<section id="home" class="hero-section">
    <div class="container">
        <div class="hero-grid">
            <div class="hero-content">
                <h1><?php echo esc_html( get_theme_mod( 'hero_title', __( 'Elevate Your Brand With Lemon Media', 'lemon-media' ) ) ); ?></h1>
                <p><?php echo esc_html( get_theme_mod( 'hero_subtitle', __( 'We craft data-driven social media strategies, high-converting performance campaigns, stunning photography, and cutting-edge web design.', 'lemon-media' ) ) ); ?></p>
                <div class="hero-btns">
                    <?php if ( get_theme_mod( 'hero_btn_1_text', __( 'Explore Our Work', 'lemon-media' ) ) ) : ?>
                        <a href="<?php echo esc_url( get_theme_mod( 'hero_btn_1_url', '#work' ) ); ?>" class="btn-primary">
                            <?php echo esc_html( get_theme_mod( 'hero_btn_1_text', __( 'Explore Our Work', 'lemon-media' ) ) ); ?>
                        </a>
                    <?php endif; ?>

                    <?php if ( get_theme_mod( 'hero_btn_2_text', __( 'Our Services', 'lemon-media' ) ) ) : ?>
                        <a href="<?php echo esc_url( get_theme_mod( 'hero_btn_2_url', '#services' ) ); ?>" class="btn-secondary">
                            <?php echo esc_html( get_theme_mod( 'hero_btn_2_text', __( 'Our Services', 'lemon-media' ) ) ); ?>
                        </a>
                    <?php endif; ?>
                </div>
            </div>
            <div class="hero-image">
                <?php
                $hero_img = get_theme_mod( 'hero_image' );
                if ( $hero_img ) :
                    ?>
                    <img src="<?php echo esc_url( $hero_img ); ?>" alt="<?php esc_attr_e( 'Lemon Media Agency', 'lemon-media' ); ?>">
                <?php else : ?>
                    <div style="background: linear-gradient(135deg, #1f2937, #374151); border-radius:16px; height:360px; display:flex; align-items:center; justify-center:center; text-align:center; padding:40px; border:1px solid rgba(255,255,255,0.1);">
                        <div>
                            <span style="font-size:3rem; display:block; margin-bottom:10px;">🚀</span>
                            <h3 style="color:#fff; font-size:1.8rem;"><?php esc_html_e( 'Digital Agency Excellence', 'lemon-media' ); ?></h3>
                            <p style="color:#9ca3af; font-size:0.95rem; margin-top:8px;"><?php esc_html_e( 'Customizable image upload available in Theme Customizer', 'lemon-media' ); ?></p>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<!-- Our Clients Section -->
<section id="clients" class="section section-bg-light">
    <div class="container">
        <div class="section-header">
            <span class="section-subtitle"><?php esc_html_e( 'TRUST & CREDIBILITY', 'lemon-media' ); ?></span>
            <h2 class="section-title"><?php echo esc_html( get_theme_mod( 'clients_title', __( 'Trusted By Industry Leaders', 'lemon-media' ) ) ); ?></h2>
        </div>
        <div class="clients-grid">
            <?php
            $clients_raw = get_theme_mod( 'clients_list', 'Apex Global, Nexa Tech, Urban Style, Bloom Organics, Vantage Media, Crest Commerce' );
            $clients_arr = explode( ',', $clients_raw );
            foreach ( $clients_arr as $client_name ) :
                $name = trim( $client_name );
                if ( ! empty( $name ) ) :
                    ?>
                    <div class="client-item">
                        ✨ <?php echo esc_html( $name ); ?>
                    </div>
                <?php
                endif;
            endforeach;
            ?>
        </div>
    </div>
</section>

<!-- Our Story Section -->
<section id="story" class="section">
    <div class="container">
        <div class="story-grid">
            <div class="story-content">
                <span class="section-subtitle"><?php echo esc_html( get_theme_mod( 'story_subtitle', __( 'OUR STORY', 'lemon-media' ) ) ); ?></span>
                <h2><?php echo esc_html( get_theme_mod( 'story_title', __( 'We are a creative agency dedicated to scaling ambitious brands', 'lemon-media' ) ) ); ?></h2>
                <p style="color:var(--text-muted); line-height:1.8; margin-bottom:20px;">
                    <?php echo esc_html( get_theme_mod( 'story_desc', __( 'Lemon Media Company was founded with a single mission: to bring fresh, creative, and measurable digital growth to modern businesses. From high-impact video content to precision influencer campaigns, we tell stories that turn viewers into lifelong customers.', 'lemon-media' ) ) ); ?>
                </p>
                <div class="story-stats">
                    <div>
                        <span class="stat-number"><?php echo esc_html( get_theme_mod( 'story_stat_1_num', '250+' ) ); ?></span>
                        <span class="stat-label"><?php echo esc_html( get_theme_mod( 'story_stat_1_lbl', 'Projects Completed' ) ); ?></span>
                    </div>
                    <div>
                        <span class="stat-number"><?php echo esc_html( get_theme_mod( 'story_stat_2_num', '50M+' ) ); ?></span>
                        <span class="stat-label"><?php echo esc_html( get_theme_mod( 'story_stat_2_lbl', 'Organic Reach' ) ); ?></span>
                    </div>
                    <div>
                        <span class="stat-number"><?php echo esc_html( get_theme_mod( 'story_stat_3_num', '98%' ) ); ?></span>
                        <span class="stat-label"><?php echo esc_html( get_theme_mod( 'story_stat_3_lbl', 'Client Satisfaction' ) ); ?></span>
                    </div>
                </div>
            </div>
            <div class="story-card" style="background:var(--light-bg); border-radius:16px; padding:40px; border:1px solid var(--border-color);">
                <h3 style="margin-bottom:15px; font-size:1.5rem;"><?php esc_html_e( 'Why Choose Lemon Media?', 'lemon-media' ); ?></h3>
                <ul style="list-style:none; line-height:2.2;">
                    <li>✓ <strong>360° Digital Capability:</strong> Full stack content, ads, design & code.</li>
                    <li>✓ <strong>Data & ROI Focused:</strong> Clear metrics, continuous optimizations.</li>
                    <li>✓ <strong>Creative Storytellers:</strong> Content built for social virality & high engagement.</li>
                    <li>✓ <strong>Dedicated Strategy Team:</strong> Personal attention for every project.</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Our Services Section (7 core services) -->
<section id="services" class="section section-bg-light">
    <div class="container">
        <div class="section-header">
            <span class="section-subtitle"><?php esc_html_e( 'WHAT WE DO', 'lemon-media' ); ?></span>
            <h2 class="section-title"><?php esc_html_e( 'Our Specialised Services', 'lemon-media' ); ?></h2>
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
            1 => array( 'title' => 'Our Social Media Services', 'desc' => 'End-to-end social media management, community engagement, and viral strategy.' ),
            2 => array( 'title' => 'Content Creation', 'desc' => 'Captivating graphics, copywriting, reels, and video storytelling designed to convert.' ),
            3 => array( 'title' => 'Photography & Videography', 'desc' => 'Professional studio photography and high-end video shoots for products & events.' ),
            4 => array( 'title' => 'Performance Marketing', 'desc' => 'Data-driven Meta Ads, Google Ads, and funnel optimization to maximize ROI.' ),
            5 => array( 'title' => 'Influencer Marketing', 'desc' => 'Strategic creator partnerships and viral brand campaigns that amplify reach.' ),
            6 => array( 'title' => 'Website Development', 'desc' => 'Custom, high-performing websites and digital platforms built for seamless UX.' ),
            7 => array( 'title' => 'Brand And Packaging Design', 'desc' => 'Memorable brand identities, logos, guidelines, and premium product packaging.' ),
        );
        ?>

        <div class="services-grid">
            <?php for ( $i = 1; $i <= 7; $i++ ) :
                $stitle = get_theme_mod( "service_{$i}_title", $defaults[$i]['title'] );
                $sdesc  = get_theme_mod( "service_{$i}_desc", $defaults[$i]['desc'] );
                $slug   = $services_slugs[$i];
                ?>
                <div id="<?php echo esc_attr( $slug ); ?>" class="service-card">
                    <div class="service-icon">0<?php echo $i; ?></div>
                    <h3><?php echo esc_html( $stitle ); ?></h3>
                    <p><?php echo esc_html( $sdesc ); ?></p>
                </div>
            <?php endfor; ?>
        </div>
    </div>
</section>

<!-- Our Work Section -->
<section id="work" class="section">
    <div class="container">
        <div class="section-header">
            <span class="section-subtitle"><?php esc_html_e( 'PORTFOLIO', 'lemon-media' ); ?></span>
            <h2 class="section-title"><?php esc_html_e( 'Featured Case Studies & Work', 'lemon-media' ); ?></h2>
        </div>
        <div class="portfolio-grid">
            <div class="portfolio-card">
                <div class="portfolio-content">
                    <span class="portfolio-category"><?php esc_html_e( 'Social Media & Content', 'lemon-media' ); ?></span>
                    <h3 class="portfolio-title"><?php esc_html_e( 'Urban Style Viral Launch Campaign', 'lemon-media' ); ?></h3>
                    <p style="color:var(--text-muted); font-size:0.9rem;"><?php esc_html_e( 'Achieved 5M+ organic impressions and 12x ROI in 30 days.', 'lemon-media' ); ?></p>
                </div>
            </div>
            <div class="portfolio-card">
                <div class="portfolio-content">
                    <span class="portfolio-category"><?php esc_html_e( 'Website Development', 'lemon-media' ); ?></span>
                    <h3 class="portfolio-title"><?php esc_html_e( 'Nexa Tech E-Commerce Platform', 'lemon-media' ); ?></h3>
                    <p style="color:var(--text-muted); font-size:0.9rem;"><?php esc_html_e( 'Rebuilt custom shop experience boosting conversions by 45%.', 'lemon-media' ); ?></p>
                </div>
            </div>
            <div class="portfolio-card">
                <div class="portfolio-content">
                    <span class="portfolio-category"><?php esc_html_e( 'Brand & Packaging', 'lemon-media' ); ?></span>
                    <h3 class="portfolio-title"><?php esc_html_e( 'Bloom Organics Rebrand', 'lemon-media' ); ?></h3>
                    <p style="color:var(--text-muted); font-size:0.9rem;"><?php esc_html_e( 'Designed eco-friendly packaging and complete brand guidelines.', 'lemon-media' ); ?></p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Join Our Team & Contact CTA Section -->
<section id="join-team" class="section section-bg-dark">
    <div class="container" style="text-align:center;">
        <span class="section-subtitle"><?php esc_html_e( 'CAREERS & COLLABORATION', 'lemon-media' ); ?></span>
        <h2 class="section-title" style="color:#fff; margin-bottom:20px;"><?php esc_html_e( 'Want To Join Our Creative Team Or Work Together?', 'lemon-media' ); ?></h2>
        <p style="max-width:650px; margin: 0 auto 30px; color:#d1d5db;">
            <?php esc_html_e( 'We are always looking for passionate content creators, strategists, designers, and developers. Reach out to discuss open positions or new client projects.', 'lemon-media' ); ?>
        </p>
        <div style="display:flex; justify-content:center; gap:15px; flex-wrap:wrap;" id="contact">
            <a href="mailto:<?php echo esc_attr( get_theme_mod( 'footer_email', 'contact@lemonmediaco.com' ) ); ?>" class="btn-primary">
                <?php esc_html_e( 'Email Our Team', 'lemon-media' ); ?>
            </a>
            <a href="tel:<?php echo esc_attr( get_theme_mod( 'footer_phone', '+91 98765 43210' ) ); ?>" class="btn-secondary">
                <?php esc_html_e( 'Call Us Directly', 'lemon-media' ); ?>
            </a>
        </div>
    </div>
</section>

<!-- Latest Posts Loop Section -->
<?php if ( have_posts() ) : ?>
<section class="section section-bg-light">
    <div class="container">
        <div class="section-header">
            <span class="section-subtitle"><?php esc_html_e( 'LATEST NEWS', 'lemon-media' ); ?></span>
            <h2 class="section-title"><?php esc_html_e( 'From Our Blog', 'lemon-media' ); ?></h2>
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
    </div>
</section>
<?php endif; ?>

<?php
get_footer();
