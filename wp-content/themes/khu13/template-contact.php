<?php
/**
 * Template Name: contact
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

get_header();?>
<?php include 'send-mail.php';?>
  <div id="wapper">
    <div id="header">
      <div class="inner">
        <div class="logo">
          <h1><a href="/">Nước Mắm Tân Vân</a></h1>
        <!-- /.logo --></div>
      <!-- /.inner --></div>
    <!-- /#header --></div>
    <div id="content">
      <div class="banner">
        <div class="title">
          <h2 class="contact_txt">
            Xin hãy để lại tin nhắn, chúng tôi sẽ giao hàng tận nơi cho các bạn!
          <!-- /.inner_title --></h2>
        </div>
      <!-- /.slider --></div>
      <div class="inner">
        <div class="contact_title">
          <?php include(locate_template('inc/breadcrumbs.php')); ?>
        <!-- /.contact_title --></div>
        <div class="contact_box">
          <?php /*echo do_shortcode('[contact-form-7 id="24" title="Contact form 1"]'); */ ?>
          <div class="contact_form">
            <p class="mess">Bạn muốn mua nước mắm tân vân nhưng không thể đến được địa chỉ của chúng tôi? <br>Vậy xin vui lòng để lại đầy đủ thông tin liên lạc bên dưới chúng tôi sẽ liên hệ và giao nước mắm tới tận nơi cho bạn. <br>Cảm ơn đã sử dụng nước mắm tân vân!</p>
            <form action="" method="POST">
              <dl>
                <dt>Chọn Sản Phẩm <span>*</span></dt>
                <dd class="survey">
                    <label><input type="checkbox" name="survey[1]" value="Nước Mắm Chai" <?php echo empty($_POST['survey'][1]) ? '' : 'checked';?> ><span>Nước Mắm Loại Nhỏ</span></label>
                    <label><input type="checkbox" name="survey[2]" value="Nước Mắm Thùng" <?php echo empty($_POST['survey'][2]) ? '' : 'checked';?> ><span>Nước Mắm Loại Lớn</span></label>
                    <label class="edge"><input type="checkbox" name="survey[3]" value="その他" <?php echo empty($_POST['survey'][3]) ? '' : 'checked';?> ><span>Khác</span></label>
                    <p class="error" id="error_survey"><?php echo empty($error['survey']) ? '' : $error['survey']; ?></p>
                </dd>
              </dl>
              <dl>
                <dt>Họ &amp; Tên <span>*</span></dt>
                <dd>
                  <label><input type="text" class="full_name" name="full_name" value="<?php echo empty($full_name) ? '' : $full_name; ?>"></label>
                  <p class="error" id="error_name"><?php echo empty($error['name']) ? '' : $error['name']; ?></p>
                </dd>
              </dl>
              <dl>
                <dt>Điện Thoại <span>*</span></dt>
                <dd>
                  <input type="text" class="tel" name="tel" value="<?php echo empty($tel) ? '' : $tel; ?>">
                  <p class="error" id="error_tel"><?php echo empty($error['tel']) ? '' : $error['tel']; ?></p>
                </dd>
              </dl>
              <dl>
                <dt>E-mail <span>*</span></dt>
                <dd>
                  <input type="text" class="email" name="email" value="<?php echo empty($email) ? '' : $email; ?>">
                  <p class="error" id="error_email"><?php echo empty($error['email']) ? '' : $error['email']; ?></p>
                </dd>
              </dl>
              <dl>
                <dt>Để Lại Tin Nhắn <span>*</span></dt>
                <dd>
                  <textarea name="comment" placeholder="VD: hãy chuyển cho tôi 10 lít nước mắm loại nhỏ. Địa chỉ 234/15 Bạch Đằng P15, HCM vào buổi sáng ngày 26/4/2018"><?php echo empty($comment) ? '' : $_POST["comment"]; ?></textarea>
                  <p class="error" id="error_comment"><?php echo empty($error['comment']) ? '' : $error['comment']; ?></p>
                </dd>
              </dl>
              <p class="submit">
                <input type="submit" value="">
              </p>
            </form>
          <!-- /.contact_form --></div>
        <!-- /.contact_box --></div>
      <!-- /.inner --></div>
    <!-- /#content --></div>
  <!-- /#wapper --></div>
<?php  get_footer();  ?>
<?php wp_footer(); ?>
