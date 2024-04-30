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
  <div id="jtlNavTopbar" class="jtl-bg-jtlprimary jtl-px-4 jtl-py-3 jtl-hidden lg:jtl-block">
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

  <!-- Nav: Menu -->
  <div id="jtlNavMenu" class="jtl-bg-white jtl-px-4 jtl-py-3 jtl-border-b-[1px] jtl-border-b-slate-100">
    <div class="jtl-custom-container">
      <div class="jtl-flex jtl-flex-row jtl-gap-4 jtl-items-center jtl-justify-between">
        <!-- Left -->
        <div>
          <!-- Logo -->
          <a href="#">
            <img width="158" height="36" src="<?php echo get_template_directory_uri() . '/dist/img/logo.webp'; ?>" alt="" class="jtl-logo" />
          </a>
        </div>

        <!-- Right -->
        <div>
          <div class="jtl-flex jtl-flex-row jtl-gap-12 jtl-items-center">
            <!-- Menu -->
            <div>
              <!-- Desktop menu -->
              <nav class="jtl-menu-nav jtl-hidden lg:jtl-block">
                <ul>
                  <li>
                    <a href="#">
                      <span class="jtl-text">Home</span>
                      <i class="fa-solid fa-chevron-down fa-sm jtl-icon"></i>
                    </a>

                    <div class="jtl-submenu-wrap">
                      <nav class="jtl-submenu-nav">
                        <ul>
                          <li>
                            <a href="#">
                              <span class="jtl-text">Home 1</span>
                            </a>
                          </li>
                          <li>
                            <a href="#">
                              <span class="jtl-text">Home 2</span>
                            </a>
                          </li>
                          <li>
                            <a href="#">
                              <span class="jtl-text">Home 3</span>
                            </a>
                          </li>
                        </ul>
                      </nav>
                    </div>
                  </li>
                  <li>
                    <a href="#">
                      <span class="jtl-text">Pages</span>
                      <i class="fa-solid fa-chevron-down fa-sm jtl-icon"></i>
                    </a>

                    <div class="jtl-submenu-wrap">
                      <nav class="jtl-submenu-nav">
                        <ul>
                          <li>
                            <a href="#">
                              <span class="jtl-text">About Us</span>
                            </a>
                          </li>
                          <li>
                            <a href="#">
                              <span class="jtl-text">FAQs</span>
                            </a>
                          </li>
                        </ul>
                      </nav>
                    </div>
                  </li>
                  <li>
                    <a href="#">
                      <span class="jtl-text">Courses</span>
                      <i class="fa-solid fa-chevron-down fa-sm jtl-icon"></i>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <span class="jtl-text">Webinars</span>
                      <i class="fa-solid fa-chevron-down fa-sm jtl-icon"></i>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <span class="jtl-text">Blog</span>
                      <i class="fa-solid fa-chevron-down fa-sm jtl-icon"></i>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <span class="jtl-text">Contact</span>
                    </a>
                  </li>
                </ul>
              </nav>

              <!-- Mobile menu -->
              <nav class="jtl-menu-nav jtl-block lg:jtl-hidden">
                <ul>
                  <li>
                    <a href="#">
                      <button type="button" class="jtl-toggle-dropdown">
                        <i class="fa-solid fa-bars fa-sm jtl-icon"></i>
                      </button>
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

<!-- Nav: Dropdown mobile menu -->
<nav class="jtl-dropdown-nav">
  <div class="jtl-custom-container jtl-space-y-2">
    <form action="#" method="GET" class="jtl-search-form dropdown">
      <input type="search" name="s" class="jtl-search-input jtl-w-full" autocomplete="off" placeholder="<?php echo __('Pencarian kata kunci..', 'jitilab'); ?>" />

      <button type="submit" class="jtl-search-button">
        <i class="fa-solid fa-search jtl-search-icon"></i>
      </button>
    </form>

    <ul class="jtl-parent">
      <li>
        <a href="#">
          <span class="jtl-text">Home</span>
          <i class="fa-solid fa-chevron-down fa-sm jtl-icon"></i>
        </a>

        <ul class="jtl-child">
          <li>
            <a href="#">
              <span class="jtl-text">Home 1</span>
            </a>
          </li>
          <li>
            <a href="#">
              <span class="jtl-text">Home 2</span>
            </a>
          </li>
          <li>
            <a href="#">
              <span class="jtl-text">Home 3</span>
            </a>
          </li>
        </ul>
      </li>
      <li>
        <a href="#">
          <span class="jtl-text">Pages</span>
          <i class="fa-solid fa-chevron-down fa-sm jtl-icon"></i>
        </a>

        <ul class="jtl-child">
          <li>
            <a href="#">
              <span class="jtl-text">About Us</span>
            </a>
          </li>
          <li>
            <a href="#">
              <span class="jtl-text">FAQs</span>
            </a>
          </li>
        </ul>
      </li>
      <li>
        <a href="#">
          <span class="jtl-text">Courses</span>
          <i class="fa-solid fa-chevron-down fa-sm jtl-icon"></i>
        </a>
      </li>
      <li>
        <a href="#">
          <span class="jtl-text">Webinars</span>
          <i class="fa-solid fa-chevron-down fa-sm jtl-icon"></i>
        </a>
      </li>
      <li>
        <a href="#">
          <span class="jtl-text">Blog</span>
          <i class="fa-solid fa-chevron-down fa-sm jtl-icon"></i>
        </a>
      </li>
      <li>
        <a href="#">
          <span class="jtl-text">Contact</span>
        </a>
      </li>
    </ul>
  </div>
</nav>