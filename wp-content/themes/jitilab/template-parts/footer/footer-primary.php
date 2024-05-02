<?php
/**
 * Displays the site footer.
 *
 * @package WordPress
 * @subpackage JITILAB
 * @since JITILAB 1.0
 */

  // Constanta
  $homepage_ID = get_option('page_on_front');

  $home_url = home_url();

  // Fields
  $social_media = get_field('social_media', $homepage_ID);
  $custom_logo = get_field('custom_logo', $homepage_ID);
?>

<footer id="jtlFooter" class="jtl-bg-jtlprimary jtl-px-4 jtl-py-8">
  <div class="jtl-custom-container">
    <div class="jtl-flex jtl-flex-col sm:jtl-flex-row jtl-gap-4 jtl-justify-between jtl-items-start sm:jtl-items-center">
      <!-- Left -->
      <div class="jtl-max-w-none sm:jtl-max-w-[343px]">
        <div class="jtl-space-y-4">
          <a href="<?php echo esc_url($home_url); ?>">
            <img width="158" height="36" src="<?php echo ($custom_logo['logo_footer'] ? esc_url($custom_logo['logo_footer']) : esc_url(jitilab_get_default_logo_url('-white'))); ?>" alt="" class="jtl-logo" />
          </a>

          <p class="jtl-text-jtllight jtl-text-sm sm:jtl-text-base"><?php echo esc_html(bloginfo('description')); ?></p>
        </div>
      </div>

      <!-- Right -->
      <div>
        <div class="jtl-space-y-4">
          <h6 class="jtl-text-white jtl-font-semibold">Ikuti kami</h6>

          <nav class="jtl-socmed-nav">
            <ul>
              <?php if($social_media['instagram']) { ?>
              <li>
                <a href="<?php echo esc_url($social_media['instagram']); ?>" target="_blank">
                  <i class="fa-brands fa-instagram fa-lg jtl-icon"></i>
                </a>
              </li>
              <?php } ?>

              <?php if($social_media['facebook']) { ?>
              <li>
                <a href="<?php echo esc_url($social_media['facebook']); ?>" target="_blank">
                  <i class="fa-brands fa-facebook-f fa-lg jtl-icon"></i>
                </a>
              </li>
              <?php } ?>

              <?php if($social_media['twitter']) { ?>
              <li>
                <a href="<?php echo esc_url($social_media['twitter']); ?>" target="_blank">
                  <i class="fa-brands fa-twitter fa-lg jtl-icon"></i>
                </a>
              </li>
              <?php } ?>

              <?php if($social_media['linkedin']) { ?>
              <li>
                <a href="<?php echo esc_url($social_media['linkedin']); ?>" target="_blank">
                  <i class="fa-brands fa-linkedin fa-lg jtl-icon"></i>
                </a>
              </li>
              <?php } ?>
              
              <?php if($social_media['tiktok']) { ?>
              <li>
                <a href="<?php echo esc_url($social_media['tiktok']); ?>" target="_blank">
                  <i class="fa-brands fa-tiktok fa-lg jtl-icon"></i>
                </a>
              </li>
              <?php } ?>
            </ul>
          </nav>
        </div>
      </div>
    </div>

    <hr class="jtl-border-jtllight/10 jtl-mt-8 jtl-mb-4" />

    <p class="jtl-text-jtllight jtl-text-sm jtl-text-center">Copyright &copy; JITILAB University. Allright reserved.</p>
  </div>
</footer>