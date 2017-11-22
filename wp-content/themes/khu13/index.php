<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme and one of the
 * two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); ?>
  <div id="wapper">
    <div class="inner">
      <div id="advance_box">
        <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <!-- ads_728x90 -->
        <ins class="adsbygoogle"
         style="display:inline-block;width:960px;height:90px"
         data-ad-client="ca-pub-3265876651189777"
         data-ad-slot="2142858640"></ins>
        <script>(adsbygoogle = window.adsbygoogle || []).push({});</script>
        <!-- /#advance_box --></div>
    <!-- /.inner --></div>
    <div id="header">
      <div class="inner">
        <div class="logo">
          <h1><a href="/">Nước Mắm Tân Vân</a></h1>
        <!-- /.logo --></div>
      <!-- /.inner --></div>
    <!-- /#header --></div>
    <div id="content">
      <div class="inner">
        <div class="banner">
          <h2 class="title">
            <span class="star">Nước Chấm Hảo Hạng <span class="pc">Cho Gia Đình</span></span>
          </h2>
        <!-- /.banner --></div>
        <div id="rowlist">
          <div class="rowitem">
            <div class="txt">
              <h3>nước mắm <br>cá cơm tân vân <br>thơm &amp; ngon</h3>
              <p>là nước mắm truyền thống,<br> nguyên chất từ cá cơm tươi.</p>
              <dl>
                <dt><img src="<?php bloginfo('template_directory'); ?>/images/khu13/ico-arrow.gif" height="48" width="142" alt="Liên hệ ngay!"></dt>
                <dd><a href="/contact/">Đặt Hàng!</a></dd>
              </dl>
            <!-- /.txt --></div>
            <div class="products sauce_small">
              <h4 class="tit"><span>NGON NHẤT LOẠI NHỎ</span></h4>
              <?php include(locate_template('content-sauce-small.php')); ?>
            <!-- /.products --></div>
          <!-- /.rowitem --></div>
          <div class="rowitem">
            <div class="txt slider">
              <h3 class="other"><img src="<?php bloginfo('template_directory'); ?>/images/khu13/ico-sales_off.png" height="100" width="100" alt="Các sản phẩm khác"></h3>
              <?php get_sidebar('other-product'); ?>
            <!-- /.txt --></div>
            <div class="products">
              <h4 class="tit imgborder"><span>NGON NHẤT LOẠI LỚN</span></h4>
              <?php include(locate_template('content-sauce-big.php')); ?>
            <!-- /.products --></div>
          <!-- /.rowitem --></div>
          <div class="rowitem imgbottom">
            <div class="how_use">
              <div class="why_question">
                <p class="whyuse">Tại sao sử dụng <br>nước mắm tân vân?</p>
              <!-- /.why_question --></div>
              <div class="answer">
                <div class="imgborder">
                  <ul class="img">
                    <li>- Sử dụng nguyên liệu cá cơm tươi.</li>
                    <li>- Nguyên chất.</li>
                    <li>- Độ đạm cao.</li>
                    <li>- Không chất bảo quản.</li>
                    <li>- Có thể dùng nên nếm các loại món ăn.</li>
                  </ul>
                </div>
              <!-- /.products --></div>
            </div>
          <!-- /.rowitem --></div>
        <!-- /#rowlist --></div>
        <div class="infomation">
          <div class="aboutus itemheight">
            <h3 class="tit tit_news"><a href="/news/"><span>Tin tức</span></a></h3>
            <?php include(locate_template('page-news.php')); ?>
          <!-- /.aboutus --></div>
          <div class="company itemheight">
            <h3 class="tit">Các bước đơn giản đặt mua nước mắm tân vân</h3>
            <div class="delivery">
              <div class="step">
                <p class="ico_script"><img src="<?php bloginfo('template_directory'); ?>/images/khu13/img-chose_product.png" height="58" width="80" alt="Giỏ Hàng"></p>
                <p class="tit_script">Giỏ Hàng</p>
                <p class="txt_script">Chọn sản phẩm nước mắm.</p>
              </div>
              <div class="step step_border">
                <p class="ico_script"><img src="<?php bloginfo('template_directory'); ?>/images/khu13/img-delivery.png" height="58" width="80" alt="Giao Hàng"></p>
                <p class="tit_script">Giao Hàng</p>
                <p class="txt_script">Giọi điện để được nhận hàng.</p>
              </div>
            </div>
          <!-- /.company --></div>
        <!-- /.infomation --></div>
      <!-- /.inner --></div>
    <!-- /#content --></div>
  <!-- /#wapper --></div>
<?php get_sidebar('tawkto'); ?>
<?php  get_footer();  ?>
