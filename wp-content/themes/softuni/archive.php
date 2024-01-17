<?php get_header(); ?>

<div class="intro row">
	<div class="overlay"></div>
	<div class="col-sm-12">
		<ol class="breadcrumb">
			<li><a href="<?php get_home_url() ?>">Home</a></li>
			<li class="active"><?php the_archive_title() ?></li>
		</ol>
	</div>
</div> <!-- /.intro.row -->
</div>
<div class="nutral"></div>
</section>

<section class="faq">
	<?php if (have_posts()) : ?>
		<?php while (have_posts()) :
			the_post(); ?>

			<?php
			get_template_part('partials/content', 'post')
			?>


		<?php endwhile; ?>
		<div class="center">
			<?php
			the_posts_pagination(array(
				'mid_size' => 2,
				'prev_text' => __('Back', 'textdomain'),
				'next_text' => __('Onward', 'textdomain'),
			));
			?>
		</div>
	<?php else : ?>
		Sorry, there is no posts here.
	<?php endif; ?>
</section>

<?php get_footer(); ?>