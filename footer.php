</div>


<footer class="clearfix row">

	<section class="col-lg-3 col-md-6 col-sm-12">
		<?php if ( is_active_sidebar( 'footer_01' ) ) : ?>
			<div class="primary-sidebar widget-area" role="complementary">
				<?php dynamic_sidebar( 'footer_01' ); ?>
			</div>
		<?php endif; ?>
	</section>

	<section class="col-lg-3 col-md-6 col-sm-12">
		<?php if ( is_active_sidebar( 'footer_02' ) ) : ?>
			<div class="primary-sidebar widget-area" role="complementary">
				<?php dynamic_sidebar( 'footer_02' ); ?>
			</div>
		<?php endif; ?>
	</section>

	<section class="col-lg-3 col-md-6 col-sm-12">
		<?php if ( is_active_sidebar( 'footer_03' ) ) : ?>
			<div class="primary-sidebar widget-area" role="complementary">
				<?php dynamic_sidebar( 'footer_03' ); ?>
			</div>
		<?php endif; ?>
	</section>

	<section id="footer-contacts" class="col-lg-3 col-md-6 col-sm-12">
		<?php if ( is_active_sidebar( 'footer_04' ) ) : ?>
			<div class="primary-sidebar widget-area" role="complementary">
				<?php dynamic_sidebar( 'footer_04' ); ?>
			</div>
		<?php endif; ?>
		
	</section>

	<section id="author" class="clearfix col-12">
		<p><?php echo date('Y'); ?> &copy; SIA Sporta Sistēmas | Dizains un izstrāde - <a target="_blank" href="http://www.emei.eu">www.emei.eu</a></p>
	</section>

</footer>
<?php wp_footer();?>
</div>

<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 957846607;
var google_custom_params = window.google_tag_params;
var google_remarketing_only = true;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/957846607/?value=0&amp;guid=ON&amp;script=0"/>
</div>
</noscript>
</body>
</html>
