<article class = "post post-aside">
    <p class="mini-meta"><?php the_author(); ?> @ <?php the_time('F j, Y');?></p>
    <p>
        <?php echo get_the_excerpt(); ?>
        <a href="<?php the_permalink(); ?>">Read more &raquo;</a>
    </p>
</article>