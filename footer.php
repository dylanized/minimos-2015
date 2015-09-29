<footer class="row footer pad-v-30 border-top color-lite">

	<div class="container">

		<p class="float-right text-right font-25">
			<a class="hover-blue" href="http://twitter.com/minimosWP"><i class="fa fa-twitter"></i></a>&nbsp;
			<a class="hover-green" href="http://github.com/dylanized/minimos"><i class="fa fa-github"></i></a>
		</p>
		
		<?php if (is_front_page()) { ?>
			<p><a href="http://twitter.com/dylanized"><em>by @dylanized</em></a></p>
		<?php } else  { ?>
			<p><a href="http://minimos.net"><em>built with Minimos</em></a></p>		
		<?php } ?>
				
	</div>

</footer>

<!-- wp footer -->	
<?php wp_footer(); ?>

</body>
</html>