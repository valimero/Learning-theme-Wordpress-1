single

<?php get_header(); ?>
<?php get_sidebar(); ?>

<?php if(have_posts()): ?>
	<?php while(have_posts()) : the_post(); ?>
		<div class="article">
			<p class="titre_article"><?php the_title(); ?></p>
			<p class="content"><?php the_content(); ?></p>
		</div>
	<?php endwhile; ?>
<?php endif; ?>


<?php get_footer(); ?>