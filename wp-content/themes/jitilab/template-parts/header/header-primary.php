<?php
/**
 * Displays the site header.
 *
 * @package WordPress
 * @subpackage JITILAB
 * @since JITILAB 1.0
 */

// Constanta
$homepage_ID = get_option('page_on_front');

$home_url = home_url();
$logo_url = wp_get_attachment_url(get_theme_mod('custom_logo'));

// Fields
$contact = get_field('contact', $homepage_ID);
$social_media = get_field('social_media', $homepage_ID);

//  Menu
$has_primary_menu = has_nav_menu('primary');

$menu_items = array();

if($has_primary_menu) {
	$locations = get_nav_menu_locations();
	$menu = get_term($locations['primary'], 'nav_menu');
	$menu_items = wp_get_nav_menu_items($menu->term_id);
}
?>

<header id="jtlHeader" class="jtl-relative jtl-z-[9]">
  <!-- Nav: Topbar -->
  <div id="jtlNavTopbar" class="jtl-bg-jtlprimary jtl-px-4 jtl-py-3 jtl-hidden lg:jtl-block">
    <div class="jtl-custom-container">
      <div class="jtl-flex jtl-flex-row jtl-gap-4 jtl-items-center jtl-justify-between">
        <!-- Left -->
        <div>
          <form action="<?php echo esc_url(home_url()); ?>" method="GET" class="jtl-search-form">
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
            <?php if($contact) { ?>
            <div>
              <nav class="jtl-contact-nav">
                <ul>
                  <?php if($contact['email']) { ?>
                  <li>
                    <a href="<?php echo esc_attr('mailto:' . $contact['email']); ?>">
                      <i class="fa-solid fa-envelope jtl-icon"></i>
                      <span class="jtl-text"><?php echo esc_html($contact['email']); ?></span>
                    </a>
                  </li>
                  <?php } ?>

                  <?php if($contact['phone']) { ?>
                  <li>
                    <a href="<?php echo esc_attr('tel:' . jitilab_get_formatted_phone_number($contact['phone'])); ?>">
                      <i class="fa-solid fa-phone jtl-icon"></i>
                      <span class="jtl-text"><?php echo esc_html($contact['phone']); ?></span>
                    </a>
                  </li>
                  <?php } ?>
                </ul>
              </nav>
            </div>
            <?php } ?>

            <!-- Socmed -->
            <?php if($social_media) { ?>
            <div>
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
            <?php } ?>
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
          <a href="<?php echo esc_url($home_url); ?>">
            <img width="158" height="36" src="<?php echo ($logo_url !== '' ? esc_url($logo_url) : esc_url(jitilab_get_default_logo_url())); ?>" alt="" class="jtl-logo" />
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
                  <?php
                    if($has_primary_menu) {
                      $i = 0;
                      
                      $html = '';
                      $before_is_parent = false;

                      foreach($menu_items as $menu_item) {
                        $link = esc_url($menu_item->url);
                        $title = $menu_item->title;
                        $target = $menu_item->target;
                        $is_parent = ($menu_item->menu_item_parent == 0 ? true : false);
                        $has_child = (isset($menu_items[$i+1]) && $menu_items[$i+1]->menu_item_parent == $menu_item->ID ? true : false);
                        $next_is_parent = (isset($menu_items[$i+1]) && $menu_items[$i+1]->menu_item_parent == 0 ? true : false);
                        
                        if($is_parent && !$before_is_parent) {
                          if(!$has_child) {
                            $html .= '<li>' . "\n";
                            $html .= '<a href="' . $link . '" target="' . esc_attr($target) . '">' . "\n";
                            $html .= '<span class="jtl-text">' . esc_html($title) . '</span>' . "\n";
                            $html .= '</a>' . "\n";
                            $html .= '</li>' . "\n";
                          } else {
                            $html .= '<li>' . "\n";
                            
                            $html .= '<a href="#">' . "\n";
                            $html .= '<span class="jtl-text">' . esc_html($title) . '</span>' . "\n";
                            $html .= '<i class="fa-solid fa-chevron-down fa-sm jtl-icon"></i>' . "\n";
                            $html .= '</a>' . "\n";
              
                            $html .= '<div class="jtl-submenu-wrap">' . "\n";
                            $html .= '<nav class="jtl-submenu-nav">' . "\n";
                            $html .= '<ul>' . "\n";
              
                            $before_is_parent = true;
                          }
                        } else {
                          $html .= '<li>' . "\n";
                          $html .= '<a href="' . $link . '" target="' . esc_attr($target) . '">' . "\n";
                          $html .= '<span class="jtl-text">' . esc_html($title) . '</span>' . "\n";
                          $html .= '</a>' . "\n";
                          $html .= '</li>' . "\n";
                        }
                        
                        if($next_is_parent && $before_is_parent) {
                          $html .= '</ul>' . "\n";
                          $html .= '</nav>' . "\n";
                          $html .= '</div>' . "\n";
                          
                          $html .= '</li>' . "\n";
              
                          $before_is_parent = false;
                        }
          
                        if($i == (count($menu_items) - 1) && $before_is_parent) {
                          $html .= '</ul>' . "\n";
                          $html .= '</nav>' . "\n";
                          $html .= '</div>' . "\n";
                          
                          $html .= '</li>' . "\n";
                        }

                        $i++;
                      }
                      
                      echo $html;
                    }
                  ?>
                </ul>
              </nav>

              <!-- Mobile menu -->
              <nav class="jtl-menu-nav jtl-block lg:jtl-hidden">
                <ul>
                  <li>
                    <a href="#">
                      <button type="button" class="jtl-toggle-dropdown">
                        <i class="fa-solid fa-bars fa-lg fa-sm jtl-icon"></i>
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
    <form action="<?php echo esc_url(home_url()); ?>" method="GET" class="jtl-search-form dropdown">
      <input type="search" name="s" class="jtl-search-input jtl-w-full" autocomplete="off" placeholder="<?php echo __('Pencarian kata kunci..', 'jitilab'); ?>" />

      <button type="submit" class="jtl-search-button">
        <i class="fa-solid fa-search jtl-search-icon"></i>
      </button>
    </form>

    <ul class="jtl-parent">
    <?php
      if($has_primary_menu) {
        $i = 0;
        
        $html = '';
        $before_is_parent = false;

        foreach($menu_items as $menu_item) {
          $link = esc_url($menu_item->url);
          $title = $menu_item->title;
          $target = $menu_item->target;
          $is_parent = ($menu_item->menu_item_parent == 0 ? true : false);
          $has_child = (isset($menu_items[$i+1]) && $menu_items[$i+1]->menu_item_parent == $menu_item->ID ? true : false);
          $next_is_parent = (isset($menu_items[$i+1]) && $menu_items[$i+1]->menu_item_parent == 0 ? true : false);
          
          if($is_parent && !$before_is_parent) {
            if(!$has_child) {
              $html .= '<li>' . "\n";
              $html .= '<a href="' . $link . '" target="' . esc_attr($target) . '">' . "\n";
              $html .= '<span class="jtl-text">' . esc_html($title) . '</span>' . "\n";
              $html .= '</a>' . "\n";
              $html .= '</li>' . "\n";
            } else {
              $html .= '<li>' . "\n";
              
              $html .= '<a href="#">' . "\n";
              $html .= '<span class="jtl-text">' . esc_html($title) . '</span>' . "\n";
              $html .= '<i class="fa-solid fa-chevron-down fa-sm jtl-icon"></i>' . "\n";
              $html .= '</a>' . "\n";

              $html .= '<ul class="jtl-child">' . "\n";

              $before_is_parent = true;
            }
          } else {
            $html .= '<li>' . "\n";
            $html .= '<a href="' . $link . '" target="' . esc_attr($target) . '">' . "\n";
            $html .= '<span class="jtl-text">' . esc_html($title) . '</span>' . "\n";
            $html .= '</a>' . "\n";
            $html .= '</li>' . "\n";
          }
          
          if($next_is_parent && $before_is_parent) {
            $html .= '</ul>' . "\n";
            
            $html .= '</li>' . "\n";

            $before_is_parent = false;
          }

          if($i == (count($menu_items) - 1) && $before_is_parent) {
            $html .= '</ul>' . "\n";
            
            $html .= '</li>' . "\n";
          }

          $i++;
        }
        
        echo $html;
      }
    ?>
    </ul>
  </div>
</nav>