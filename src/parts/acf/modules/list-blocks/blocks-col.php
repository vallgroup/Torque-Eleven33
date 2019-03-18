<div id="block-col-<?php echo $col_num; ?>" class="block-col">

  <?php
  $index = 0;
  foreach ($list_blocks as $list_block) {
    $should_add_block = intval($index) % intval($num_cols) === intval($col_num);

    if ($should_add_block) {
      include locate_template('/parts/acf/modules/list-blocks/block.php');
    }

    $index++;
  }
  ?>

</div>
