<?php if (($overlay_type === 'text' && $text_overlay) || ($overlay_type === 'default')) { ?>
  <div class="overlay type-<?php echo $overlay_type; ?>" >
      <?php if ($overlay_type === 'default') { ?>
        <div class="threes-image" ></div>
      <?php } else { ?>
        <h1>
          <?php echo $text_overlay; ?>
        </h1>
      <?php } ?>
  </div>
<?php } ?>
