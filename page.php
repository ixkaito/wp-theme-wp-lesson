<?php get_header(); ?>

	<?php while ( have_posts() ) : the_post(); ?>

		<div class="page">
			<h2 class="page-title"><?php the_title(); ?></h2>
			<?php the_content(); ?>
		</div>

	<?php endwhile; ?>

<?php get_footer(); ?>