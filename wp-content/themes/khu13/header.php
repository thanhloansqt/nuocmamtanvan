<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?>
<!DOCTYPE html>
<html lang="vn" style="margin:0 !important;">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta http-equiv="content-style-type" content="text/css" />
<meta name="viewport" content="width=device-width,user-scalable=yes,initial-scale=1.0">
<meta name="keywords" content="nước mắm, cá cơm, nguyên chất, phan thiết, mũi né, khu 13, nước mắm nhất, nước mắm nhĩ, nước mắm kho, nước mắm đậm đà, độ đạm cao">
<meta name="description" content="Cửa hàng chuyên cung cấp nước mắm phan thiết mũi né nguyên chất độ đạm cao, thơm ngon thích hợp cho tất các bà nội trợ và các bữa tiệc khi dùng làm nước chấm hoặc nêm nếm">
<meta name="author" content="website">
<meta name="copyright" content="nước mắm cá cơm khu 13 mũi né phan thiết">
<title><?php bloginfo( 'name' ); wp_title( '|', true, 'left' );
    global $page, $paged;
    $site_description = get_bloginfo( 'description', 'display' );
    if ( $site_description && ( is_home() || is_front_page() ) ) echo " | $site_description"; ?>
</title>
<?php wp_head(); ?>
<link rel="shortcut icon" type="image/png" href="<?php bloginfo("template_url"); ?>/images/khu13/favicon.png">
</head>
<body>
