<div class="list-blocks-section" >

  <?php if ($title) { ?>
    <h2><?php echo $title; ?></h2>
  <?php } ?>

  <?php if ($description) { ?>
    <div class="description"><?php echo $description; ?></div>
  <?php } ?>

  <?php
  if( have_rows('list_blocks') ) {
    ?>
    <div class="list-blocks-wrapper mobile-only">
    <?php
    foreach ($list_blocks as $list_block) {
      include locate_template('/parts/acf/modules/list-blocks/block.php');
    }
    ?>
    </div>

    <div class="list-blocks-wrapper tablet-only">
    <?php
    $num_cols = 2;

    $col_num = 0;
    include locate_template('/parts/acf/modules/list-blocks/blocks-col.php');

    $col_num = 1;
    include locate_template('/parts/acf/modules/list-blocks/blocks-col.php');
    ?>
    </div>

    <div class="list-blocks-wrapper desktop-only">
    <?php
    $num_cols = 3;

    $col_num = 0;
    include locate_template('/parts/acf/modules/list-blocks/blocks-col.php');

    $col_num = 1;
    include locate_template('/parts/acf/modules/list-blocks/blocks-col.php');

    $col_num = 2;
    include locate_template('/parts/acf/modules/list-blocks/blocks-col.php');
    ?>
    </div>
    <?php
  }
  ?>

</div>
