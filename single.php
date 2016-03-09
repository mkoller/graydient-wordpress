<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package graydient
 */

?>

<html>
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
       <link rel="stylesheet" href="<?php echo get_site_url(); ?>/wp-content/themes/graydient/css/style.css">


   </head>
   <body>
      <div class="posts-container">
      <!-- Start container -->
      <div id="container" class="container intro-effect-fadeout">
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

            <!-- Start Header -->
            <div class="header ">
                  <div class="bg-img">

                  <?php if( get_field('hero_post_image') ): ?>

                        <img src="<?php the_field('hero_post_image'); ?>" />

                      <?php endif; ?>
                  
                  </div>
                     <div class="title">
                        <h1><?php single_post_title(); ?> </h1>
                        <p>by 
                        <strong>
                        Author
                        </strong> 
                     </div>
               </div>
            </div>
            <button class="trigger"><span></span></button>
            <!-- End Header -->

            <!-- Start Content -->
            <article class="content">
               <div>
                  <p>
                   <?php global $post;
						$content = $post->post_content;

						if ( !empty( $content ) ) :
						    echo $content;
					endif; ?> 
					</p>

               </div>
            </article>
            <!-- End Content -->
         </div>
         <!-- End Wrap -->
      </div>
      <!-- End Container -->
      </div>
      <!-- posts container -->

      <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
      <script src="<?php echo get_site_url(); ?>/wp-content/themes/graydient/js/scripts.js"></script>
      <script src="<?php echo get_site_url(); ?>/wp-content/themes/graydient/js/classie.js"></script>
      <script src="<?php echo get_site_url(); ?>/wp-content/themes/graydient/js/posts.js"></script>
   </body>
</html>
