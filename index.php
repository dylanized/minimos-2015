<?php get_header(); ?>

<main class="row pad content" role="main">

	<div class="container">
	
		<?php if (have_posts()) : ?>
	
			<?php while (have_posts()) : the_post(); ?>
	
				<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
	
					<header class="post-header">
					
						<?php if (is_singular()) { ?>
							<h1><?php the_title(); ?></h1>
						<?php } else { ?>
							<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
						<?php } ?>
						
						<!-- meta goes here -->
						
					</header>
					
					<section class="post-content">
					
						<?php the_content('Read More &raquo;'); ?>
					
					</section>
					
					<footer class="post-footer">
					
						<!-- meta goes here -->
					
					</footer>
					
					<!-- comments go here -->

				</article>
	
			<?php endwhile; ?>
	
		<?php else : ?>
		
			<section class="post">
	
				<p><em>Sorry, no posts found!</em></p>
				
			</section>
	
		<?php endif; ?>
	
	</div>

</main>

<?php get_footer(); ?>