<?php
$title = $list_block['title'];
?>

<div class="list-block" >
  <h4><?php echo $title; ?></h4>

  <?php
  if( count($list_block['items']) ) {
    foreach ($list_block['items'] as $item) {

      $content = $item['list_item_content'];
      ?>

      <div class="list-block-item" >
        <?php echo $content; ?>
      </div>

      <?php
    }
  }
  ?>
</div>
