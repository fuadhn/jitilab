<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage JITILAB
 * @since JITILAB 1.0
 */

  global $wp_query;

  // Constanta
  $max_posts = get_option('posts_per_page');

  $current_category = ($wp_query->query_vars['category_name'] ? get_category_by_slug($wp_query->query_vars['category_name']) : false);
  $current_tag = ($wp_query->query_vars['tag'] ? $wp_query->query_vars['tag'] : false);

  get_header();
?>
 
  <!-- Main -->
  <main id="jtlMain" class="jtl-bg-white">
    <!-- Blog -->
    <section class="jtl-bg-white jtl-px-4 jtl-py-8 sm:jtl-py-16">
      <div class="jtl-custom-container">
        <div class="jtl-space-y-8">
          <div class="jtl-flex jtl-flex-col jtl-gap-4 jtl-items-center">
            <?php the_archive_title( '<h1 class="jtl-section-title jtl-text-center">', '</h1>' ); ?>
            <div class="jtl-section-accent"></div>
          </div>

          <?php if(have_posts()) { ?>
          <div id="jtlAllPosts" class="jtl-grid jtl-grid-cols-1 sm:jtl-grid-cols-2 xl:jtl-grid-cols-3 jtl-gap-4" data-tag="<?php echo ($current_tag ? esc_attr($current_tag) : ''); ?>" data-category="<?php echo ($current_category ? esc_attr($current_category->term_id) : ''); ?>" data-max="<?php echo esc_attr($max_posts); ?>">
            <?php while(have_posts()) : the_post(); ?>
            <?php
              $post_ID = get_the_ID();
              $permalink = get_the_permalink();
              $thumbnail = jitilab_get_the_post_thumbnail_url($post_ID);
              $title = get_the_title();
              $categories = get_the_category();
            ?>
            <div class="jtl-post-item">
              <a href="<?php echo esc_url($permalink); ?>">
                <div class="jtl-news-card">
                  <!-- Thumbnail -->
                  <div class="jtl-news-thumbnail">
                    <?php if(has_post_thumbnail()) { ?>
                    <img width="415" height="300" src="" data-image="<?php echo esc_url($thumbnail); ?>" alt="" class="jtl-lazyload jtl-thumbnail-image" />
                    
                    <noscript>
                      <img width="415" height="300" src="<?php echo esc_url($thumbnail); ?>" alt="" class="jtl-thumbnail-image" />
                    </noscript>
                    <?php } else { ?>
                    <div class="jtl-empty-thumbnail"></div>
                    <?php } ?>
                  </div>

                  <!-- Content -->
                  <div class="jtl-news-content">
                    <h3 class="jtl-news-title"><?php echo esc_html($title); ?></h3>
                    <p class="jtl-news-category"><?php echo esc_html($categories[0]->name); ?></p>
                  </div>
                </div>
              </a>
            </div>
            <?php endwhile; ?>
          </div>
          <?php } else { ?>
          <div class="jtl-content-empty"><?php echo __('Mohon maaf, postingan yang Anda cari tidak ditemukan.', 'jitilab'); ?></div>
          <?php } ?>

          <div id="jtlLoadMore" class="jtl-flex jtl-justify-center jtl-invisible">
            <button type="button" class="jtl-button primary jtl-animate-pulse">
              <span class="jtl-text"><?php echo __('Tunggu sebentar..', 'jitilab'); ?></span>
            </button>
          </div>
        </div>
      </div>
    </section>
  </main>
<?php
  get_footer();
?>