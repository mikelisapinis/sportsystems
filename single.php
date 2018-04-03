<?php get_header(); ?>
<div class="row bg-image">

	<div class="col-12 contacts-bg">
		<h1><?php the_title(); ?></h1>
	</div>

</div>

<div class="row">

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
		<div class="col-8">

			<?php the_content(); ?>

		</div>

		<div class="col-4">

			<!-- OUTPUT LOGO -->
			<?php if ( has_post_thumbnail() ) : ?>

				<?php the_post_thumbnail( 'full', ['class' => 'mx-auto d-block'] ); ?>

			<?php endif; ?>

			<!-- OUTPUT LINK TO CATALOG -->
			<?php if ( get_field("catalog") ) : ?>

				<a target="_blank" href="<?php echo get_field('catalog'); ?>" class="btn btn-primary btn-block fancybox-pdf">Catalog</a>

			<?php endif; ?>

			<!-- OUTPUT LINK TO AVAILABLE PRODUCTS -->
			<?php if ( get_field("available-products") ) : ?>

				<a target="_blank" href="<?php echo get_field('available-products'); ?>" class="btn btn-primary btn-block">Available products</a>

			<?php endif; ?>

			<!-- OUTPUT LINK TO MANUFACTURERS WEB -->
			<?php if ( get_field("official-web") ) : ?>

				<a target="_blank" href="<?php echo get_field('official-web'); ?>" class="btn btn-primary btn-block">Official website</a>

			<?php endif; ?>

		</div>

	<?php endwhile; endif; ?>

</div>

<?php get_footer(); ?>
