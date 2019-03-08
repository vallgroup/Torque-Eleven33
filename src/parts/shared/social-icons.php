<?php

  if ( have_rows('social', 'options') ) {
    ?>

    <div class="social-icon-container social-icon-container-footer">

    <?php
    while ( have_rows('social', 'options') ) { the_row();

      $icon = get_sub_field('icon');
      $link = get_sub_field('link');

    ?>

      <a href="<?php echo $link; ?>" target="_blank" class="social-link <?php echo $icon; ?>">
        <i class="fa fa-<?php echo $icon; ?> fa-border"></i>
      </a>

    <?php
    }
    ?>

    </div>

    <?php
  }

  ?>
