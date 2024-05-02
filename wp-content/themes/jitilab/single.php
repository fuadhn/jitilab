<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage JITILAB
 * @since JITILAB 1.0
 */

  get_header();

	while(have_posts()) {
		the_post();

    $post_ID = get_the_ID();
    $title = get_the_title();
    $thumbnail = jitilab_get_the_post_thumbnail_url($post_ID);
?>

  <!-- Main -->
  <main id="jtlMain" class="jtl-bg-white">
    <section class="jtl-bg-white jtl-px-4 jtl-py-8 sm:jtl-py-16 jtl-max-w-3xl jtl-mx-auto">
      <div class="jtl-custom-container">
        <div class="jtl-flex jtl-flex-col jtl-gap-6 lg:jtl-gap-8">
          <h1 class="jtl-title"><?php echo esc_html($title); ?></h1>

          <?php if(has_post_thumbnail()) { ?>
          <img width="736" height="470" src="" data-image="<?php echo esc_url($thumbnail); ?>" alt="" class="jtl-lazyload jtl-w-full jtl-h-auto" />

          <noscript>
            <img width="736" height="470" src="<?php echo esc_url($thumbnail); ?>" alt="" class="jtl-w-full jtl-h-auto" />
          </noscript>
          <?php } ?>

          <hr>

          <article class="jtl-content">
            <?php
            $the_content = apply_filters('the_content', get_the_content());
            
            if(!empty($the_content)) {
              echo $the_content;
            } else {
              echo '<div class="jtl-content-empty">' . __('Mohon maaf, isi konten belum tersedia atau masih dalam proses penyuntingan.', 'jitilab') . '</div>';
            }
            ?>
          </article>

          <hr>
        </div>
      </div>
    </section>
  </main>

<?php
  }

  get_footer();
?>