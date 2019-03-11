<?php
if( have_rows('images') ) {
  while( have_rows('images') ) { the_row();

    $src = get_sub_field('image');
    $col_start = get_sub_field('column_start');
    $col_end = get_sub_field('column_end');
    $row_start = get_sub_field('row_start');
    $row_end = get_sub_field('row_end');
    $width = intval($col_end) - intval($col_start);
    $height = intval($row_end) - intval($row_start);

    ?>

    <img class="
      grid-image
      grid-column-<?php echo $col_start; ?>-<?php echo $width; ?>
      grid-row-<?php echo $row_start; ?>-<?php echo $height; ?>
      grid-width-<?php echo $width; ?>
      grid-height-<?php echo $height; ?>
    " src="<?php echo $src; ?>" />

    <?php
  }
}
?>
