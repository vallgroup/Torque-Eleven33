<?php
/**
 * Template part for displaying page content in with-gutenberg.php
 *
 * @package Torque
 */

 ?>
 <div class="the-content" >
  <?php echo the_content(); ?>
 </div>

<?php
get_template_part('/parts/acf/modules');
?>
