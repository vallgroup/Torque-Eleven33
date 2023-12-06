<?php
  // Add GTag code, as per client. Approved by Irini Boeder.
  // - MV
?>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KMQ9WL5"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<header
  id="header-style-1"
  class="torque-header">

  <div class="row torque-header-content-wrapper torque-navigation-toggle">

    <div class="torque-header-logo-wrapper">
      <?php get_template_part( 'parts/shared/logo', 'dark' ); ?>
    </div>

    <div class="torque-header-burger-menu-wrapper">
      <?php get_template_part( 'parts/elements/element', 'burger-menu-squeeze'); ?>
    </div>

    <div class="header-links-wrapper">
      <?php get_template_part( 'parts/shared/header-templates/header', 'top-links'); ?>

      <div class="torque-header-menu-items-inline-wrapper">
        <?php get_template_part( 'parts/shared/header-parts/menu-items/menu-tree', 'inline'); ?>
      </div>
    </div>

  </div>

  <div class="torque-navigation-toggle torque-header-menu-items-mobile">
    <?php get_template_part( 'parts/shared/header-templates/header', 'top-links'); ?>
    <?php get_template_part( 'parts/shared/header-parts/menu-items/menu-tree', 'stacked'); ?>
  </div>

  <?php get_template_part( 'parts/shared/header-templates/header', 'specials-bar'); ?>

</header>
