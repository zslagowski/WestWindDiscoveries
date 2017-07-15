<?php if( have_posts() ) { the_post(); rewind_posts(); } ?>
		<?php if( 'wwd_events_classes' == get_post_type()) {
			include( TEMPLATEPATH . '/single-events.php');
		} else {
			include( TEMPLATEPATH . '/single-blog.php');
		}	?>
