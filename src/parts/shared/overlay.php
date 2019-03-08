<?php if (($overlay_type === 'text' && $text_overlay) || ($overlay_type === 'default')) { ?>
  <div class="overlay type-<?php echo $overlay_type; ?>" >
      <?php if ($overlay_type === 'default') { ?>
        <h1 class="hero-three">3</h1>
        <h1 class="hero-three three-small">3</h1>
      <?php } else { ?>
        <h1>
          <?php echo $text_overlay; ?>
        </h1>
      <?php } ?>
  </div>
<?php } ?>
