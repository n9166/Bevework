<?php
if ( ! defined( 'ABSPATH' ) ) exit;
$minilogo = beve_option('dw_minilogo', '' );
$logo = beve_option('dw_logo', '' );
?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp" /> <!--fuckbaidu -->
    <?php if ( empty( $minilogo ) ) { ?>
    <link rel="shortcut icon" href="<?php echo home_url(); ?>/favicon.ico" type="image/x-icon" />
    <?php  } else{  ?>
    <link rel="shortcut icon" href="<?php echo $minilogo; ?>" type="image/x-icon" />
    <?php } ?>
    <title><?php dw_meta_title(); ?></title>
<?php wp_head(); ?>
</head>
<body <?php body_class('index'); ?>>
	<div id="top">
    	<header class="clearfix">
    		<div class="float_left logo">
    			<a rel="nofollow" href="/" alt="<?php bloginfo('name'); ?>"><img class="logo" src="<?php echo $logo; ?>"></a>
    		</div>
    		<div class="float_right header-right">
    			<form method="get" action="<?php echo home_url( '/' ); ?>">
					<input type="text" name="s" value="">
					<input type="submit" value="">
				</form>
    			<span class="reg"><?php wp_register(); ?></span>
    			<span class="log"><?php wp_loginout(); ?></span>
    		</div>
    	</header>

	<nav class="navgation">
		<?php wp_nav_menu( 
    		array( 
    		'theme_location' => 'menu-primary',
    		'depth'           => 1,
    		'container_class' => 'rsp_body', 
    		'menu_class' => 'menu clearfix',
    		//'menu_id' => 'menu-primary-items', 
    		'fallback_cb' => 'beve_nav_fallback' 
    	) ); ?>
	</nav>

    </div> <!-- #header-top	 -->
			<div class="slider"><!-- 幻灯片 -->
				<?php //include(TEMPLATEPATH .'/includes/bw-slider.php');?>				
			</div>

<div id="container">
		<main id="main">
