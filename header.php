<?php
/**
 * @package WordPress
 * @subpackage HTML5-Reset-WordPress-Theme
 * @since HTML5 Reset 2.0
 */
?>
<!doctype html>

<!--[if lt IE 7 ]> <html class="ie ie6 ie-lt10 ie-lt9 ie-lt8 ie-lt7 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 ie-lt10 ie-lt9 ie-lt8 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 ie-lt10 ie-lt9 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 ie-lt10 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 9]><!-->
<html class="no-js" <?php language_attributes(); ?>>
<!--<![endif]-->
<!-- the "no-js" class is for Modernizr. -->

<head id="<?php echo of_get_option('meta_headid'); ?>" data-template-set="html5-reset-wordpress-theme">

	<meta charset="<?php bloginfo('charset'); ?>">

	<!-- Always force latest IE rendering engine (even in intranet) -->
	<!--[if IE ]>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<![endif]-->

	<?php
	if (is_search())
		echo '<meta name="robots" content="noindex, nofollow" />';
	?>

	<title>
		<?php wp_title('|', true, 'right'); ?>
	</title>

	<meta name="title" content="<?php wp_title('|', true, 'right'); ?>">

	<!--Google will often use this as its description of your page/site. Make it good.-->
	<meta name="description" content="<?php bloginfo('description'); ?>" />

	<?php
	if (true == of_get_option('meta_author'))
		echo '<meta name="author" content="' . of_get_option("meta_author") . '" />';

	if (true == of_get_option('meta_google'))
		echo '<meta name="google-site-verification" content="' . of_get_option("meta_google") . '" />';
	?>

	<meta name="Copyright"
		content="Copyright &copy; <?php bloginfo('name'); ?> <?php echo date('Y'); ?>. All Rights Reserved.">

	<?php
	/*
	j.mp/mobileviewport & davidbcalhoun.com/2010/viewport-metatag
	- device-width : Occupy full width of the screen in its current orientation
	- initial-scale = 1.0 retains dimensions instead of zooming out if page height > device height
	- maximum-scale = 1.0 retains dimensions instead of zooming in if page width < device width
	- minimal-ui = iOS devices have minimal browser ui by default
	*/
	if (true == of_get_option('meta_viewport'))
		echo '<meta name="viewport" content="' . of_get_option("meta_viewport") . ' minimal-ui" />';


	/*
	These are for traditional favicons and Android home screens.
	- sizes: 1024x1024
	- transparency is OK
	- see wikipedia for info on browser support: http://mky.be/favicon/
	- See Google Developer docs for Android options. https://developers.google.com/chrome/mobile/docs/installtohomescreen
	*/
	if (true == of_get_option('head_favicon')) {
		echo '<meta name=”mobile-web-app-capable” content=”yes”>';
		echo '<link rel="shortcut icon" sizes=”1024x1024” href="' . of_get_option("head_favicon") . '" />';
	}


	/*
	The is the icon for iOS Web Clip.
	- size: 57x57 for older iPhones, 72x72 for iPads, 114x114 for iPhone4 retina display (IMHO, just go ahead and use the biggest one)
	- To prevent iOS from applying its styles to the icon name it thusly: apple-touch-icon-precomposed.png
	- Transparency is not recommended (iOS will put a black BG behind the icon) -->';
	*/
	if (true == of_get_option('head_apple_touch_icon'))
		echo '<link rel="apple-touch-icon" href="' . of_get_option("head_apple_touch_icon") . '">';
	?>
	<link
		href="https://fonts.googleapis.com/css2?family=Kaushan+Script&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200&display=swap"
		rel="stylesheet" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/library/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/library/css/all.min.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/library/fonts/remixicon.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/library/css/owl.carousel.min.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/library/css/owl.theme.default.min.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/library/css/jquery.fancybox.min.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/library/css/mmenu.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/library/css/style.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/library/css/responsive.css">
	<!-- Application-specific meta tags -->
	<?php
	// Windows 8
	if (true == of_get_option('meta_app_win_name')) {
		echo '<meta name="application-name" content="' . of_get_option("meta_app_win_name") . '" /> ';
		echo '<meta name="msapplication-TileColor" content="' . of_get_option("meta_app_win_color") . '" /> ';
		echo '<meta name="msapplication-TileImage" content="' . of_get_option("meta_app_win_image") . '" />';
	}

	// Twitter
	if (true == of_get_option('meta_app_twt_card')) {
		echo '<meta name="twitter:card" content="' . of_get_option("meta_app_twt_card") . '" />';
		echo '<meta name="twitter:site" content="' . of_get_option("meta_app_twt_site") . '" />';
		echo '<meta name="twitter:title" content="' . of_get_option("meta_app_twt_title") . '">';
		echo '<meta name="twitter:description" content="' . of_get_option("meta_app_twt_description") . '" />';
		echo '<meta name="twitter:url" content="' . of_get_option("meta_app_twt_url") . '" />';
	}

	// Facebook
	if (true == of_get_option('meta_app_fb_title')) {
		echo '<meta property="og:title" content="' . of_get_option("meta_app_fb_title") . '" />';
		echo '<meta property="og:description" content="' . of_get_option("meta_app_fb_description") . '" />';
		echo '<meta property="og:url" content="' . of_get_option("meta_app_fb_url") . '" />';
		echo '<meta property="og:image" content="' . of_get_option("meta_app_fb_image") . '" />';
	}
	?>

	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

	<!-- not needed? up to you: http://camendesign.com/code/developpeurs_sans_frontieres -->
	<div class="page-wrapper">
		<header id="main-header" class="main-header">
			<div class="top-header">
				<div class="container">
					<div class="row">
						<div class="col-md-6">
							<ul class="contact-info">
								<li><a href="tel:<?php the_field('phone_number', 'option'); ?>"><i
											class="ri-phone-line"></i>
										<?php the_field('phone_number', 'option'); ?>
									</a></li>
								<li><a href="mailto:<?php the_field('email', 'option'); ?>"><i class="ri-mail-line"></i>
										<?php the_field('email', 'option'); ?>
									</a></li>
							</ul>
						</div>
						<div class="col-md-6">
							<ul class="social-media">
								<?php if (have_rows('social_links', 'option')):
									while (have_rows('social_links', 'option')):
										the_row(); ?>
										<li><a href="<?php the_sub_field('social_url'); ?>"><i
													class="<?php the_sub_field('social_icon'); ?>"></i></a></li>
									<?php endwhile;
								endif; ?>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="navbar-header">
				<div class="header-lower">
					<div class="container">
						<div class="row">
							<div class="col-md-5">
								<div class="main-box">
									<div class="nav-outer">
										<nav class="nav main-menu">
											<?php
											wp_nav_menu(
												array(
													'menu' => 'Header Menu',
													'theme_location' => '',
													'depth' => 3,
													'container' => '',
													'container_class' => '',
													'container_id' => '',
													'menu_class' => 'navbar-nav navigation',
													'active_class' => 'active',
												)
											);
											?>
										</nav>
									</div>
								</div>
							</div>
							<div class="col-md-2">
								<div class="logo-box">
									<a href="<?php echo site_url(); ?>"><img
											src="<?php $image = get_field('logo', 'option');
											echo $image['url']; ?>"
											alt="<?php $image = get_field('logo', 'option');
											echo $image['alt']; ?>"></a>
								</div>
							</div>
							<div class="col-md-5">
								<div class="rightside-button">
									<div class="btn-header">
										<a class="btn-page" href="#"> Appointment</a>
									</div>
									<div class="button-canvas">
										<button type="button" class="toggle-nav"><i class="ri-menu-line"></i></button>
									</div>
								</div>
							</div>
							<div class="off-canvas">									
								<div class="inner-box">
								<span id="close-canvas">&times;</span>
									<div class="logo-section">
										<a href="<?php echo site_url(); ?>"><img
										src="<?php $image = get_field('logo', 'option');
										echo $image['url']; ?>"
										alt="<?php $image = get_field('logo', 'option');
										echo $image['alt']; ?>"></a>
										<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, odit! Totam cupiditate modi neque distinctio, hic eligendi temporibus corporis consectetur sapiente sunt! Consectetur possimus iste animi error reprehenderit qui est.</p>
										<div class="contact-canvas">
											<h4>CONTACT US</h4>
											<div class="contact-info">
												<ul>
													<li><i class="ri-map-pin-line"></i> <a href="<?php the_field('address_url', 'option'); ?>"><span>Address :</span> <?php the_field('address', 'option'); ?></a></li>
													<li><i class="ri-phone-line"></i> <a href="tel:<?php the_field('phone_number', 'option'); ?>"><span>Phone No. :</span> <?php the_field('phone_number', 'option'); ?></a></li>
													<li><i class="ri-whatsapp-line"></i> <a href="tel:<?php the_field('whatsapp', 'option'); ?>"><span>Whats App</span> <?php the_field('whatsapp', 'option'); ?></a></li>
													<li><i class="ri-mail-line"></i> <a href="mailto:<?php the_field('email', 'option'); ?>"><span>Email :</span> <?php the_field('email', 'option'); ?></a></li>
												</ul>
											</div>
										</div>
										<div class="contact-canvas">
											<h4>Follow On</h4>
											<ul class="social-list">
												<?php if (have_rows('social_links', 'option')) : while (have_rows('social_links', 'option')) : the_row(); ?>
												<li><a href="<?php the_sub_field('social_url');?>"><i class="<?php the_sub_field('social_icon');?>"></i></a></li>					
												<?php endwhile;
												endif; ?> 
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="mobile-header">
					<div class="logo">
						<a href="<?php echo site_url(); ?>"><img
								src="<?php $image = get_field('logo', 'option');
								echo $image['url']; ?>"
								alt="<?php $image = get_field('logo', 'option');
								echo $image['alt']; ?>"></a>
					</div>

					<!--Nav Box-->
					<div class="nav-outer clearfix">
						<div class="outer-box">
							<a href="#nav-mobile" class="mobile-nav-toggler navbar-trigger"><span
									class="ri-menu-line"></span></a>
						</div>
					</div>
				</div>
				<div id="nav-mobile"></div>
			</div>
		</header>