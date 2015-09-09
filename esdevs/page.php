<?php get_header(); ?>
<div class="container main-content">
	<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<h1><?php the_title(); ?></h1>
	  	<?php the_content(); ?>

	<?php endwhile; else: ?>
		<p><?php _e('Sorry, this page does not exist.'); ?></p>
	<?php endif; ?>
				</div>
				<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
					<h2>Sidebar</h2>	
				</div>
			</div>

</div>
</div>

<?php get_footer(); ?>