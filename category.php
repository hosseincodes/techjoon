<?php get_header();
/* Last Edited: 1.0.0 */

?>

  <div class="container">
    <div class="row">
      <div class="col-12">
      <h1 class="page-title"><?php single_cat_title() ?></h1>
</div>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
include 'parts/article.php';
endwhile; else : ?>
    	<p><?php esc_html_e( 'هیچ پستی وجود ندارد ):' ); ?></p>
    <?php endif; ?>
<div class="col-12">
    <div class="pagination-wp">
      <?php the_posts_pagination( array(
    'mid_size'  => 2,
    'prev_text' => __( '<i class="fas fa-long-arrow-alt-right"></i>', 'hamyarlearn' ),
    'next_text' => __( '<i class="fas fa-long-arrow-alt-left"></i>', 'hamyarlearn' ),
    'screen_reader_text' => __( ' ' )
) ); ?>
    </div>
</div>
    </div>
  </div>
<?php get_footer(); ?>
