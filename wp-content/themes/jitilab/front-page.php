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

  get_header();

  while(have_posts()) {
    the_post();
?>
 
  <!-- Main -->
  <main id="jtlMain" class="jtl-bg-white">
    <!-- Hero -->
    <section data-image="<?php echo esc_url(get_template_directory_uri() . '/dist/img/campus.webp'); ?>" class="jtl-lazyload jtl-hero-wrap">
      <div class="jtl-hero-overlay"></div>  

      <div class="jtl-custom-container jtl-relative jtl-z-[2]">
        <div class="jtl-grid jtl-grid-cols-1 lg:jtl-grid-cols-2 jtl-gap-4 jtl-items-end">
          <div class="jtl-hero-content">
            <div class="jtl-space-y-8 xl:jtl-space-y-12">
              <div class="jtl-space-y-4">
                <h1 class="jtl-label">Tentang Kami</h1>
                <h2 class="jtl-title">JITILAB University adalah kampus terbaik untuk karir dan masa depan Anda.</h2>
                <p class="jtl-desc">Universitas ini didirikan pada tahun 1990. Terdapat 30+ fakultas dengan kampus unggulan. Semua guru berpengalaman tinggi.</p>
              </div>

              <div>
                <a href="#">
                  <button type="button" class="jtl-button primary">
                    <span class="jtl-text">Pelajari Lebih</span>
                    <i class="fa-solid fa-arrow-right jtl-icon jtl-animate-sliding"></i>
                  </button>
                </a>
              </div>
            </div>
          </div>
            
          <div class="jtl-hero-img jtl-hidden lg:jtl-block">
            <div class="jtl-relative">
              <img width="632" height="947" src="" data-image="<?php echo esc_url(get_template_directory_uri() . '/dist/img/students.webp'); ?>" alt="" class="jtl-img jtl-lazyload" />

              <noscript>
                <img width="632" height="947" src="<?php echo esc_url(get_template_directory_uri() . '/dist/img/students.webp'); ?>" alt="" class="jtl-img" />
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