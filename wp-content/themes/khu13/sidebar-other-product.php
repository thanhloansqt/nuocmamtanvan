<?php
/**
 * The sidebar containing the footer widget area
 *
 * If no active widgets in this sidebar, hide it completely.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?>
<ul class="gaslider">
<?php

    $args = array(
      'post_type' => 'product',
      'posts_per_page' => -1
    );
    $my_query = null;
    $my_query = new WP_Query($args);
  
  if( $my_query->have_posts() ) : 

  $i = 0;
  while ($my_query->have_posts()) : $my_query->the_post();
  $i++;

    $img_product = get_field("img_product");
    $link = get_field("link");

  ?>
    <li>
      <img src="<?php echo $img_product; ?>" height="280" width="360" alt="<?php the_title(); ?>">
    </li>
 <?php endwhile; ?>
 <?php endif; wp_reset_query(); ?>
</ul>