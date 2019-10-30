<?php include 'library/ssi/scripts.php';?>

	<body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage">



		<div class="ghost"></div>

		<div id="container" class="containment">

		<div class="wrapper">

			<header class="header" role="banner" itemscope itemtype="http://schema.org/WPHeader">

				<?php include 'library/ssi/nav.php';?>

				<?php if(is_front_page()){ ?>
				<div class="container">
					<div class="hero-table">
						<div class="hero-cell">
							<div class="hero-text">
								<h1><?php the_field('headline'); ?></h1>
								<p><?php the_field('subtext'); ?></p>
								<div class="link">
									<a href="<?php bloginfo('url'); ?>/shop">shop now</a>
								</div>
							</div>
							<div class="hero-img">
								<img src="<?php echo get_template_directory_uri(); ?>/library/images/hero-products-2.png" alt="">
							</div>
						</div>
					</div>
				</div>
			<?php } ?>

			<div class="triangle">
				<div class="message">
					<h2>the uk's no.1<br>for cbd</h2>
				</div>
			</div>
			</header>

			<div class="mobile-buffer"></div>
