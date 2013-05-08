<?php theme_include('header'); ?>

		
		<section role="main" class="container">
			<article>

				<header>	
					<h1><?php echo article_title(); ?></h1>
				</header>

					<section class="content">
						<?php echo article_html(); ?>
					</section>	
					
			</article>
			
		</section>

<?php theme_include('footer'); ?>