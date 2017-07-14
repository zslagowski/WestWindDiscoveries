<?php get_header(); ?>

<section id="gemm-front-header-image" class="">
    <?php $query = new WP_Query( array( 'pagename' => 'home' ) ); ?>

    <?php if ( $query->have_posts() ) : while ( have_posts() ) : the_post(); ?>

            <div class="gemm-homepage-welcome-msg-bg" style="background-image: url('<?php the_post_thumbnail_url(); ?>')">
              <div class="container gemm-homepage-welcome-msg">
                <?php the_content(); ?>
              </div> <!--.container -->
            </div> <!--.rb-homepage-welcome-msg -->
    <?php endwhile; else : ?>
      <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
    <?php endif; wp_reset_postdata(); ?>
</section>
<section id="gemm-front-posts" class="">
    <div class="container">

        <h2 class="text-center">Recent Posts</h2>

        <?php $query = new WP_Query( array( 'posts_per_page' => 3 ) ); ?>

        <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>


                <div class="gemm-front-posts row">
                    <div class="col-md-5"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a></div>
                    <div class="col-md-7">
                      <div class="gemm-front-posts-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
                      <div class="gemm-front-posts-meta"><?php echo get_the_date(); ?> | <?php the_category( ' | '); ?></div>
                      <div class="gemm-front-posts-excerpt"><?php the_excerpt(); ?></div>
                    </div>
                </div>


        <?php endwhile; else : ?>
            <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
        <?php endif; ?>

        <div class="gemm-front-posts-read-more text-right"><a href="/gemmportfolio/blog">More Posts</a></div>
    </div> <!--container-->
</section>


<?php get_footer(); ?>
