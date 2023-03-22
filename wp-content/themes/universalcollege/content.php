<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <header class="entry-header">
        <?php the_title( sprintf('<h3 class="entry-title"><a class="text-muted" href="%s">', esc_url( get_permalink() ) ),'</a></h3>' ); ?>
        <hr class="w-75">
    </header>

    <?php

    $image = get_field('your_image');

    if( !empty( $image ) ): ?>

        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />

    <?php endif; ?>

    <?php the_field('description'); ?><br><br>

    <?php


    $link = get_field('continue_reading');

    if( $link ):
        $link_url = $link['url'];
        $link_title = $link['title'];
        $link_target = $link['target'] ? $link['target'] : '_self';
        ?>

    <button type="button" class="btn btn-primary btn-sm pt-1">

        <a style="color: white;" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><b><?php echo esc_html( $link_title ); ?></b></a>

    </button>

    <?php endif; ?>

</article>

