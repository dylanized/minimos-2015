<?php get_header(); ?>

<div class="row jumbo">

	<main class="container content" role="main">
	
		<?php if (have_posts()) : ?>
	
			<?php while (have_posts()) : the_post(); ?>
	
				<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
	
					<header class="post-header">
					
						<?php if (is_singular) { ?>
							<h1><?php the_title(); ?></h1>
						<?php } else { ?>
							<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
						<?php } ?>
						
					</header>
					
					<section class="post-content">
					
						<?php the_content('Read More &raquo;'); ?>
					
					</section>
	
				</article>
	
			<?php endwhile; ?>
	
		<?php else : ?>
		
			<section>
	
				<p><em>Sorry, no posts found!</em></p>
				
			</section>
	
		<?php endif; ?>
	
	</main>

</div>

<?php get_footer(); ?>