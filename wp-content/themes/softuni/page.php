<?php get_header(); ?>

</section>

<!-- FAQ -->
<section class="faq">
	<?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) :
			the_post(); ?>
			<div class="container page-bgc">
				<div class="row">
					<div class="col-sm-12">
						<div class="title-box">
							<h2 class="title mt0">
								<?php the_title(); ?>
							</h2>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-8 col-sm-offset-2">
						<p class="inner-p">
							<?php the_content(); ?>
						</p>
					</div>
				</div>
			</div>
		<?php endwhile; ?>
	<?php else : ?>
		Sorry, there is no posts here.
	<?php endif; ?>
</section>

<?php get_footer(); ?>