<?php get_header(); ?>
<main class="container">
<h1 class="text-center my-3"><?php the_title()?></h1>
<hr>
  <?php if(have_posts()){
      while(have_posts()){
          the_post();?>
      
      <div class="row my-5">
      <div class="col-md-6 col-12 text-center">
      <?php the_post_thumbnail('medium'); ?>
      </div>
      <div class="col-md-6 col-12">
     
      <?php the_content(); ?>
      </div>
      </div>
      <?php $args = array(
          'post_type' => 'proyectos',
          'post_per_page' => 6,
          'order' => 'ASC',
          'orderby' => 'title'
      );
      $proyectos =  new WP_Query($args)?>
     
      <?php if($proyectos->have_posts()) {?>
        <div class="row justify-content-center productos-relacionados text-center">
        <div class="col-12">
        <h3>Otros proyectos</h3>
        </div>
        <?php while($proyectos->have_posts()) { ?>
            <?php $proyectos->the_post(); ?>
            <div class="col-2 my-3">
            <?php the_post_thumbnail('thumbnail'); ?>
            <h5 class="text-center">
            <a href="<?php the_permalink() ?>">
            <?php the_title() ?>
            </a>
            </h5>
            </div>
       <?php } ?>
        </div>
    <?php  } ?>
     
     
     <?php } ?>

  <?php } ?>
</main>
    <?php get_footer(); ?>  