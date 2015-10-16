<?php if (have_posts()) : ?>
	
	<?php while (have_posts()) : the_post(); ?>

		<article <?php post_class("") ?> id="post-<?php the_ID(); ?>">

			<?php if (get_the_title() != "") { ?>
				
				<header class="post-header">
				
					<?php if (is_singular()) { ?>
						<h1 class="post-title margin-0"><?php the_title(); ?></h1>
					<?php } else { ?>
						<h1 class="post-title margin-0"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
					<?php } ?>
					
					<?php if (!is_page()) { ?>					
						<p class="post-header-meta color-beta"><small>By <?php the_author(); ?> <?php the_time('F jS'); ?></small></p>						
					<?php } ?>
					
				</header>
			
			<?php } ?>
			
			<section class="post-content">
			
				<?php the_content('Read More &raquo;'); ?>
			
			</section>
			
			<?php if (!is_page()) { ?>
			
				<footer class="post-footer color-beta">
				
					<p><small><?php the_time('F jS, Y'); ?> | <?php the_category(', '); ?> | <?php the_tags(); ?></small></p>
				
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