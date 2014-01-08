<?php
/*
Template Name: Basic
*/
?>

<?php get_header(); ?>

		<article class="col-xs-12">
			<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile; ?>
		</article>
			
<?php get_footer(); ?>