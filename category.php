<?php
/**
 * The template for displaying Category Archive pages.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
$category_name = single_cat_title( '', false );

get_header(); ?>

<h1 class="page-title"><?php echo $category_name; ?></h1>

<?php

	if( strtolower($category_name) == "case studies" ){

		wp_nav_menu([
				
			'menu' => 'case-studies',
			'container' => '222',
			'menu_class' => 'row'

		]);

	} else {

		$args = [

			'category_name' => $category_name,
			'posts_per_page' => 100,
			'order' => 'DESC',
			'post_parent' => true

		];

		$the_query = new WP_Query($args);

		if ( $the_query->have_posts() ) {

			echo '<ul id="project-list" class="row">';
			// echo '<div class="row">';

			while ( $the_query->have_posts() ) {

				echo '<li class="col-md-4 nav-item">';

					// SELECT CURRENT POST
					$the_query->the_post();

					// GET THE TITLE
					$title = get_the_title();

					// GET THE PERMALINK
					$permalink = get_the_permalink();

					// GET THE EXCERPT
					$content = get_the_excerpt();

					// GET THE POST THUMBNAIL
					if ( has_post_thumbnail() ) {

						echo "<a href='" . $permalink . "'>";
							the_post_thumbnail('full', ['class'=>'mx-auto d-block']);
						echo "</a>";
						echo "<a class='title-link nav-link' href='" . $permalink . "'>";
						echo $title . "</a>";

					} else {

						echo "<a href='" . $permalink . "'>";
							echo "<img src='http://via.placeholder.com/350x350'>";
						echo "</a>";
						echo "<a class='title-link nav-link' href='" . $permalink . "'>";
						echo $title . "</a>";

					}; ?>

				<?php echo '</li>';

			}


		}

		wp_reset_postdata();

	}; ?>


		<!-- </div>
	</div> -->

<?php get_footer(); ?>
