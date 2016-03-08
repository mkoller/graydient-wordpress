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
      <link rel="stylesheet" href="<?php echo get_site_url(); ?>/wp-content/themes/graydient/style.css">

   </head>
   <body>
      <div class="posts-container">
      <!-- Start container -->
      <div id="container" class="container intro-effect-fadeout">
      <!-- Start Wrap -->
         <div class="wrap" id="wrap">

         <!-- Start Navigation -->
            <header class="main-header">
               <div class="menu-link">
                  <div class="bar"></div>
               </div>
               <nav id="menu" role="navigation">
                  <ul>
                     <li><a href="#">Home</a>
                     </li>
                     <li>
                        <a href="#">About</a>
                        <ul>
                           <li>
                              <a href="#">About 2</a>
                           </li>
                           <li>
                              <a href="#">About 3</a>
                           </li>
                        </ul>
                     </li>
                     <li><a href="#">Blog</a></li>
                     <li><a href="#">Services</a></li>
                     <li><a href="#">Contact</a></li>
                  </ul>
               </nav>
            </header>
            <!-- Stop Navigation -->

            <!-- Start Header -->
            <div class="header">
                  <div class="bg-img"><img src="<?php echo get_site_url(); ?>/wp-content/uploads/2016/03/dog.jpg" alt="Background Image" /></div>
                     <div class="title">
                        <h1>Unconditional Love &amp; Cookies</h1>
                        <p class="subline">Inspiration for Article Intro Effects</p>
                        <p>by <strong>Mark Satorini</strong> &#8212; Posted in <strong>Animals</strong> on <strong>May 21, 2014</strong></p>
                     </div>
               </div>
            </div>
            <button class="trigger" data-info="Click to see the header effect"><span>Trigger</span></button>
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
