<?php get_header(); ?>

    <!--Novedades-->
    <div class="container">
       

        <div class="row">
            <!--Novedades-->
            <div class="col-lg-12 text-center">
                <!--Novedad-->
                <?php if(have_posts()){  
                    while(have_posts()){
                        the_post(); 
                    ?>
                <div class="card-body">
                    <h2 class="my-5 text-center text-primary"><?php the_title(); ?></h2>
                    <hr>
                    <p class="small mb-0"><?php the_date('d/M/Y') ?></p>
                    <p class="small"><?php the_author(); ?></p>
                    <?php the_post_thumbnail('medium', $attr) ?> 
                <?php the_content(); ?>
                </div>
                <div class="col-lg-12 text-center">
                <?php get_template_part('template-parts/post', 'navigation') ?>
                </div>
               
                <!--Fin Novedad-->
                    <?php } ?>
                    <?php } ?>    
            </div>
            <!--Fin Novedades-->
        </div>
    </div>
    <!--Fin de Novedades-->


    <?php get_footer(); ?>  