
<?php get_header(); ?>

  <div class="row">

      <?php if(is_front_page()): ?>  
          <div class="col-sm-12 blog-main">
      <?php else: ?>
          <div class="col-sm-8 blog-main">
      <?php endif; ?>
    

        <?php 
      if ( have_posts() ) : while ( have_posts() ) : the_post();
    
        get_template_part( 'content', get_post_format() );
  
      endwhile; endif; 
      ?>
<!-- about section-->

    </div> <!-- /.blog-main -->

     
    
<?php if(is_front_page()): ?>  
          
      <?php else: ?>
          <?php get_sidebar(); ?>
      <?php endif; ?>

  </div> <!-- /.row -->

<?php get_footer(); ?>