<?php

$modules = 'modules';

if ( have_rows( $modules ) ):

  while ( have_rows( $modules ) ) : the_row();

    switch ( get_row_layout() ) {

      case 'content_section' :

        $align = get_sub_field( 'align' );
        $background = get_sub_field('background');
        $title = get_sub_field( 'title' );
        $body = get_sub_field( 'body' );
        $cta = get_sub_field('cta');

        include locate_template('/parts/acf/modules/content-section.php');

        break;

      case 'floor_plans' :

        echo do_shortcode('[torque_floor_plans]');

        break;


      case 'gallery_grid' :

        $num_rows = get_sub_field( 'grid_rows' );

        ?>
        <div class="row gallery-module" >
          <div class="gallery-grid-root grid-rows-<?php echo $num_rows; ?>" >
        <?php
          include locate_template('/parts/acf/modules/gallery-grid.php');
        ?>
          </div>
        </div>
        <?php

        break;
    }

  endwhile;
endif;

?>
