		<footer class="bg-primary text-white p-4">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<?php dynamic_sidebar('onder'); ?>
					</div>
					<div class="col-md-4">
						<small>
							&copy; <?php the_author();
							echo ' ' . date('Y'); ?>
						</small>
					</div>
				</div>
			</div>
		</footer>
		<?php wp_footer(); ?>
	</body>
</html>