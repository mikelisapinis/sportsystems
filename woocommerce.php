<?php get_header(); ?>
<div class="row">
	<?php get_sidebar(); ?>
	<?php 
		if (is_shop()) {

			echo "<div class='col'>" . do_shortcode('[metaslider id="5257"]') . "</div>";

			echo "<div class='col'>";
				echo "<h1 class=\"page-title\">Akcijas preces</h1>";
				echo do_shortcode('[sale_products per_page="12" orderby="price" order="asc"]');
				?>

				<h1 class="page-title"><a href="https://trenazieri.lv/kategorija/kardio-trenazieri/velotrenazieri/">Velotrenažieri</a></h1>
				<a href="https://trenazieri.lv/kategorija/kardio-trenazieri/velotrenazieri/" class="btn btn-outline-secondary btn-sm category-link">Visi velotrenažieri</a>
				<div id="velotrenazieri" class="carousel slide" data-ride="carousel">
					<div class="carousel-inner">

						<div class="carousel-item active">
							<?php
							echo do_shortcode('[products skus="SU139, B800P+, B860i, SB700" orderby="popularity" order="DESC" limit="4"]');
							?>
						</div>

						<div class="carousel-item">
							<?php
							echo do_shortcode('[products skus="XBU55, R200, XB-AB-1, CU800" orderby="popularity" order="DESC" limit="4"]');
							?>
						</div>

					</div>
				
					<a class="carousel-control-prev" href="#velotrenazieri" role="button" data-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="carousel-control-next" href="#velotrenazieri" role="button" data-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>

				<h1 class="page-title"><a href="https://trenazieri.lv/kategorija/kardio-trenazieri/skrejcelini/">Skrejceliņi</a></h1>
				<a href="https://trenazieri.lv/kategorija/kardio-trenazieri/skrejcelini/" class="btn btn-outline-secondary btn-sm category-link">Visi skrejceliņi</a>
				<div id="skrejcelini" class="carousel slide" data-ride="carousel">
					<div class="carousel-inner">

						<div class="carousel-item active">
							<?php
							echo do_shortcode('[products skus="XT285, XT685, T3i, CT850" orderby="popularity" order="DESC" limit="4"]');
							?>
						</div>

						<div class="carousel-item">
							<?php
							echo do_shortcode('[products skus="XB-CT-1, CT 850 ENT, CT900, MT 200" orderby="popularity" order="DESC" limit="4"]');
							?>
						</div>

					</div>
				
					<a class="carousel-control-prev" href="#skrejcelini" role="button" data-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="carousel-control-next" href="#skrejcelini" role="button" data-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>

				<h1 class="page-title"><a href="https://trenazieri.lv/kategorija/kardio-trenazieri/eliptiskie-trenazieri/">Eliptiskie trenažieri</a></h1>
				<a href="https://trenazieri.lv/kategorija/kardio-trenazieri/eliptiskie-trenazieri/" class="btn btn-outline-secondary btn-sm category-link">Visi eliptiskie trenažieri</a>
				<div id="eliptiskie-trenazieri" class="carousel slide" data-ride="carousel">
					<div class="carousel-inner">

						<div class="carousel-item active">
							<?php
							echo do_shortcode('[products skus="E880I, E7000P+, XE310, E60" orderby="popularity" order="DESC" limit="4"]');
							?>
						</div>

						<div class="carousel-item">
							<?php
							echo do_shortcode('[products skus="XE395, XE795, CE800, CG800" orderby="popularity" order="DESC" limit="4"]');
							?>
						</div>

					</div>
				
					<a class="carousel-control-prev" href="#eliptiskie-trenazieri" role="button" data-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="carousel-control-next" href="#eliptiskie-trenazieri" role="button" data-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>

				<h1 class="page-title">Top preces</h1>
				<?php echo do_shortcode('[product_category category=top10 per_page=4]'); ?>
			</div>

		<?php }
	?>

	<!--Prints the store content-->
	<?php 
		if (!is_shop()) {?>
			<?php if ( function_exists('yoast_breadcrumb') ) {?>
			<nav id="breadcrumbs">
				<?php yoast_breadcrumb('<p id="breadcrumbs">','</p>'); };?>
			</nav>
			<?php woocommerce_content();
		}; ?>
</div>
<?php get_footer(); ?>