<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title> <?php bloginfo('name');?> </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="<?php bloginfo('template_directory');?>/css/bootstrap.css" rel="stylesheet">
    <link href="<?php bloginfo('template_directory');?>/style.css" rel="stylesheet">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <?php wp_enqueue_script('jquery'); ?>
    <?php wp_head(); ?>
  </head>

  <body <?php body_class(); ?>>

    <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="navbar-inner">
          <div class="container">

            

            <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="brand" href="<?php bloginfo('url');?>"><?php bloginfo('name'); ?></a>
            <div class="nav-collapse collapse">

              <?php wp_nav_menu( array( 
                'theme_location' => 'header-menu', 
                'menu_class' => 'nav'
              ) ); ?>

            </div>
          </div>
        </div>
      </div>

      <div class="container main-container">



