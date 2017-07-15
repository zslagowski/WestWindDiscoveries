<?php
/* Template Name: Events/Classes */

get_header(); ?>

<div id="primary" class="content-area container">
  <main id="main" class="site-main" role="main">

    <header class="entry-header">
  		<?php the_title( '<h1 class="entry-title gemm-page-entry-title text-center">', '</h1>' ); ?>
  	</header><!-- .entry-header -->

    <?php $query = new WP_Query( array(
      'post_type' => 'wwd_events_classes'
     ) ); ?>

    <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>


            <div class="gemm-front-posts row">
                <div class="col-md-5"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a></div>
                <div class="col-md-7">
                  <div class="gemm-front-posts-title"><h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2></div>
                  <div class="gemm-front-posts-meta"><?php the_field('wwd_dates'); ?></div>
                  <div class="gemm-front-posts-meta"><?php the_field('wwd_location'); ?></div>
                  <div class="gemm-front-posts-meta"><?php the_field('wwd_grade_level'); ?></div>
                  <div class="gemm-front-posts-meta"><?php the_field('wwd_time'); ?></div>
                  <div class="gemm-front-posts-excerpt"><?php the_excerpt(); ?></div>
                </div>
                <div class="gemm-events-classes-read-more text-right"><a href="<?php the_permalink(); ?>">Learn More >>></div>
            </div>


    <?php endwhile; else : ?>
        <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
    <?php endif; ?>

  </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>
