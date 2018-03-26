<?php /*Template Name: Contacts */ ?>
<?php get_header(); ?>

<div class="row contacts">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<div class="col-12 contacts-bg">
		<h1><?php the_title(); ?></h1>
		<?php the_content(); ?>
	</div>
	<div class="col-12">
		<div class="row">
			<div class="col-lg-4">

				<h2>Drop us a line!</h2>
				<?php
				// CONTACT FORM
				if( get_field('contact-form') ){

					$cf7 = get_field('contact-form');
					echo do_shortcode($cf7);

				}
				?>

			</div>
			<div class="col-lg-4">

				<h2>Contact</h2>
				<ul class="list-group">
				<?php

				if( get_field('phone') ){

					echo "<li class='list-group-item'>";
						echo "<i class='fas fa-phone'></i>";
						echo get_field('phone');
					echo "</li>";

				}

				if( get_field('email') ){

					echo "<li class='list-group-item'>";
						echo "<i class='far fa-envelope'></i>";
						echo get_field('email');
					echo "</li>";

				}

				if( get_field('fax') ){

					echo "<li class='list-group-item'>";
						echo "<i class='fas fa-fax'></i>";
						echo get_field('fax');
					echo "</li>";

				}

				if( get_field('properties') ){

					echo "<li class='list-group-item'>";
						echo "<i class='fas fa-briefcase'></i> Business information";
						echo get_field('properties');
					echo "</li>";

				}

				?>
				</ul>

			</div>
			<div class="col-lg-4">
				
				<h2>Visit our store!</h2>
				<?php

					if( get_field('address') ){

						echo "<li class='list-group-item'>";
							echo "<i class='fas fa-map-marker'></i>";
							echo get_field('address');
						echo "</li>";

					}

					if( get_field('working-hours') ){

						echo "<li class='list-group-item'>";
							echo "<i class='far fa-clock'></i>";
							echo get_field('working-hours');
						echo "</li>";
	
					}

					if( get_field('map') ){

						echo get_field('map');

					}

				?>

			</div>
		</div>
	</div>
<?php endwhile; endif; ?>
</div>
<?php get_footer(); ?>