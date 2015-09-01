<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( ' | ', true, 'right' ); ?></title>
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />

<script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>

<?php wp_head(); ?>
</head>

<body>

<div class="panel-grid">
	<div class="logo"></div>
	<div class="slider">
    	<div class="slider-item"></div>
    </div>
    <ul class="meno">
	<li><a href="">صفحه اصلی</a></li>
	<li><a href="">گالری عکس</a>
     	<ul>
        	<li><a href="">عکس های رستوران</a></li>
  			<li><a href="">عکس های شما</a></li>   
     	</ul>
    </li>
	<li><a href="">رزرواسیون</a></li>
    <li><a href="">ارتباط با ما</a></li>
   	<li><a href="">درباره ما</a></li>


</ul>
</div>
<script>
	 $( document ).ready(function (){
		console.log($(window).height());
		$('.panel-grid').height($(window).height());
		$('.slider-item').height($(window).height());			
			
	});
</script>
<div id="wrapper" class="hfeed">
<header id="header" role="banner">
<section id="branding">
<div id="site-title"><?php if ( ! is_singular() ) { echo '<h1>'; } ?><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php esc_attr_e( get_bloginfo( 'name' ), 'blankslate' ); ?>" rel="home"><?php echo esc_html( get_bloginfo( 'name' ) ); ?></a><?php if ( ! is_singular() ) { echo '</h1>'; } ?></div>
<div id="site-description"><?php bloginfo( 'description' ); ?></div>
</section>
<nav id="menu" role="navigation">
<div id="search">
<?php get_search_form(); ?>
</div>
<?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
</nav>
</header>
<div id="container">