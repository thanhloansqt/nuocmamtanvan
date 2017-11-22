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
<ul class="bxslider">
<?php

    $args = array(
      'post_type' => 'advertisement',
      'posts_per_page' => -1
    );
    $my_query = null;
    $my_query = new WP_Query($args);
  
  if( $my_query->have_posts() ) : 

  $i = 0;
  while ($my_query->have_posts()) : $my_query->the_post();
  $i++;

    $img_adv = get_field("img_adv");
    $link = get_field("target_link");

  ?>
    <li <?php if($i==1) echo "class='none'"; ?>>
      <a href="<?php echo $link; ?>" target="_blank">
        <img src="<?php echo $img_adv; ?>" height="178" width="219" alt="<?php the_title(); ?>">
      </a>
    </li>
 <?php endwhile; ?>
 <?php endif; wp_reset_query(); ?>
</ul>