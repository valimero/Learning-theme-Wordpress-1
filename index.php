<?php get_header(); ?>

<?php if(have_posts()): ?>
	<?php while(have_posts()) : the_post(); ?>
		<div class="article">
			<?php the_title(); ?>
		</div>
	<?php endwhile; ?>
<?php endif; ?>


<?php get_footer(); ?>