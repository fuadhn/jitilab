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

  // Fields: Hero
  $hero_background = get_field('hero_background', $homepage_ID);
  $hero_label = get_field('hero_label', $homepage_ID);
  $hero_title = get_field('hero_title', $homepage_ID);
  $hero_description = get_field('hero_description', $homepage_ID);
  $hero_link = get_field('hero_link', $homepage_ID);
  $hero_image = get_field('hero_image', $homepage_ID);

  // Fields: Achievement
  $achievement_title = get_field('achievement_title', $homepage_ID);
  $achievement_subtitle = get_field('achievement_subtitle', $homepage_ID);

  // Achievement posts
  $args = array(
    'post_type' => 'achievement',
    'post_status' => 'publish',
    'posts_per_page' => 20,
    'order' => 'DESC',
    'orderby' => 'date'
  );

  $achievements = new WP_Query($args);

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
    <?php if($achievements->have_posts()) { ?>
    <section class="jtl-bg-white">
      <div class="jtl-custom-container">
        <div class="jtl-px-4 jtl-py-8 sm:jtl-py-16">
          <div class="jtl-flex jtl-flex-col jtl-gap-4 jtl-items-center">
            <h2 class="jtl-section-title jtl-text-center jtl-max-w-[500px] md:jtl-max-w-none"><?php echo esc_html($achievement_title); ?></h2>
            <p class="jtl-section-subtitle jtl-text-center"><?php echo esc_html($achievement_subtitle); ?></p>
          </div>
        </div>
      </div>
      <div>
        <div id="jtlAchievementCarousel" class="owl-carousel owl-theme">
          <?php while($achievements->have_posts()) : $achievements->the_post(); ?>
          <?php
            $achievement_ID = get_the_ID();
            $student_name = get_the_title();
            $student_photo = get_field('student_photo', $achievement_ID);
            $achievement_details = get_field('achievement_details', $achievement_ID);
          ?>
          <div class="item">
            <img width="600" height="400" src="" data-image="<?php echo esc_url($student_photo); ?>" alt="" class="jtl-lazyload jtl-photo" />

            <noscript>
              <img width="600" height="400" src="<?php echo esc_url($student_photo); ?>" alt="" class="jtl-photo" />
            </noscript>

            <div class="jtl-achievement-details">
              <div class="jtl-space-y-2">
                <h3 class="jtl-name"><?php echo esc_html($student_name); ?></h3>
                
                <div class="jtl-space-y-0">
                  <h4 class="jtl-achievement"><?php echo esc_html($achievement_details['achievement']); ?></h4>
                  <p class="jtl-event"><?php echo esc_html($achievement_details['event']); ?></p>
                  <p class="jtl-event jtl-hidden md:jtl-block"><?php echo esc_html($achievement_details['location']); ?></p>
                </div>
              </div>
            </div>
          </div>
          <?php endwhile; ?>
        </div>
      </div>
    </section>
    <?php } ?>
    <?php wp_reset_postdata(); ?>
  </main>
 
<?php
  }

  get_footer();
?>