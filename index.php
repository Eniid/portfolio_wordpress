<?php get_header() ?>

<main>
    <div class="main_section menu">
        
        <div class="presentation home_bloc">
            <div class="home_bloc_contener home_bloc_contener_main">
                <div class="home_bloc_contener_text">
                    <h2>Céline Everaert</h2>
                    <h3>Web designer & web devlopper</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea.</p>
                </div>
                <div class="home_bloc_contener_img">
                    <img src="<?= pf_get_theme_asset('img/moi_acceuil.png') ?>" alt="" height='500' width='500'>
                </div>

            </div>
        </div>

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


        <div class="home_bloc">
            <div class="home_bloc_contener">
                <div class="home_bloc_contener_text">
                    <h2>Your projects here ? </h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                        laboris nisi ut aliquip ex ea.</p>
                    <p><a href="#" class="post_link">read more</a></p>
                </div>
                <div class="home_bloc_contener_img">
                    <img src="<?php bloginfo('template_url'); ?>/img/moi_acceuil.png" alt="" height='500' width='500'>
                </div>

            </div>
        </div>


    </div>
</main>





<?php get_footer() ?>