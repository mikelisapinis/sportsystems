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

<div class="row bg-image">

     <div class="col-12 contacts-bg">

          <h1 class="page-title"><?php echo $category_name; ?></h1>

     </div>

</div>

<div class="row" id="manufacturers">

     <?php

     if( strtolower($category_name) == "case studies" ){

          wp_nav_menu([
                    
               'menu' => 'case-studies',
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

               echo '<div class="row">';

               while ( $the_query->have_posts() ) {

                    echo '<div class="col-md-4 project">';

                         // SELECT CURRENT POST
                         $the_query->the_post();

                         // GET THE TITLE
                         $title = get_the_title();

                         // GET THE PERMALINK
                         $permalink = get_the_permalink();

                         // GET THE EXCERPT
                         $content = get_the_content();

                         echo "<a href='" . $permalink . "'>";

                              // GET THE POST THUMBNAIL
                              if ( has_post_thumbnail() ) {

                                   the_post_thumbnail('full', ['class'=>'mx-auto d-block manufacturer']);

                              } else {

                                   echo "<img src='http://via.placeholder.com/350x350'>";

                              };

                         echo "</a>";

                         echo "<p>" . $content . "</p>";

                         echo "<a href='" . $permalink . "' class='btn btn-light d-block mx-auto'>More</a>";

                    echo "</div>";

               }

               echo "</div>";

          }

          wp_reset_postdata();

     }; ?>

</div>

<?php get_footer(); ?>
