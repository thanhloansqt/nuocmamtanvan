<?php
/**
 * Template Name: news
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that other
 * 'pages' on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

?>

<ul>
<?php

    $args = array(
      'post_type' => 'news',
      'posts_per_page' => 2
    );
    $my_query = null;
    $my_query = new WP_Query($args);

  if( $my_query->have_posts() ) :

    $i = 0;
    while ($my_query->have_posts()) : $my_query->the_post();
    $i++;
    $ico_photo = get_field("ico_photo");
    $top_descript = get_field("top_descript");
  ?>
    <li <?php if($i==1) echo "class='none'"; ?>>
      <a href="<?php echo the_permalink(); ?>">
        <span class="icon_photo"><img src="<?php echo $ico_photo; ?>" height="59" width="60" alt="<?php echo the_title(); ?>"></span>
        <div class="txt"><?php echo $top_descript; ?></div>
      </a>
    </li>
  <?php endwhile; ?>
 <?php endif; wp_reset_query(); ?>
</ul>
