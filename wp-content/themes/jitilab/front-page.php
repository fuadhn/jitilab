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
    <!-- Silent is gold   -->
  </main>
 
<?php
  }

  get_footer();
?>