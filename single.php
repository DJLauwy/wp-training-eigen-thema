<?php get_header(); ?>

<div class="container">
	<div class="row">
		<main class="col-md-8">
			<?php
				if(have_posts() ):
					while(have_posts() ): the_post(); ?>
						<h3><?php the_title(); ?></h3>
						<div><?php the_content(); ?></div>
						<hr>
						<div class="bg-light p-4">
							<?php 
								//als de reacties aan staan én er is minstens 1 reactie worden die hier getoond
								if(comments_open() || get_comments_number()){
									comments_template();
								}
							?>
						</div>
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