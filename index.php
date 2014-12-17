<?php get_header(); ?>

	<?php if ( have_posts() ) : ?>

		<?php while ( have_posts() ) : the_post(); ?>

			<div class="post">
				<h2 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				<p class="post-thumbnail"><?php the_post_thumbnail( 'medium' ); ?></p>
				<?php the_excerpt(); ?>
			</div>

		<?php endwhile; ?>

	<?php else : ?>

		<div class="no-posts">
			<p>記事がありません。</p>
		</div>

	<?php endif; ?>

<?php get_footer(); ?>