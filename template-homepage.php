<?php
/**
 * Template Name: Home Page
 */
?>

<html>
   <head>
      <meta charset="UTF-8">
      <title>Navigation 1</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="<?php echo get_site_url(); ?>/wp-content/themes/graydient/style.css">
   </head>
   <body>
<div class="home-page">
   <!-- Start container -->
      <div id="container" class="container">
      <!-- Start Wrap -->
         <div class="wrap" id="wrap">

         <!-- Start Navigation -->
            <header class="main-header">
            <div class="logo"><a href="/"><img src="http://localhost:8888/graydient/wp-content/uploads/2016/03/graydient-logo.png"></a></div>
               <div class="menu-link">
                  <div class="bar"></div>
               </div>
               <nav id="menu" role="navigation">
                  <ul>
                  <div class="access">
                          <?php wp_nav_menu(); ?>
                     </div>
                  </ul>
               </nav>
            </header>
            <!-- Stop Navigation -->

        <div class="content row">
                   <div class="hero">

                  <?php if( get_field('hero_image') ): ?>
                     <img src="<?php the_field('hero_image'); ?>" />
                  <?php endif; ?>

                  <div class="services-header">
                  
                     <?php if( get_field('hero_header') ): ?>
                      <h1><?php the_field('hero_header'); ?></h1>
                     <?php endif; ?>
                     
                     <?php if( get_field('hero_body') ): ?>
                        <p> <?php the_field('hero_body'); ?> </p>
                     <?php endif; ?>

                  </div>
           </div>

         <div class="main">

            <div class="columnsContainer">

            <div class="leftColumn">

            <?php
               //instantiate a WP_Query and get the latest 10 posts
               $wp_query = new \WP_Query();
               $wp_query->query('showposts=4');
                
               //Iterate through the returned posts. The starts the WP "Loop"
               while ($wp_query->have_posts()) :
                  $wp_query->the_post();
               ?>
               <div class="post">
               <h1><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>
               <?php the_content(); ?>
               </div>
               <?php endwhile; ?>

               </div> <!-- left column -->

               <div class="rightColumn">

               <!-- start sidebar -->
               <?php
               get_sidebar();
               ?>
               <!-- end sidebar -->
               
               </div> <!-- reight cloumn -->

            </div> <!-- columns container -->

         </div> <!-- main -->

      </div>
         </div>
         <!-- End Wrap -->
      </div>
      <!-- End Container -->
      </div>
      <!-- posts container -->

      <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
      <script src="<?php echo get_site_url(); ?>/wp-content/themes/graydient/js/scripts.js"></script>

   </body>
</html>
