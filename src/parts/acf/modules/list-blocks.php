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
    <div class="list-blocks-wrapper">
    <?php
    while( have_rows('list_blocks') ) { the_row();

      $title = get_sub_field('title');
      ?>

      <div class="list-block" >
        <h4><?php echo $title; ?></h4>

        <?php
        if( have_rows('items') ) {
          while( have_rows('items') ) { the_row();

            $content = get_sub_field('list_item_content');
            ?>

            <div class="list-block-item" >
              <?php echo $content; ?>
            </div>

            <?php
          }
        }
        ?>
      </div>

      <?php
    }
    ?>
    </div>
    <?php
  }
  ?>

</div>
