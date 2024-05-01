<?php
/**
 * The template for displaying front page
 *
 * @link https://developer.wordpress.org/themes/functionality/custom-front-page-templates/
 *
 * @package WordPress
 * @subpackage JITILAB
 * @since JITILAB 1.0
 */

  // Constanta
  $homepage_ID = get_option('page_on_front');

  // Fields
  $hero_background = get_field('hero_background', $homepage_ID);
  $hero_label = get_field('hero_label', $homepage_ID);
  $hero_title = get_field('hero_title', $homepage_ID);
  $hero_description = get_field('hero_description', $homepage_ID);
  $hero_link = get_field('hero_link', $homepage_ID);
  $hero_image = get_field('hero_image', $homepage_ID);

  get_header();

  while(have_posts()) {
    the_post();
?>
 
  <!-- Main -->
  <main id="jtlMain" class="jtl-bg-white">
    <!-- Hero -->
    <section data-image="<?php echo esc_url($hero_background); ?>" class="jtl-lazyload jtl-hero-wrap">
      <div class="jtl-hero-overlay"></div>  

      <div class="jtl-custom-container jtl-relative jtl-z-[2]">
        <div class="jtl-grid jtl-grid-cols-1 lg:jtl-grid-cols-2 jtl-gap-4 jtl-items-end">
          <div class="jtl-hero-content">
            <div class="jtl-space-y-8 xl:jtl-space-y-12">
              <div class="jtl-space-y-4">
                <h1 class="jtl-label"><?php echo esc_html($hero_label); ?></h1>
                <h2 class="jtl-title"><?php echo esc_html($hero_title); ?></h2>
                <p class="jtl-desc"><?php echo esc_html($hero_description); ?></p>
              </div>

              <div>
                <a href="<?php echo esc_url($hero_link); ?>">
                  <button type="button" class="jtl-button primary">
                    <span class="jtl-text"><?php echo __('Pelajari Lebih', 'jitilab'); ?></span>
                    <i class="fa-solid fa-arrow-right jtl-icon jtl-animate-sliding"></i>
                  </button>
                </a>
              </div>
            </div>
          </div>
            
          <div class="jtl-hero-img jtl-hidden lg:jtl-block">
            <div class="jtl-relative">
              <img width="632" height="947" src="" data-image="<?php echo esc_url($hero_image); ?>" alt="" class="jtl-img jtl-lazyload" />

              <noscript>
                <img width="632" height="947" src="<?php echo esc_url($hero_image); ?>" alt="" class="jtl-img" />
              </noscript>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
 
<?php
  }

  get_footer();
?>