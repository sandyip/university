<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"><!--<![endif]-->
<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <?php wp_head();?>

    <meta name="author" content="themesflat.com">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  

    <!-- Favicon and touch icons  -->
    <link href="icon/apple-touch-icon-48-precomposed.png" rel="apple-touch-icon-precomposed" sizes="48x48">
    <link href="icon/apple-touch-icon-32-precomposed.png" rel="apple-touch-icon-precomposed">
    <link href="#" rel="shortcut icon">

    <!--[if lt IE 9]>
        <script src="javascript/html5shiv.js"></script>
        <script src="javascript/respond.min.js"></script>
    <![endif]-->

</head>

<body class="header-sticky">

    <div class="boxed">

        <div class="menu-hover">
            <div class="btn-menu">
                <span></span>
            </div><!-- //mobile menu button -->
        </div>

        <div class="header-inner-pages">
            <div class="top">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <nav class="navbar menu-top">
                                
                                     <?php
                                    if(has_nav_menu('header2')){
                                        wp_nav_menu([
                                            'theme_location' => 'header2',
                                            'container' => false,
                                            'menu_class' => 'clearfix',
                                            'fallback_cb' => false,
                                            'depth' => 4
                                        ]);
                                    } 

                                    ?> 
                                   
                                
                            </nav><!-- /.mainnav -->

                            <a class="navbar-right search-toggle show-search" href="#">
                                <i class="fa fa-search"></i>
                            </a>
                            
                            <div class="submenu top-search">
                                <form class="search-form">
                                    <div class="input-group">
                                        <input type="search" class="search-field" placeholder="Search Here">
                                        <span class="input-group-btn">
                                            <button type="submit"><i class="fa fa-search fa-4x"></i></button>
                                        </span>
                                    </div>
                                </form>
                            </div>

                            <div class="navbar-right topnav-sidebar">
                                <ul class="textwidget">
                                    <li>
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                    </li>
                                    <li>
                                        <a href=""><i class="fa fa-youtube"></i></a>
                                    </li>
                                    <li>
                                        <a href="<?php echo get_theme_mod('university_twitter_handle');?>"><i class="fa fa-twitter"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div><!-- col-md-12 -->
                    </div><!-- row -->
                </div><!-- container -->
            </div><!-- Top -->    
        </div><!-- header-inner-pages -->

        <!-- Header -->
        <header id="header" class="header">
            <div class="header-wrap">
                <div class="container">
                    <div class="header-wrap clearfix">
                        <div id="logo" class="logo">
                            <a href="index.html" rel="home">
                                <?php 
                                if(has_custom_logo()){
                                the_custom_logo();
                            }else {
                            ?>
                            <a href="<?php echo home_url('/'); ?>"> <?php bloginfo('name');?></a>
                            <?php 
                        }

                                ?>
                            </a>
                        </div><!-- /.logo -->


                        <div class="nav-wrap">

                            <nav id="mainnav" class="mainnav">
                                
                                    <?php
                                    if(has_nav_menu('header')){
                                        wp_nav_menu([
                                            'theme_location' => 'header',
                                            'container' => false,
                                            'menu_class' => 'menu',
                                            'fallback_cb' => false,
                                            'depth' => 4
                                        ]);
                                    } 

                                    ?>                                       
                               
                            </nav><!-- /.mainnav -->
                        </div><!-- /.nav-wrap -->
                    </div><!-- /.header-wrap -->
                </div><!-- /.container-->
            </div><!-- /.header-wrap-->
        </header><!-- /.header -->