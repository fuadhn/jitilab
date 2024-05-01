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

    <!-- Achievement -->
    <section class="jtl-bg-white">
      <div class="jtl-custom-container">
        <div class="jtl-px-4 jtl-py-8 sm:jtl-py-16">
          <div class="jtl-flex jtl-flex-col jtl-gap-4 jtl-items-center">
            <h2 class="jtl-text-jtlprimary jtl-font-urbanist jtl-font-semibold jtl-text-5xl">Bersama JITILAB University, Mahasiswa Bisa!</h2>
            <p class="jtl-max-w-5xl jtl-text-center jtl-text-lg jtl-text-jtlgray">JITILAB University merupakan rumah kedua untuk semua mahasiswa. Di sini, semua mahasiswa akan merasakan suasana kekeluargaan yang hangat dan nyaman, serta mendapatkan dukungan yang penuh dalam mengejar impian.</p>
          </div>
        </div>
      </div>
      <div>
        <div id="jtlAchievementCarousel" class="owl-carousel owl-theme">
          <div class="item">
            <img src="<?php echo esc_url(get_template_directory_uri() . '/dist/img/olympiade/student-1.webp'); ?>" alt="" class="jtl-photo" />

            <div class="jtl-achievement-details">
              <div class="jtl-space-y-2">
                <h3 class="jtl-name">Roscoe, Murphy</h3>
                
                <div class="jtl-space-y-0">
                  <h4 class="jtl-achievement">Medali Emas</h4>
                  <p class="jtl-event">Olimpiade Matematika 2024</p>
                  <p class="jtl-event jtl-hidden md:jtl-block">Jakarta, Indonesia</p>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <img src="<?php echo esc_url(get_template_directory_uri() . '/dist/img/olympiade/student-2.webp'); ?>" alt="" class="jtl-photo" />
            
            <div class="jtl-achievement-details">
              <div class="jtl-space-y-2">
                <h3 class="jtl-name">Malvina, Waelchi</h3>
                
                <div class="jtl-space-y-0">
                  <h4 class="jtl-achievement">Medali Emas</h4>
                  <p class="jtl-event">Olimpiade Matematika 2024</p>
                  <p class="jtl-event jtl-hidden md:jtl-block">Jakarta, Indonesia</p>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <img src="<?php echo esc_url(get_template_directory_uri() . '/dist/img/olympiade/student-3.webp'); ?>" alt="" class="jtl-photo" />
            
            <div class="jtl-achievement-details">
              <div class="jtl-space-y-2">
                <h3 class="jtl-name">Nakia, Moen</h3>
                
                <div class="jtl-space-y-0">
                  <h4 class="jtl-achievement">Medali Emas</h4>
                  <p class="jtl-event">Olimpiade Matematika 2024</p>
                  <p class="jtl-event jtl-hidden md:jtl-block">Jakarta, Indonesia</p>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <img src="<?php echo esc_url(get_template_directory_uri() . '/dist/img/olympiade/student-4.webp'); ?>" alt="" class="jtl-photo" />
            
            <div class="jtl-achievement-details">
              <div class="jtl-space-y-2">
                <h3 class="jtl-name">Mya, Gleason</h3>
                
                <div class="jtl-space-y-0">
                  <h4 class="jtl-achievement">Medali Emas</h4>
                  <p class="jtl-event">Olimpiade Matematika 2024</p>
                  <p class="jtl-event jtl-hidden md:jtl-block">Jakarta, Indonesia</p>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <img src="<?php echo esc_url(get_template_directory_uri() . '/dist/img/olympiade/student-5.webp'); ?>" alt="" class="jtl-photo" />
            
            <div class="jtl-achievement-details">
              <div class="jtl-space-y-2">
                <h3 class="jtl-name">Keaton, Rogahn</h3>
                
                <div class="jtl-space-y-0">
                  <h4 class="jtl-achievement">Medali Emas</h4>
                  <p class="jtl-event">Olimpiade Matematika 2024</p>
                  <p class="jtl-event jtl-hidden md:jtl-block">Jakarta, Indonesia</p>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <img src="<?php echo esc_url(get_template_directory_uri() . '/dist/img/olympiade/student-6.webp'); ?>" alt="" class="jtl-photo" />
            
            <div class="jtl-achievement-details">
              <div class="jtl-space-y-2">
                <h3 class="jtl-name">Broderick, Padberg</h3>
                
                <div class="jtl-space-y-0">
                  <h4 class="jtl-achievement">Medali Emas</h4>
                  <p class="jtl-event">Olimpiade Matematika 2024</p>
                  <p class="jtl-event jtl-hidden md:jtl-block">Jakarta, Indonesia</p>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <img src="<?php echo esc_url(get_template_directory_uri() . '/dist/img/olympiade/student-7.webp'); ?>" alt="" class="jtl-photo" />
            
            <div class="jtl-achievement-details">
              <div class="jtl-space-y-2">
                <h3 class="jtl-name">Domenico, Gulgowski</h3>
                
                <div class="jtl-space-y-0">
                  <h4 class="jtl-achievement">Medali Emas</h4>
                  <p class="jtl-event">Olimpiade Matematika 2024</p>
                  <p class="jtl-event jtl-hidden md:jtl-block">Jakarta, Indonesia</p>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <img src="<?php echo esc_url(get_template_directory_uri() . '/dist/img/olympiade/student-8.webp'); ?>" alt="" class="jtl-photo" />
            
            <div class="jtl-achievement-details">
              <div class="jtl-space-y-2">
                <h3 class="jtl-name">Karina, McDermott</h3>
                
                <div class="jtl-space-y-0">
                  <h4 class="jtl-achievement">Medali Emas</h4>
                  <p class="jtl-event">Olimpiade Matematika 2024</p>
                  <p class="jtl-event jtl-hidden md:jtl-block">Jakarta, Indonesia</p>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <img src="<?php echo esc_url(get_template_directory_uri() . '/dist/img/olympiade/student-9.webp'); ?>" alt="" class="jtl-photo" />
            
            <div class="jtl-achievement-details">
              <div class="jtl-space-y-2">
                <h3 class="jtl-name">Noe, Monahan</h3>
                
                <div class="jtl-space-y-0">
                  <h4 class="jtl-achievement">Medali Emas</h4>
                  <p class="jtl-event">Olimpiade Matematika 2024</p>
                  <p class="jtl-event jtl-hidden md:jtl-block">Jakarta, Indonesia</p>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <img src="<?php echo esc_url(get_template_directory_uri() . '/dist/img/olympiade/student-10.webp'); ?>" alt="" class="jtl-photo" />
            
            <div class="jtl-achievement-details">
              <div class="jtl-space-y-2">
                <h3 class="jtl-name">Alan, Bahringer</h3>
                
                <div class="jtl-space-y-0">
                  <h4 class="jtl-achievement">Medali Emas</h4>
                  <p class="jtl-event">Olimpiade Matematika 2024</p>
                  <p class="jtl-event jtl-hidden md:jtl-block">Jakarta, Indonesia</p>
                </div>
              </div>
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