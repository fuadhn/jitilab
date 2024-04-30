<?php
/**
 * Displays the site header.
 *
 * @package WordPress
 * @subpackage JITILAB
 * @since JITILAB 1.0
 */

// Constanta
$home_url = home_url();
$logo_url = wp_get_attachment_url(get_theme_mod('custom_logo'));
?>

<header id="jtlHeader">
  <!-- Nav: Topbar -->
  <div class="jtl-bg-jtlprimary jtl-px-4 jtl-py-3 jtl-hidden lg:jtl-block">
    <div class="jtl-custom-container">
      <div class="jtl-flex jtl-flex-row jtl-gap-4 jtl-items-center jtl-justify-between">
        <!-- Left -->
        <div>
          <form action="#" method="GET" class="jtl-search-form">
            <input type="search" name="s" class="jtl-search-input" autocomplete="off" placeholder="<?php echo __('Pencarian kata kunci..', 'jitilab'); ?>" />

            <button type="submit" class="jtl-search-button">
              <i class="fa-solid fa-search jtl-search-icon"></i>
            </button>
          </form>
        </div>

        <!-- Right -->
        <div>
          <div class="jtl-flex jtl-flex-row jtl-gap-12 jtl-items-center">
            <!-- Contact -->
            <div>
              <nav class="jtl-contact-nav">
                <ul>
                  <li>
                    <a href="#">
                      <i class="fa-solid fa-envelope jtl-icon"></i>
                      <span class="jtl-text">university@jitilab.com</span>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa-solid fa-phone jtl-icon"></i>
                      <span class="jtl-text">+62 821-3000-3411</span>
                    </a>
                  </li>
                </ul>
              </nav>
            </div>

            <!-- Socmed -->
            <div>
              <nav class="jtl-socmed-nav">
                <ul>
                  <li>
                    <a href="#">
                      <i class="fa-brands fa-instagram fa-lg jtl-icon"></i>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa-brands fa-facebook-f fa-lg jtl-icon"></i>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa-brands fa-twitter fa-lg jtl-icon"></i>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa-brands fa-linkedin fa-lg jtl-icon"></i>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa-brands fa-tiktok fa-lg jtl-icon"></i>
                    </a>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>