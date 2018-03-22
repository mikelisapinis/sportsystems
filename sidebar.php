<aside id="sidebar" class="col-sm-12 col-md-3 col-lg-3">
	<?php if ( !dynamic_sidebar() ) : ?>
		<nav id="main-navigation">
			
			<?php echo do_shortcode( '[aws_search_form]' ); ?>
			<?php wp_nav_menu( array('menu' => 'main navigation',
									'container' => '222',
									'container_class' => 'global-navigation-container',
									'menu_class' => 'top-menu',
									'menu_id' => 'global-navigation',));?>	
			<a class="ion-ios-arrow-up close-menu btn btn-light btn-lg">Aizvērt izvēlni</a>	
		</nav>
		<?php if ( is_active_sidebar( 'sidebar-widgets' ) ) : ?>
			<div class="primary-sidebar widget-area" role="complementary">
				<?php dynamic_sidebar( 'sidebar-widgets' ); ?>
			</div>
		<?php endif; ?>
	<?php endif; ?>
</aside>
<div id="main-content" class="col-md-9 col-lg-9 col-sm-12">