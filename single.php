<?php get_header(); ?>

<div class="container-fluid">
	<div class="row">
		<main class="col-md-9">
			<div class="row">
				<?php
					if(have_posts() ):
						while(have_posts() ): the_post(); ?>
							<!-- de metadata van het bericht -->
							<div class="col-md-3 p-4 text-right small bg-liht">
								Dit bericht is geplaatst door
								<i><?php the_author(); ?></i><br>
								op
								<i><?php the_time('j F Y'); ?></i>
								<br><br>
								Categorieën in deze post:
								<?php the_category(); ?>
								<hr>
								<?php 
									$vorig_bericht = get_previous_post();
									if(!empty($vorig_bericht)): 
								?>
										Vorige post:<br>
										<a href="<?php echo the_permalink($vorig_bericht->ID); ?>">
										&#x25C0; <?php echo apply_filters('de_titel', $vorig_bericht->post_title); ?>
										</a>
								<?php 
									endif; 
								?>
								<hr>
								<?php 
									$volgend_bericht = get_next_post();
									if(!empty($volgend_bericht)): 
								?>
										Volgende post:<br>
										<a href="<?php echo the_permalink($volgend_bericht->ID); ?>">
										<?php echo apply_filters('de_titel', $volgend_bericht->post_title); ?> &#x25B6;
										</a>
								<?php 
									endif; 
								?>
							</div>
							<!-- de inhoud van de post -->
							<div class="col-md-9">
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
							</div>
			</div>
		</main>

		<aside class="col-md-3 bg-light p-4">
			<?php dynamic_sidebar('aside'); ?>
		</aside>
	</div>
</div>

<?php get_footer(); ?>