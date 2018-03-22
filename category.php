<?php
/**
 * The template for displaying Category Archive pages.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>

		<div id="container">
			<div id="content" role="main">

				<h1 class="page-title"><?php echo single_cat_title( '', false ); ?></h1>
					<?php			

					$the_query = new WP_Query(
					[

						'category_name' => 'sport-club',
						'posts_per_page' => 100,
						'order' => 'DESC'

					]); 

	if ( $the_query->have_posts() ) {

		echo '<div class="project-list">';
		echo '<div class="row">';

		while ( $the_query->have_posts() ) {

			echo '<div class="col-md-4 project">';
			$the_query->the_post();
			$title = get_the_title();
			$permalink = get_the_permalink();
			$content = get_the_content();

			if ( has_post_thumbnail() ) {
				echo get_the_post_thumbnail($post_id);
			} else {
				echo "<img src='http://via.placeholder.com/350x350'>";
			} ?>
			
			<h2><?php echo $title; ?></h2>
			<a class="btn btn-primary" href="<?php echo $permalink; ?>">More</a>
			<?php echo '</div>';

		}
		echo '</div>';
		echo '</div>';
	}
	wp_reset_postdata();?>

			</div><!-- #content -->
		</div><!-- #container -->

<?php get_footer(); ?>
