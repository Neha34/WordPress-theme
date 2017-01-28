<?php
get_header();

if(have_posts()):
    ?>


    <h2> <?php
        if(is_category()){
            single_cat_title();
        }elseif(is_tag()){
            single_tag_title();
        }elseif(is_author()){
            the_post();
            echo 'Author archives:'.get_the_author();
            rewind_posts();
        }elseif(is_day()){
            echo 'Daily archive:'.get_the_date();
        }elseif(is_month()){
            echo 'Monthly archive:'.get_the_date('F Y');
        }elseif(is_year()){
            echo 'Yearly archive:'.get_the_date('Y');
        }else{
            echo 'archive';
        }
        ?></h2>
    <?php
    while (have_posts()):the_post();

        get_template_part('content', get_post_format());
    endwhile;

    echo paginate_links();

else:
    echo "<p>No content found</p>";
endif;
get_footer();
?>