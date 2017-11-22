<?php
/**
 * The template for displaying posts in the Gallery post format
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?>


<ul>
<?php

    $args = array(
      'post_type' => 'saucebig',
      'posts_per_page' => -1
    );
    $my_query = null;
    $my_query = new WP_Query($args);
  
  if( $my_query->have_posts() ) : 

    $i = 0;
    while ($my_query->have_posts()) : $my_query->the_post();
    $i++;

    $img_sance = get_field("img_sance");
    $area_name = get_field("area_name");
    $area_price = get_field("area_price");

  ?>
    <li <?php if($i==1) echo "class='none'"; ?>>
      <img src="<?php echo $img_sance; ?>" height="205" width="210" alt="<?php the_title(); ?>">
      <div class="info">
        <p class="name"><?php echo $area_name; ?></p>
        <p class="price"><?php echo $area_price; ?></p>
      <!-- /.info --></div>
    </li>
 <?php endwhile; ?>
 <?php endif; wp_reset_query(); ?>
</ul>