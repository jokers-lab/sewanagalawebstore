<?php
get_header();
?>

<main id="primary" class="site-main">

	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="py-8">
					<?php
					while (have_posts()) :
						the_post();

						get_template_part('template-parts/content', 'page');

					endwhile; // End of the loop.
					?>
				</div>
			</div>
		</div>
	</div>

</main><!-- #main -->

<?php
get_footer();
?>