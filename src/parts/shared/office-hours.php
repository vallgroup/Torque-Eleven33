<?php

$leasing_office_hours = get_field('leasing_office_hours', 'options');
$management_office_hours = get_field('management_office_hours', 'options');

?>

<?php if ($leasing_office_hours) { ?>
  <div class="footer-block leasing-hours">
    <div class="footer-block-header">
      <strong>Leasing Office Hours</strong>
    </div>

    <?php echo $leasing_office_hours; ?>
  </div>
<?php } ?>

<?php if ($management_office_hours) { ?>
  <div class="footer-block management-hours">
    <div class="footer-block-header">
      <strong>Management Office Hours</strong>
    </div>

    <?php echo $management_office_hours; ?>
  </div>
<?php } ?>
