<?php

$type = get_field('hero_type');

$image = get_field('hero_image');
$slideshow = get_field('hero_slideshow');

$overlay_type = get_field('hero_overlay_type');
$text_overlay = get_field('hero_text_overlay');


if (($type === 'image' && $image) || ($type === 'slideshow' && $slideshow)) { ?>

<div class="page-hero type-<?php echo $type; ?>">

  <?php if ($image) { ?>
    <div class="hero-image-size">
      <div class="hero-image" style="background-image: url(<?php echo $image; ?>);" ></div>
    </div>
  <?php } else {
    echo do_shortcode($slideshow);
  } ?>

  <?php include locate_template('/parts/shared/overlay.php'); ?>
</div>

<?php } else { ?>

<div class="page-hero-filler" ></div>

<?php } ?>
