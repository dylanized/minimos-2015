<?php if (have_posts()) : ?>
	
	<?php while (have_posts()) : the_post(); ?>

		<article <?php post_class("margin-bottom-50") ?> id="post-<?php the_ID(); ?>">

			<header class="post-header">
			
				<?php if (is_singular()) { ?>
					<h1 class="margin-bottom-10"><?php the_title(); ?></h1>
				<?php } else { ?>
					<h1 class="margin-bottom-10"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
				<?php } ?>
				
				<!-- meta goes here -->
				
			</header>
			
			<section class="post-content">
			
				<?php the_content('Read More &raquo;'); ?>
			
			</section>
			
			<?php if (!is_page()) { ?>
			
				<footer class="post-footer margin-top--30 color-lite">
				
					<p><small><?php the_time('F jS, Y') ?> | <?php the_category(', ') ?></small></p>
				
				</footer>
				
			<?php } ?>
			
			<!-- comments go here -->

		</article>

	<?php endwhile; ?>

<?php else : ?>

	<section class="post">

		<p><em>Sorry, no posts found!</em></p>
		
	</section>

<?php endif; ?>