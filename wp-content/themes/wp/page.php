<?php

get_header();
?>

<?php while( have_posts() ) : the_post();
    $more = 1;
    ?>
<div class="uk-container">
    <h1 class="uk-text-center"><?php the_title();?></h1>
    <div class="uk-text-center uk-list"><?php the_content();?></div>
</div>
<?php
endwhile; ?>
<?php

if(is_page('Рецепты')) { ?>
    <div class="uk-container">
    <ul class="uk-list uk-text-center">
    <?php query_posts('category_name=рецепты&showposts=10'); ?>
    <?php while (have_posts()) : the_post(); ?>
        <li><a href="<?php the_permalink(); ?>">
                <?php the_title(); ?>
            </a></li>
    <?php endwhile;
} ?>
    </ul>
    </div>




<?php
get_footer();
?>