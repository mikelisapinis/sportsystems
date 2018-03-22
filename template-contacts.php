<?php /*Template Name: Kontakti */ ?>
<?php get_header(); ?>

<div class="row">
<?php get_sidebar(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="post" id="post-<?php the_ID(); ?>">
			<div class="row">
			<div class="col-6">
				<h2 class="simple-heading"><?php the_title(); ?></h2>
				<div id="contact-form">
					<?php the_content(); ?>
				</div>
			</div>
			<div id="address-sidebar" class="col-6">
				<h2>Adrese</h2>
				Rīga, Bieķensalas iela 21, LV-1004
				<h2>Darba laiks</h2>
				10:00 - 18:00, katru dienu,<br/> izņemot sestdienas, svētdienas
				<h2>Telefons</h2>
				+371 67845794, +371 29219953
				<h2>E-pasts</h2>
				arturs@sportsystems.lv
				<h2>Fakss</h2>
				+371 67845794
				<h2>Firmas nosaukums</h2>
				SIA Sporta Sistēmas<br/>
				PVN Nr. LV40003569749<br/>
				Jurid. adrese Ikšķile, Papeļu iela 4a<br/>
				Veikala adrese: Bieķensalas 21, Rīga, LV 1004<br/>
				SEB banka AS<br/>
				Kods UNLALV2X<br/>
				Konts LV44UNLA0050000645788<br/>
			</div>
</div>
		</div>
		<?php endwhile; endif; ?>
</div>
<?php get_footer(); ?>