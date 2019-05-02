<?php
$leasing = get_field('leasing_phone_number', 'options');
?>

<div class="top-links">
  <?php if ($leasing) { ?>
    <div class="top-link leasing">
      <a href="tel:<?php echo $leasing; ?>" >
        Leasing <?php echo $leasing; ?>
      </a>
    </div>
  <?php } ?>
  <div class="top-link">
    <a href="https://eleven33.residentportal.com/resident_portal/?module=authentication&action=view_login" target="_blank" referrer="noopener noreferrer">
      Resident Login
    <a>
  </div>
  <div class="top-link">
    <a href="https://eleven33.prospectportal.com/Apartments/module/application_authentication/property[id]/673841/show_in_popup/false/kill_session/1/" target="_blank" referrer="noopener noreferrer">
      Apply Now
    <a>
  </div>
</div>
