<?php get_header(); ?>


<div class="container col-md-9 col-xs-12 main-column" style="float: right;">

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

		<?php the_content();?>

	<?php endwhile; ?>
	<!-- post navigation -->
	<?php else: ?>
	<!-- no posts found -->
	<?php endif; ?>

</div>

<?php get_sidebar('main'); ?>

<?php get_footer(); ?>