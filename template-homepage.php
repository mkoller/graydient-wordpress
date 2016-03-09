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
 <link rel="stylesheet" href="<?php echo get_site_url(); ?>/wp-content/themes/graydient/style.css?ver=1457483764">
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

          <div class="hero">
            <img src="http://placehold.it/1280x400" alt="">
         </div>
         <div class="main">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer iaculis dignissim orci viverra venenatis. Nulla sit amet quam at nisl sagittis adipiscing in a ligula. Nam in nisi neque. Ut in ipsum eget justo dignissim accumsan a sit amet neque. Nulla facilisi. Aliquam erat volutpat. Aliquam aliquet bibendum mollis. Aliquam erat volutpat. Sed commodo elit ac neque eleifend in commodo justo elementum. Curabitur tristique, odio id convallis aliquet, nibh augue sollicitudin lacus, at fermentum sem dolor eu lacus. Proin gravida dui in libero aliquet quis egestas odio dictum. Fusce in ligula vitae ante mollis viverra. Curabitur nibh felis, ornare ut tempor sed, lobortis id elit. Phasellus nec semper lorem. Pellentesque erat augue, tincidunt sed vulputate et, congue nec felis. Sed ligula metus, condimentum non commodo et, varius varius nisi.</p>
         </div>
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
