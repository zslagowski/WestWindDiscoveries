<?php get_header(); ?>

<section id="gemm-front-header-image" class="">
    <?php $query = new WP_Query( array( 'pagename' => 'home' ) ); ?>

    <?php if ( $query->have_posts() ) : while ( have_posts() ) : the_post(); ?>

            <div class="gemm-homepage-welcome-msg-bg" style="background-image: url('<?php the_post_thumbnail_url(); ?>')">
              <div class="container gemm-homepage-welcome-msg text-center">
                <h1>Shouldn't they all grow up speaking a second language?</h1>
              </div> <!--.container -->
            </div> <!--.rb-homepage-welcome-msg -->

    <?php endwhile; else : ?>
      <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
    <?php endif; wp_reset_postdata(); ?>
</section>
<section id="gemm-front-posts" class="">
    <div class="container">

      <div class="col-md-12 gemm-front-page-content">
        <?php the_content(); ?>
      </div>

      <h2 class="text-center" style="margin: 2em 0;">Upcoming Events and Classes</h2>

      <?php $query = new WP_Query( array(
        'post_type' => 'wwd_events_classes',
        'posts_per_page' => 3
       ) ); ?>

      <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>

        <div class="container">
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
              </div>
        </div> <!-- container -->


      <?php endwhile; else : ?>
          <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
      <?php endif; ?>

      <div class="gemm-front-posts-read-more text-right"><a href="/westwinddiscoveries/classes-and-events">More Events and Classes</a></div>
    </div> <!--container-->
</section>


<?php get_footer(); ?>
