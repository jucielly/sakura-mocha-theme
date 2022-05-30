<?php get_header() ?>

<div class="posts-container">
    <?php
    if (have_posts()) :
        while (have_posts()) : the_post(); ?>

            <div class="post-container">
                <h2><?php the_title() ?></h2>
                <h4>Posted on <?php the_time('F jS, Y') ?></h4>
                <a href="<?php the_permalink() ?>">Read full post</a>
                <em><?php the_content() ?></em>
            </div>

    <?php endwhile;

    else :
        echo '<p>There are no posts!</p>';

    endif;
    ?>
</div>

<?php get_footer() ?>