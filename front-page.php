<?php

get_header(); ?>

    <!-- site-content -->
    <div class="site-content clearfix">

            <?php if (have_posts()) :
                while (have_posts()) : the_post();

                    the_content();

                endwhile;

            else :
                echo '<p>No content found</p>';

            endif;?>
        <div class="home-columns clearfix">
            <div class="one-half">
                <h2>Latest books</h2>
                <?php //book posts begin here
                $booksPosts = new WP_Query('cat=3&posts_per_page=2');
                if ($booksPosts->have_posts()) :
                    while ($booksPosts->have_posts()) : $booksPosts->the_post();?>

                        <!-- post-item -->
                        <div class="post-item clearfix">

                            <!-- post-thumbnail -->
                            <div class="square-thumbnail">
                                <a href="<?php the_permalink(); ?>"><?php
                                    if (has_post_thumbnail()) {
                                        the_post_thumbnail('square-thumbnail');
                                    } else { ?>

                                        <img src="<?php echo get_template_directory_uri(); ?>/images/book.png">

                                    <?php } ?></a>
                            </div><!-- /post-thumbnail -->

                            <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> <span class="subtle-date"><?php the_time('n/j/Y'); ?></span></h4>

                            <?php the_excerpt(); ?>

                        </div><!-- /post-item -->


                    <?php endwhile;

                else :

                endif;
                wp_reset_postdata();?>
                <span class="horiz-center"><a href="<?php echo get_category_link(3); ?>" class="btn-a">View all Book Posts</a></span>
            </div>

            <div class="one-half last">
                <h2>Latest Music</h2>
                <?php //music posts begin here
                $musicPosts = new WP_Query('cat=2&posts_per_page=2');
                if ($musicPosts->have_posts()) :
                    while ($musicPosts->have_posts()) : $musicPosts->the_post(); ?>

                        <!-- post-item -->
                        <div class="post-item clearfix">

                            <!-- post-thumbnail -->
                            <div class="square-thumbnail">
                                <a href="<?php the_permalink(); ?>"><?php
                                    if (has_post_thumbnail()) {
                                        the_post_thumbnail('square-thumbnail');
                                    } else { ?>

                                        <img src="<?php echo get_template_directory_uri(); ?>/images/music.jpg">

                                    <?php } ?></a>
                            </div><!-- /post-thumbnail -->

                            <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> <span class="subtle-date"><?php the_time('n/j/Y'); ?></span></h4>

                            <?php the_excerpt(); ?>

                        </div><!-- /post-item -->

                    <?php endwhile;

                else :

                endif;
                wp_reset_postdata(); ?>
                <span class="horiz-center"><a href="<?php echo get_category_link(2); ?>" class="btn-a">View all Music Posts</a></span>
            </div>
        </div>

    </div><!-- /site-content -->

<?php get_footer();

?>