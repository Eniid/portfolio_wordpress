<?php /* Template Name: Template page "about" */ ?>



<?php get_header() ?>

<?php 
if ( have_posts() ): while ( have_posts() ): the_post(); ?>

<main role="main">
    <div class="main_section menu <?php the_field('classe'); ?>">
        <div class="project">
            <div class="project_content">
                    <article class="project_article">
                        <div>
                            <h2 role="heading" aria-level="2"><?php the_title(); ?></h2>
                            <p><?php the_content(); ?></p>
                            <p class="project_cta_contener about_p">
                                <label for="checkbox_chat" class="true_link cta">Get in tuch</label>
                            </p>
                        </div>
                        <div>
                            <div class="project_palette">
                                    <img alt="" src="<?php bloginfo('template_url'); ?>/img/moi.png">
                                    <img alt="" src="<?php bloginfo('template_url'); ?>/img/moi5.png">
                                    <img alt="" src="<?php bloginfo('template_url'); ?>/img/moi2.png">
                                    <img alt="" src="<?php bloginfo('template_url'); ?>/img/moi3.png">
                                    <img alt="" src="<?php bloginfo('template_url'); ?>/img/moi4.png">
                            </div>
                        </div>
                    </article>
            </div>
        </div>
    </div>
</main>
<?php endwhile; endif;?>




<?php get_footer() ?>