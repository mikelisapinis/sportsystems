<?php /*Template Name: Manufacturers */ ?>
<?php get_header(); ?>
<div class="row">
	<div class="col-12">

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="post" id="post-<?php the_ID(); ?>">
			<h1><?php the_title(); ?></h1>
			<div class="entry">
				<?php the_content(); ?>
				

				<?php global $post; // required
                    $args = array('category_name' => 'Manufacturers'); // include category 9
                    $custom_posts = get_posts($args);
                    foreach($custom_posts as $post) : setup_postdata($post);
                         the_title();
                         the_excerpt();
                    endforeach;
               ?>
			</div>
		</div>
		<?php endwhile; endif; ?>

	</div>

</div>
<?php get_footer(); ?>