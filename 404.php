<?php get_header(); ?>
<div id="main-content" class="sitemap-main-content">
    <h1>Jūsu meklētā lapa diemžēl nav atrasta</h1>
    <p>Jūs varat izvēlēties jebkuru citu veikala sadaļu:</p>
    <nav id="sitemap-navigation" class="clearfix">
    <?php wp_nav_menu( array('menu' => 'main navigation',
                             'container' => '',
                             'container_class' => '',
                             'menu_class' => 'sitemap-top-menu',
                             'menu_id' => '',));?>
    </nav>
    <?php get_footer(); ?>
</div>