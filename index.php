<?php get_header() ?>

<main role="main">
    <div class="main_section menu">
        
        <div class="presentation home_bloc child" data-bg="linear-gradient(95deg, #F99B96, #DA6A74)" id="pres">


            <div class="home_bloc_contener home_bloc_contener_main">
                <div class="home_bloc_contener_text">
                    <div class="round_group_1 round">
                        <img src="<?php bloginfo('template_url'); ?>/img/lblue_e.svg" alt="" class="rond_1">
                        <img src="<?php bloginfo('template_url'); ?>/img/blue.svg" alt="" class="rond_2">
                    </div>
                    <div class="round_group_2 round">
                        <img src="<?php bloginfo('template_url'); ?>/img/blue_e.svg" alt="" class="rond_3">
                        <img src="<?php bloginfo('template_url'); ?>/img/pink.svg" alt="" class="rond_4">
                    </div>
                    <div class="round_group_3 round">
                        <img src="<?php bloginfo('template_url'); ?>/img/lblue_e.svg" alt="" class="rond_5">
                        <img src="<?php bloginfo('template_url'); ?>/img/pink.svg" alt="" class="rond_6">
                    </div>
                    <div class="round_group_4 round">
                        <img src="<?php bloginfo('template_url'); ?>/img/blue_e.svg" alt="" class="rond_7">
                        <img src="<?php bloginfo('template_url'); ?>/img/lblue.svg" alt="" class="rond_8">
                    </div>
                    <div class="round_group_5 round">
                        <img src="<?php bloginfo('template_url'); ?>/img/pink_e.svg" alt="" class="rond_9">
                        <img src="<?php bloginfo('template_url'); ?>/img/blue.svg" alt="" class="rond_10">
                    </div>
                    <h2 role="heading" aria-level="1">Céline Everaert</h2>
                    <h3 class="bounce home_bloc_contener_main_subtitle">Web designer & web devlopper</h3>
                </div>
            </div>
        </div>

        <?php 
            if ( have_posts() ): while ( have_posts() ): the_post(); ?>
        <article class="project_preview home_bloc child <?php the_field('classe'); ?>"  data-color="<?php the_field('classe'); ?>" data-bg="linear-gradient(45deg, <?php the_field('colorl'); ?>, <?php the_field('colord'); ?>" data-bg-2="<?php the_field('colorl'); ?>55" data-bg-3="<?php the_field('colorl'); ?>">
            <div class="home_bloc_contener" id="<?php the_field('classe'); ?>">
                <div class="home_bloc_contener_text">
                    <h2 role="heading" aria-level="2"><?php the_title(); ?></h2>
                    <div class="home_bloc_contener_text_project"><?php the_excerpt(); ?></div>
                    <p><a href="<?php the_permalink() ?>" class="post_link main_cta_btn cta" style="background: linear-gradient(<?php the_field('colorl'); ?>, <?php the_field('colord'); ?>);"><span></span> read more</a><a href="<?php the_field('web'); ?>"
                            class="true_link cta" aria-label="Voir <?php the_title(); ?> (nouvelle fenêtre)"  style="color:<?php the_field('colord'); ?>; border-color:<?php the_field('colord'); ?>" target="_blank" rel="noopener noreferrer">see the projetc</a></p>
                </div>
                <div class="home_bloc_contener_img index_loop_img_contener">
                    <?php
                                if ( has_post_thumbnail() ) { // Vérifies qu'une miniature est associée à l'article.
                                    the_post_thumbnail(array(450,450));
                                }
                                ?>        
                </div>

            </div>
        </article>
        <?php endwhile; endif;?>


        <div class="home_bloc child" id="project"  data-bg="linear-gradient(45deg, #F99B96, #DA6A74)">
            <div class="home_bloc_contener">
                <div class="home_bloc_contener_you">
                    <h2 role="heading" aria-level="2">Your projects here ? </h2>
                    <p>You need a new website ? Let's get intouch and see what we can do together to make your website awsome and fit to your needs.</p>
                    <p><a href="http://portfolio.celine-everaert.com/about-me/" class="post_link cta main_cta_btn">more about me</a></p>
                </div>

            </div>
        </div>


    </div>

    <div class="nav_bar_contener">
        <div class="nav_bar">
            <div class="nav_bar_button"></div>
            <div class="nav_bar_link_contner"><a href="#pres" class="nav_bar_link">  <div class="infobulle">Home</div>
            &nbsp;</a></div>
            <?php 
                if ( have_posts() ): while ( have_posts() ): the_post(); ?>
            <div class="nav_bar_link_contner"><a href="#<?php the_field('classe'); ?>" class="nav_bar_link"><div class="infobulle"><?php the_title(); ?></div>&nbsp;</a></div> 
            <?php endwhile; endif;?>
            <div class="nav_bar_link_contner"><a href="#project" class="nav_bar_link"><div class="infobulle">About me</div>&nbsp;</a></div>
        </div>
    </div>
</main>





<?php get_footer() ?>