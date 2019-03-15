<?php

$office_hours = get_field('office_hours', 'options');

?>

<?php if ($office_hours) { ?>
  <div class="footer-block office-hours">
    <div class="footer-block-header">
      <strong>Office Hours</strong>
    </div>

    <?php echo $office_hours; ?>
  </div>
<?php } ?>
