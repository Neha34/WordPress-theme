<?php
/*
 Template Name: Special Layout
 */
/*Common template for faq, terms & cond and privacy policy */
get_header();

if(have_posts()):
    while (have_posts()):the_post();?>

        <article class="post page">
            <h2><?php the_title(); ?></h2>

            <div class = "info-box">
                <h4>Disclaimer Title</h4>
                <p> Hello, Hello. This is disclaimer that is supposed to be printed.!!!!!!!</p>
            </div>
            <?php the_content(); ?>
        </article>
    <?php endwhile;
else:
    echo "<p>No content found</p>";
endif;
get_footer();
?>