<?php /* Template Name: Template page "about" */ ?>



<?php get_header() ?>

<main>
    <div class="main_section">


        <?php 
            if ( have_posts() ): while ( have_posts() ): the_post(); ?>
        <article class="project_preview home_bloc">
            <div class="home_bloc_contener">
                <div class="home_bloc_contener_text" style="background-image:url(<?= the_post_thumbnail_url() ?>)">
                    <h2><?php the_title(); ?></h2>
                    <div><?php the_excerpt(); ?></div>
                    <p><a href="<?php the_permalink() ?>" class="post_link">read more</a><a href="#"
                            class="true_link">see the projetc</a></p>
                </div>
                <div class="home_bloc_contener_img">
                    <?php
                                if ( has_post_thumbnail() ) { // Vérifies qu'une miniature est associée à l'article.
                                    the_post_thumbnail(array(500,500));
                                }
                                ?>
                </div>

            </div>
        </article>
        <?php endwhile; endif;?>

    </div>
</main>





<?php get_footer() ?>