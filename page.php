<?php get_header(); ?>

<div class="container">
	<div class="row">
		<main class="col-md-8">
			<?php
				if(have_posts() ):
					while(have_posts() ): the_post(); ?>
						<h3><?php the_title(); ?></h3>
						<div><?php the_content(); ?></div>
					<?php endwhile; else: ?>
						<p>geen berichten gevonden</p>
				<?php endif 
			?>
		</main>

		<aside class="col-md-4 bg-light p-4">
			<?php dynamic_sidebar('aside'); ?>
		</aside>
	</div>
</div>

<?php get_footer(); ?>