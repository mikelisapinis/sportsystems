<?php get_header(); ?>

<div class="row">
	<?php get_sidebar(); ?>
		<?php if (have_posts()) : ?>
			<h1 class="page-title">Meklēšanas rezultāti</h1>
			<div title="search-results" <?php post_class() ?> id="post-<?php the_ID(); ?>">
				<?php while (have_posts()) : the_post(); ?>
					<div class="card">
						<?php 
						if ( has_post_thumbnail() ) {
							echo "<div class='card-im-left'>";
								the_post_thumbnail("thumbnail");
							echo "</div>";
						} 
						?>
						<div class="card-body">
							<h3><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
						</div>
					</div>
				<?php endwhile; ?>
			</div>
		<?php else : ?>
			<h2>Nav rezultātu</h2>
		<?php endif; ?>
</div>
<?php get_footer(); ?>