<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title><?php echo page_title('Page can’t be found'); ?> - <?php echo site_name(); ?></title>

		<meta name="description" content="<?php echo site_description(); ?>">

		<link rel="stylesheet" href="<?php echo theme_url('/css/animations.css'); ?>">
		<link rel="stylesheet" href="<?php echo theme_url('/css/styles.css'); ?>">
		<link rel="stylesheet" href="<?php echo theme_url('/css/ie.css'); ?>" media="(max-width: 400px)">

		<link rel="alternate" type="application/rss+xml" title="RSS" href="<?php echo rss_url(); ?>">
		<link rel="shortcut icon" href="<?php echo theme_url('img/favicon.png'); ?>">

		<!--[if lt IE 9]>
			<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->

		<script>var base = '<?php echo theme_url(); ?>';</script>
		<script src="<?php echo asset_url('/js/zepto.js'); ?>"></script>
		<script src="<?php echo theme_url('/js/main.js'); ?>"></script>

	    <meta name="viewport" content="width=device-width">

	    <meta property="og:title" content="<?php echo site_name(); ?>">
	    <meta property="og:type" content="website">
	    <meta property="og:url" content="<?php echo current_url(); ?>">
	    <meta property="og:image" content="<?php echo theme_url('img/og_image.gif'); ?>">
	    <meta property="og:site_name" content="<?php echo site_name(); ?>">
	    <meta property="og:description" content="<?php echo site_description(); ?>">

    <script type="text/javascript" src="//use.typekit.net/esd4bji.js"></script>
		<script type="text/javascript">try{Typekit.load();}catch(e){}</script>

		<?php if(customised()): ?>
		    <!-- Custom CSS -->
    		<style><?php echo article_css(); ?></style>

    		<!--  Custom Javascript -->
    		<script><?php echo article_js(); ?></script>
		<?php endif; ?>
	</head>
	<body class="<?php echo body_class(); ?>">
      <header role="banner">
		    <div class="container">
		      <section class="bio">
						<img src="http://f.cl.ly/items/3M2d0z0F2X2G2Y2o183f/toni.jpg">
							<h5>Toni Gemayel</h5>
								<p> I cofounded <a href="http://www.banyan.co">Banyan</a> to change the way scientists works. Im passionate about design, startups, and entrepreneurship.</p>
				    </div>
				  </header>