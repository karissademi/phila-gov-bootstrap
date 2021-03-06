<?php
/*
Template Name: Landing Page Template
*/
?>

<?php get_header(); ?>

	</div> <!-- end header.php container --> 
			<header class="fluid-container page-title">
				<div class="container">
								<h1 class="page-header"><?php the_title(); ?></h1>
								<div class="breadcrumbs">
									<?php if ( function_exists('yoast_breadcrumb') ) {
										yoast_breadcrumb('<p id="breadcrumbs">','</p>');
									} ?>
					</div>
				</header> <!-- end article header -->
		<div class="container landing-page">
			<div id="content" class="clearfix row">

				<div id="main" class="col col-lg-24 clearfix" role="main">

					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
					<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
					
						<section class="post_content">
							<?php the_content(); ?>
				
						</section> <!-- end article section -->
						
						<footer>
			
							<p class="clearfix"><?php the_tags('<span class="tags">' . __("Tags","wpbootstrap") . ': ', ', ', '</span>'); ?></p>
							
						</footer> <!-- end article footer -->
					
					</article> <!-- end article -->
					
					<?php endwhile; ?>	
					
					<?php else : ?>
					
					<article id="post-not-found">
					    <header>
					    	<h1><?php _e("Not Found", "wpbootstrap"); ?></h1>
					    </header>
					    <section class="post_content">
					    	<p><?php _e("Sorry, but the requested resource was not found on this site.", "wpbootstrap"); ?></p>
					    </section>
					    <footer>
					    </footer>
					</article>
					
					<?php endif; ?>
			
				</div> <!-- end #main -->
    
				<?php //get_sidebar(); // sidebar 1 ?>
    
			</div> <!-- end #content -->
</div>

<?php get_footer(); ?>