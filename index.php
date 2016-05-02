<?php get_header(); ?>

<?php get_sidebar(); ?>

<?php if(have_posts()): ?>
	<?php while(have_posts()) : the_post(); ?>
		<div class="article">
			<p class="titre_article"><?php the_title(); ?></p>
			<p class="content"><?php the_content(); ?></p>
			<p class="meta_info"><?php the_time('j F Y'); ?></p>
			<p class="meta_autor"><?php the_author(); ?></p>
		</div>
	<?php endwhile; ?>
<?php endif; ?>


<?php get_footer(); ?>