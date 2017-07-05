<!DOCTYPE html>
<html <?php language_attributes(); ?>>
   <head>
      <meta charset="<?php bloginfo('charset'); ?>" />
      <title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
      <meta name="description" content="<?php bloginfo('description'); ?>" />
      <?php wp_head(); ?>
   </head>

   <<?php echo '<body class="'.join(' ', get_body_class()).'">'.PHP_EOL; ?>>
      <div class="container">
         <div class="row">
            <div class="col-xs-12">
               <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
                 <div class="container-fluid">
                     <div class="row top">
                        <div class="col-xs-6 top-left">
                           <i class="item_vertical_align_middle fa fa-question-circle fa-2x" aria-hidden="true"></i> Arctic Connect Palvelukeskus: 0600 399 330 (1,26€/min) & palvelukeskus@arctic-connect.com
                        </div>
                        <div class="col-xs-6 text-right top-social">
                           <?php wp_nav_menu(array(
                                'theme_location'  =>    'social',
                                'container'       =>    false,
                                'menu_class'      =>    '',
                                )
                             );
                           ?>
                        </div>
                     </div>
                   <!-- Brand and toggle get grouped for better mobile display -->
                   <div class="navbar-header">
                     <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                       <span class="sr-only">Toggle navigation</span>
                       <span class="icon-bar"></span>
                       <span class="icon-bar"></span>
                       <span class="icon-bar"></span>
                     </button>
                     <a class="navbar-brand hidden-lg-down item_vertical_align_middle" href="/"><?php the_custom_logo(); ?></a>
                  </div><!-- .navbar-header -->

                   <!-- Collect the nav links, forms, and other content for toggling -->
                   <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                      <?php wp_nav_menu(array(
                           'theme_location'  =>    'primary',
                           'container'       =>    false,
                           'menu_class'      =>    'nav navbar-nav navbar-right',
                           'walker'          =>    new Walker_Nav_Primary()
                           )
                        );
                      ?>
                   </div><!-- /.navbar-collapse -->
                 </div><!-- /.container-fluid -->
               </nav>

            </div><!-- .col-xs-12 -->
         </div><!-- .row -->
