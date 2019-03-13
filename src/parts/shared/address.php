<?php

$address = get_field('address', 'options');

?>

<?php if ($address) { ?>
  <div class="footer-block address">
    <div class="footer-block-header">
      <strong>Address</strong>
    </div>

    <?php echo $address; ?>
  </div>
<?php } ?>
