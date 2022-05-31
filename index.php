<?php get_header() ?>

<div class="posts-container">
    <?php
    if (have_posts()) :
        while (have_posts()) : the_post(); ?>

            <div class="post-container">
                <h2 class="post-title"><?php the_title() ?></h2>
                <h4 class="post-date">Posted on <?php the_time('F jS, Y') ?></h4>
                <div class="post-content-container">
                    <p class="post-content"><?php the_content() ?></p>
                    <a class="post-permalink" href="<?php the_permalink() ?>">Read full post --> </i></i></a>
                </div>
            </div>

    <?php endwhile;

    else :
        echo '<p>There are no posts!</p>';

    endif;
    ?>
</div>

<?php get_footer() ?>