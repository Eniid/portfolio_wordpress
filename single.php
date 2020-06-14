


<?php get_header() ?>

  <?php 
            if ( have_posts() ): while ( have_posts() ): the_post(); ?>
      <body  style="background: linear-gradient(<?php the_field('colorl'); ?>, <?php the_field('colord'); ?>);">            
        <main role="main">

            <div class="main_section menu <?php the_field('classe'); ?>">
                <div class="project">
                    <div class="project_content">
                            <article class="project_article">
                                <div>
                                    <h2 role="heading" aria-level="2"><?php the_title(); ?></h2>
                                    <p><?php the_content(); ?></p>
                                    <p class="project_cta_contener"><a href="<?php the_field('web'); ?>"
                            class="true_link cta" style="color:<?php the_field('colord'); ?>; border-color:<?php the_field('colord'); ?>" target="_blank" rel="noopener noreferrer">The project</a><a href="<?php the_field('github'); ?>"
                            class="true_link cta" style="color:<?php the_field('colord'); ?>; border-color:<?php the_field('colord'); ?>" target="_blank" rel="noopener noreferrer">GitHub</a><a href="http://portfolio.celine-everaert.com/about-me/"
                            class="true_link cta" style="color:<?php the_field('colord'); ?>; border-color:<?php the_field('colord'); ?>" target="_blank" rel="noopener noreferrer">Read about me</a></p>
                                </div>
                                <div>
                                    <div class="project_palette">
                                            <div style="background: <?php the_field('c1'); ?>">
                                                <span><?php the_field('c1'); ?></span>
                                            </div>
                                            <div style="background: <?php the_field('c2'); ?>">
                                                <span><?php the_field('c2'); ?></span>
                                            </div>
                                            <div style="background: <?php the_field('c3'); ?>">
                                                <span><?php the_field('c3'); ?></span>
                                            </div>
                                            <div style="background: <?php the_field('c4'); ?>">
                                                <span><?php the_field('c4'); ?></span>
                                            </div>
                                            <div style="background: <?php the_field('c5'); ?>">
                                                <span><?php the_field('c5'); ?></span>
                                            </div>
                                    </div>
                                </div>
                            </article>
                    </div>
                </div>
            </div>

        <script> 
            document.querySelector('.menu').classList.add('<?php the_field('classe'); ?>')
        </script>
        </main>
    </body>
<?php endwhile; endif;?>







<?php get_footer() ?>