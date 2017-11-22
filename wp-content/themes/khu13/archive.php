<?php
/**
 * The template for displaying Archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each specific one. For example, Twenty Thirteen
 * already has tag.php for Tag archives, category.php for Category archives,
 * and author.php for Author archives.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); ?>


<div id="news_post">
<?php include(locate_template('inc/breadcrumbs.php')); ?>

<?php
  $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
  $args = array(
    "post_type" => "news",
    "posts_per_page" => 11,
    'taxonomy' => 'news-category',
    'paged' => $paged
  );
  query_posts($args);
?>

<div id="all_post">
  <div class="inner_post">
<?php if ( have_posts() ) :
  $i = 0;

while ( have_posts() ) : the_post();
$i++;
?>
<?php
    $news_photo = get_field("news_photo");
    $author = get_field("author");
    $link = get_field("link");
?>

  <?php if ($i==1) : ?>

  <div class="box_left">
      <div class="banner_top">
        <a href="<?php the_permalink(); ?>"><img src="<?php echo $news_photo; ?>" alt="<?php echo the_title(); ?>" /></a>
      </div>
      <div class="txt_row">
        <p class="author"><span class="date">Đăng bởi:</span> <a href="<?php echo $link; ?>"><?php echo $author; ?></a> <span class="date">&mdash; <?php the_time( get_option( 'date_format' ) ); ?></span></p>
        <h2 class="title"><a href="<?php the_permalink(); ?>"><?php echo the_title(); ?></a></h2>
        <p class="txt"><?php the_excerpt(); ?></p>
        <a class="read_more" href="<?php the_permalink(); ?>">Chi Ttết &rarr;</a>
      </div>
  </div>
  <?php elseif (1< $i && $i<=3) : ?>
  <div class="box_right">
      <div class="banner_top">
        <a href="<?php the_permalink(); ?>"><img src="<?php echo $news_photo; ?>" alt="<?php echo the_title(); ?>" /></a>
      <!-- /.box_left --></div>
      <div class="txt_row">
        <p class="author"><span class="date"><?php the_time( get_option( 'date_format' ) ); ?>&mdash; Đăng bởi:</span> <a href="<?php echo $link; ?>"><?php echo $author; ?></a></p>
        <h2 class="title"><a href="<?php the_permalink(); ?>"><?php echo the_title(); ?></a></h2>
      <!-- /.txt_row --></div>
  </div>
<?php else : ?>
    <div class="loop_post">
      <div class="banner_top">
        <a href="<?php the_permalink(); ?>"><img src="<?php echo $news_photo; ?>" alt="<?php echo the_title(); ?>" /></a>
      <!-- /.box_left --></div>
      <div class="txt_row">
        <p class="author"><span class="date"><?php the_time( get_option( 'date_format' ) ); ?>&mdash; Đăng bởi:</span> <a href="<?php echo $link; ?>"><?php echo $author; ?></a></p>
        <h2 class="title"><a href="<?php the_permalink(); ?>"><?php echo the_title(); ?></a></h2>
      <!-- /.txt_row --></div>
    </div>
<?php endif; ?>

<?php endwhile; ?>
  <!-- /.inner_post --></div>
<!-- /.all_post --></div>

<div id="paging">
<?php
global $wp_rewrite;
global $paged;
$paginate_base = get_pagenum_link(1);
if (strpos($paginate_base, '?') || ! $wp_rewrite->using_permalinks()) {
  $paginate_format = '';
  $paginate_base = add_query_arg('paged', '%#%');
} else {
  $paginate_format = (substr($paginate_base, -1 ,1) == '/' ? '' : '/') .
  user_trailingslashit('page/%#%/', 'paged');;
  $paginate_base .= '%_%';
}
echo paginate_links( array(
  'base' => $paginate_base,
  'format' => $paginate_format,
  'total' => $wp_query->max_num_pages,
  'mid_size' => 0,
  'current' => ($paged ? $paged : 1),
  'next_text' => 'Next',
  'prev_text' => 'Prev'
));
?>

<?php endif; wp_reset_query(); ?>

</div>
</div><!-- end of #content -->

<!-- /#news_post --></div>

<script>
  ;(function($, win){
  $(function() {
    var setHeight = function(){
        $('#all_post').each( function(){
          var maxHeight = 0;
          $('.loop_post', this).each( function(){
            maxHeight = Math.max($(this).height(), maxHeight );
          }).height(maxHeight)
        });
    }

    $(window).resize(setHeight).trigger('resize');
  });
}(jQuery, window));

</script>
<?php  get_footer();  ?>
