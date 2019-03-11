<?php

$specials_bar = get_field('text_specials_bar', 'options');


if ($specials_bar) { ?>

  <div class="specials-bar" >
    <?php echo $specials_bar; ?>
  </div>

<?php } ?>
