<?php
/**
 * Template part for displaying page content in page.php
 *
 * @package Torque
 */
?>

<div class="content-contact" >
  <h1><?php echo the_title(); ?></h1>

  <?php echo the_content(); ?>

  <div class="contact-blocks" >
    <?php get_template_part('parts/shared/office-hours'); ?>
    <?php get_template_part('parts/shared/address'); ?>
  </div>

</div>


<?php get_template_part('/parts/acf/modules'); ?>
