<?php

$address = get_field('address', 'options');
$phone = get_field('phone', 'options');
$email = get_field('email', 'options');

?>

<?php if ($address || $phone || $email) { ?>
  <div class="footer-block address">
    <div class="footer-block-header">
      <strong>Contact</strong>
    </div>

    <?php if ($address) { echo $address; } ?>
    </br>

    <?php if ($phone) { echo $phone; } ?>
    <?php if ($email) { ?>
      <a href="mailto:<?php echo $email; ?>" >
        <?php echo $email; ?>
      </a>
    <?php } ?>
  </div>
<?php } ?>
