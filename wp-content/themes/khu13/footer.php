<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?>
	<div id="footer">
    <div class="inner">
      <div class="footer_body">
        <div class="footer_item">
          <dl class="visit">
            <dt>Địa Chỉ</dt>
            <dd>68/23 Hồ Xuân Hương, KP13, <br class="pc">Mũi Né, Phan Thiết, Bình Thuận</dd>
          </dl>
        </div>
        <div class="footer_item">
          <dl class="contact_ft">
            <dt>Liên Hệ</dt>
            <dd>T: 094.988.4243</dd>
            <dd>E: info@mysite.com</dd>
            <dd class="facebook"><a href="<?php echo site_url(); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/khu13/ico-fb.png" alt="facebook" width="20" height="20" /></a></dd>
          </dl>
        </div>
        <div class="footer_item">
          <dl class="email_list">
            <dt>Đăng ký nhận e-email</dt>
            <dd>
              <form class="" action="index.html" method="post">
                <input aria-label="Email Address" class="field_input" name="subscriberEmail" ng-model="main.subscriberEmail" ng-pattern="/^\b[a-zA-Z0-9.!#$%&amp;’*+\/=?^_`{|}~-]{1,50}@[a-zA-Z0-9-]{1,50}(?:\.[a-zA-Z0-9-]{2,20})+$/" placeholder="Nhập e-mail của bạn" required="" size="1">
                <button class="button subscribe_button" ng-click="main.subscribe()" ng-disabled="main.isPreview()">
                  <span ng-if="!main.isInPopup()" class="ng-binding ng-scope">Đồng Ý</span>
                </button>
              </form>
            </dd>
          </dl>
        </div>
      </div>
      <!-- <div class="footer_bottom">
        <p class="copyright">Copyright © 2017 Nuoc Mam Tan Van – All rights reserved.</p>
      </div> -->
    </div>
	</div>
<?php wp_footer(); ?>
</body>
</html>
