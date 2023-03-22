<?php get_header(); ?>

<?php

if(have_posts() ):

    while (have_posts() ): the_post(); ?>

        <?php the_content(); ?>
    
    <?php endwhile;
endif;
?>


<!-- ============================ -->
    <div class="float-right">

        <ul class="text-muted">
            <li><?php dynamic_sidebar('sidebar-1') ?></li>
            <br>
            <li><?php dynamic_sidebar('sidebar-2') ?></li>
        </ul>
    </div>
    <div class="main-content">
        <div class="row row-cols-2">
            <?php

            $args = array(
                'type' => 'post',
                'posts_per_page' => 4,
            );

            $lastBlog = new WP_Query($args);

            if($lastBlog->have_posts() ):

                while ($lastBlog->have_posts() ): $lastBlog->the_post(); ?>
                        <?php get_template_part('content'); ?>
                <?php endwhile;
            endif;

            wp_reset_postdata();

            ?>
        </div>
    </div>


<?php get_footer(); ?>