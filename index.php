<?php get_header(); ?>

<!--Novedades-->
<div class="container">
  <h2 class="my-5 text-center text-primary">Novedades</h2>
  <hr>

  <div class="row">
    <!--Novedades-->


    <div class="container my-4">
      <div class="row">
        <!--novedad-->
        <?php if (have_posts()) {
          while (have_posts()) {
            the_post(); ?>
            <div class="col-4 text-center single-archive">
              <a href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail('medium') ?>
                <h4><?php the_title(); ?></h4>
              </a>
            </div>
          <?php } ?>
        <?php } ?>
        <!-- Fin Novedad-->
      </div>
    </div>




    <!--Paginacion-->
    <div class="card-body">
      <nav aria-label="Page navigation example">
        <ul class="pagination">
          <li class="page-item">
            <a class="page-link" href="#" aria-label="Anterior">
              <span aria-hidden="true">&laquo;</span>
            </a>
          </li>
          <li class="page-item active"><a class="page-link" href="#">1</a></li>
          <li class="page-item"><a class="page-link" href="#">2</a></li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item">
            <a class="page-link" href="#" aria-label="Siguiente">
              <span aria-hidden="true">&raquo;</span>
            </a>
          </li>
        </ul>
      </nav>
    </div>
    <!--Fin Paginacion-->


    <!--Fin Novedades-->
  </div>
</div>
<!--Fin de Novedades-->


<?php get_footer(); ?>