<div
  class="row content-section <?php echo $align; ?>">

  <?php
  if ($background === 'threes') {
    $overlay_type = 'default';

    include locate_template('/parts/shared/overlay.php');
  }
  ?>

  <div class="content-wrapper" >
    <h1><?php echo $title; ?></h1>

    <?php if ($body) { ?>
      <div class="body"><?php echo $body; ?></div>
    <?php } ?>

    <?php if ($cta) { ?>
      <div class="cta-wrapper" >
        <a href="<?php echo $cta['url']; ?>" target="<?php echo $cta['target']; ?>">
          <button><?php echo $cta['title']; ?></button>
        </a>
      </div>
    <?php } ?>
  </div>

</div>
