<?php
$leasing = get_field('leasing_phone_number', 'options');
?>

<div class="top-links">
  <?php if ($leasing) { ?>
    <div class="top-link leasing">
      Leasing <?php echo $leasing; ?>
    </div>
  <?php } ?>
  <div class="top-link">
    <a href="/">
      Resident Login
    <a>
  </div>
  <div class="top-link">
    <a href="/">
      Apply Now
    <a>
  </div>
</div>
