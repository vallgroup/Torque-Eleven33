<?php

$leasing_office_hours = get_field('leasing_office_hours', 'options');
$management_office_hours = get_field('management_office_hours', 'options');
$address = get_field('address', 'options');
$phone = get_field('phone', 'options');
$website = get_field('website', 'options');
$management_logo = get_field('management_logo', 'options');
$copyright = get_field('copyright_text', 'options');

?>

<footer>
  <div class="logo-wrapper">
    <?php get_template_part( 'parts/shared/logo', 'white' ); ?>
  </div>

  <div class="blocks-wrapper" >
    <div class="footer-block footer-subscribe-form">
      <div class="footer-block-header">
        Subscribe for Updates
      </div>

      <input placeholder="First Name" />
      <input placeholder="Last Name" />
      <input placeholder="Email" />

      <button>Submit</button>
    </div>

    <?php if ($leasing_office_hours) { ?>
      <div class="footer-block leasing-hours">
        <div class="footer-block-header">
          Leasing Office Hours
        </div>

        <?php echo $leasing_office_hours; ?>
      </div>
    <?php } ?>

    <?php if ($management_office_hours) { ?>
      <div class="footer-block management-hours">
        <div class="footer-block-header">
          Management Office Hours
        </div>

        <?php echo $management_office_hours; ?>
      </div>
    <?php } ?>

    <?php if ($address) { ?>
      <div class="footer-block address">
        <div class="footer-block-header">
          Address
        </div>

        <?php echo $address; ?>
      </div>
    <?php } ?>

    <?php if ($phone || $website) { ?>
      <div class="footer-block phone-number">
        <?php if ($phone) { ?>
          <div class="footer-block-header">
            Phone Number
          </div>
          <?php echo $phone; ?>
        <?php } ?>

        <?php if ($website) { ?>
          <div class="footer-block-header">
            Website
          </div>
          <a href="<?php echo $website; ?>" target="_blank" referrer="norefferer noopener" >
            <?php echo $website; ?>
          </a>
        <?php } ?>
      </div>
    <?php } ?>

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
      <?php echo $copyright; ?>
    </div>
  <?php } ?>
</footer>
