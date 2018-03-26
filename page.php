<?php get_header(); ?>
<div class="row">

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div class="col-12 contacts-bg">

			<h1 class="page-title"><?php the_title(); ?></h1>

		</div>

		<div class="col-12">

			<?php the_content(); ?>

		</div>


	<?php endwhile; endif; ?>

</div>
<?php get_footer(); ?>