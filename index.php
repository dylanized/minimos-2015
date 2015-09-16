<?php get_header(); ?>

<div class="row grid">

	<main id="content" class="col-9-12" role="main">
	
		<?php if (have_posts()) : ?>
	
			<?php while (have_posts()) : the_post(); ?>
	
				<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
	
					<header class="post-header">
					
						<h1><?php the_title(); ?></h1>									
						
					</header>
					
					<section class="post-content">
					
						<?php the_content('Read More &raquo;'); ?>
					
					</section>
	
				</article>
	
			<?php endwhile; ?>
	
		<?php else : ?>
	
			<p><em>Sorry, no posts found!</em></p>
	
		<?php endif; ?>
	
	</main>

</div>

<?php get_footer(); ?>