<?php /*Template Name: Case Studies */ ?>
<?php get_header(); ?>
<div class="row">
	<div class="col-12">

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="post" id="post-<?php the_ID(); ?>">
			<h1><?php the_title(); ?></h1>
			<div class="entry">
				<?php the_content(); ?>
				

				<?php wp_nav_menu(
					[
						
						'menu' => 'case-studies',
						'container' => '222',
						'menu_class' => 'row'

					]
				);?>
			</div>
		</div>
		<?php endwhile; endif; ?>

	</div>

</div>
<?php get_footer(); ?>