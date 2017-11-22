<?php
/**
 * The template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); ?>


<div id="news_post">
  <div id="all_post">
    <div class="inner_post">
      <?php include(locate_template('inc/breadcrumbs.php')); ?>
      <div class="article">
        <?php while (have_posts()) : the_post(); ?>
          <p class="big_title"><?php echo the_title(); ?></p>
          <div class="show_content">
           <?php get_template_part( 'content', get_post_format() ); ?>
          <!-- /.show_content --></div>
        <?php endwhile; // end of the loop. ?>
      <!-- /.article --></div>
      <p class="view_back"><a href="/news/">Back >></a></p>
    <!-- /.inner_post --></div>
  <!-- /.all_post --></div>
<!-- /#news_post --></div>

<?php  get_footer();  ?>
