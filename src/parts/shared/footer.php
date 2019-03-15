<?php

$management_logo = get_field('management_logo', 'options');
$copyright = get_field('copyright_text', 'options');
$legal = get_field('legal_page', 'options');

?>

<footer>
  <div class="logo-wrapper">
    <?php get_template_part( 'parts/shared/logo', 'white' ); ?>
  </div>

  <div class="blocks-wrapper" >
    <?php /*
    <div class="footer-block footer-subscribe-form">
      <div class="footer-block-header">
        Subscribe for Updates
      </div>

      <input placeholder="First Name" />
      <input placeholder="Last Name" />
      <input placeholder="Email" />

      <button>Submit</button>
    </div>
    */ ?>

    <?php get_template_part('parts/shared/contact-details'); ?>

    <?php get_template_part('parts/shared/office-hours'); ?>


    <div class="footer-block social">
      <div class="footer-block-header">
        Connect with us on social
      </div>

      <?php get_template_part('parts/shared/social-icons'); ?>
    </div>

    <?php if ($management_logo) { ?>
      <div class="footer-block managed-by">
        <div class="footer-block-header">
          Professionally managed by
        </div>

        <img src="<?php echo $management_logo; ?>" />
      </div>
    <?php } ?>
  </div>

  <?php if ($copyright) { ?>
    <div class="copyright-wrapper">
      <?php
      if (have_rows('accessibility_logos', 'options')) {

        ?><div class="accessibility-logos-wrapper"><?php

        while(have_rows('accessibility_logos', 'options')) { the_row();

          ?><img src="<?php echo get_sub_field('logo'); ?>" class="accessibility-logo"/><?php

        }

        ?></div><?php
      }
      ?>

      <?php echo $copyright; ?>

      <?php if ($legal) { ?>
        <a href="<?php echo $legal; ?>" class="legal-link">
          Legal
        </a>
      <?php } ?>
    </div>
  <?php } ?>
</footer>
