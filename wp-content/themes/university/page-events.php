<?php get_header();
/*Template Name: Events page*/ 
?>

<div class="page-title full-color">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">                    
                        <div class="page-title-heading">
                            <h2 class="title">Events</h2>
                        </div>
                        <div class="breadcrumbs">
                            <ul>
                                <li class="home"><a href="<?php echo site_url('/');?>">Home </a></li>
                                <li>\ EVENT</li>
                            </ul>                   
                        </div>                  
                    </div><!-- /.col-md-12 -->  
                </div><!-- /.row -->  
            </div><!-- /.container -->                      
        </div><!-- /page-title -->

        <section class="flat-row padding-v1">
            <div class="container">
                <div class="row">
                    <div id="content" class="col-md-9">
                        <div class="project-listing">
                            <div class="filter-cat">
                                <a href="#" class="flat-button">All</a>
                                <a href="#" class="flat-button">Marketing</a>
                                <a href="#" class="flat-button">academy</a>
                                <select id="uni-project">
                                    <option value="#" selected="selected">All</option>
                                    <option value="#">Marketing</option><option value="#">academy</option>
                                </select>
                            </div>
                        </div>
                         <?php 
                                            $args = array(
                                            'post_type' => 'event',
                                            'posts_per_page' => -1,
                                            'orderby' => 'title',
                                            'order' => 'ASC'
                                            );
                                            $sliders2 = new WP_Query($args);
                                            while($sliders2->have_posts()) : $sliders2-> the_post();

                                            ?>
        
                        <div class="event-listing event-listing-classic">
                            <article class="post-item row event-classic-item">
                                <div class="col-md-4 col-sm-5">
                                    <div class="content-pad">
                                        <div class="item-thumbnail">
                                            <a href="#">
                                                <img src="<?php echo the_post_thumbnail_url();?>" alt="image">
                                                <div class="date-block">
                                                    <div class="month"><?php the_field('event-date');?></div>
                                                    
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8 col-sm-7">
                                    <div class="content-pad">
                                        <div class="item-content">
                                            <h3 class="item-title">
                                                <a href="#" class="main-color-1-hover"><?php the_title();?></a>
                                            </h3>

                                            <div class="price main-color-1"><?php the_field('event-price');?></div>
                                            <p><?php the_content();?></p>
                                            <div class="event-time"><?php the_field('event-time');?></div>
                                            <div class="event-address" style="font-size: 15px; font-weight: 600;"><?php the_field('event-address');?></div>
                                        </div>
                                        <div class="item-meta">
                                            <a class="flat-button" href="#">DETAILS  <i class="fa fa-angle-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div><!--/event-listing-->

                       <?php endwhile; wp_reset_postdata();?>
                    </div><!-- /col-md-9 -->

                    <div class="col-md-3">
                            <div class="sidebar"><div class="widget widget-nav-menu">
                                    <div class=" widget-inner">
                                        <h2 class="widget-title maincolor2">Main Menu</h2>
                                        <div class="menu-main-navigation-container">
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
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="widget widget-search">
                                    <h2 class="widget-title">COURSE SEARCH</h2>
                                    <form role="search" method="get" id="searchform" class="u-course-search-form" action="http://university.cactusthemes.com/">
                                        <div class="input-group">
                                            <div class="input-group-btn u-course-search-dropdown">
                                                <button class="btn btn-default dropdown-toggle u-course-search-dropdown-button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="button-label">All</span> <span class="fa fa-angle-down"></span></button>
                                                <ul class="dropdown-menu">
                                                    <li>
                                                        <a href="#" data-value="">All</a></li>
                                                    <li>
                                                        <a href="#" data-value="course-autumn-2014">Autumn Courses 2014</a>
                                                    </li>
                                                    <li>
                                                        <a href="#" data-value="bachelor">Bachelor</a>
                                                    </li>
                                                    <li>
                                                        <a href="#" data-value="course">Course</a>
                                                    </li>
                                                    <li>
                                                        <a href="#" data-value="study-2">Study</a>
                                                    </li>                
                                                </ul>
                                            </div><!-- /btn-group -->
                                                    
                                            <input type="text" value="" name="s" id="s" placeholder="SEARCH" class="form-control">
                                            <input type="hidden" name="post_type" value="u_course">
                                            <input type="hidden" name="u_course_cat" class="u-course-search-cat" value="">
                                            <span class="input-group-btn">
                                            <button type="submit" id="searchsubmit" class="btn btn-default u-course-search-submit"><i class="fa fa-search"></i></button>
                                            </span>
                                        </div>
                                    </form>
                                </div><!-- /widget-search -->

                                <div class="widget widget-posts">
                                    <div class="blog-box">
                                        <h2 class="widget-title">LATEST POST</h2>
                                        <ul class="recent-posts clearfix">
                                        	 <?php 
                                            $args = array(
                                            'post_type' => 'sliders',
                                            'posts_per_page' => 3,
                                            'orderby' => 'title',
                                            'order' => 'ASC'
                                            );
                                            $sliders = new WP_Query($args);
                                            while($sliders->have_posts()) : $sliders-> the_post();

                                            ?>
                                            <li>
                                                <div class="thumb item-thumbnail">
                                                    <a href="#">
                                                        <img src="<?php echo the_post_thumbnail_url();?>"style="width:80px; height: 80px;" alt="image">
                                                        <div class="thumbnail-hoverlay main-color-1-bg"></div>
                                                        <div class="thumbnail-hoverlay-cross"></div>
                                                    </a>
                                                </div>
                                                <div class="text">
                                                    <a href="#"><?php the_title();?></a>
                                                    <p><?php echo get_the_date('M');?> <?php echo get_the_date('j');?> <?php echo get_the_date('Y');?></p>
                                                </div>
                                            </li>
                                            <?php endwhile; wp_reset_postdata();?>
                                            
                                        </ul><!-- /popular-news clearfix -->
                                    </div>
                                </div><!-- /widget-posts -->

                                <div class="widget widget-courses">
                                    <h2 class="widget-title">COURSES LIST</h2>
                                    <ul class="recent-posts clearfix">
                                    	<?php 
                                            $args = array(
                                            'post_type' => 'course',
                                            'posts_per_page' => 3,
                                            'orderby' => 'time',
                                            'order' => 'ASC'
                                            );
                                            $sliders2 = new WP_Query($args);
                                            while($sliders2->have_posts()) : $sliders2-> the_post();

                                            ?>
                                        <li>
                                            <div class="thumb item-thumbnail">
                                                <a href="#">
                                                    <img src="<?php echo the_post_thumbnail_url();?>" style="width:80px; height: 80px;" alt="image">
                                                    <div class="thumbnail-hoverlay main-color-1-bg"></div>
                                                    <div class="thumbnail-hoverlay-cross"></div>
                                                </a>
                                            </div>
                                            <div class="text">
                                                <a href="#"><?php the_title();?></a>
                                                <p><?php echo get_the_date('M');?> <?php echo get_the_date('j');?> <?php echo get_the_date('Y');?></p>
                                            </div>
                                        </li>
                                        <?php endwhile; wp_reset_postdata();?>
                                        
                                    </ul><!-- /popular-news clearfix -->
                                </div><!-- /widget-posts -->

                                <div class="widget widget-posts">
                                    <h2 class="widget-title">EVENTS LIST</h2>
                                    <ul class="recent-posts clearfix">
                                    	 <?php 
                                            $args = array(
                                            'post_type' => 'event',
                                            'posts_per_page' => 5,
                                            'orderby' => 'title',
                                            'order' => 'ASC'
                                            );
                                            $sliders2 = new WP_Query($args);
                                            while($sliders2->have_posts()) : $sliders2-> the_post();

                                            ?>

                                        <li>
                                            <div class="thumb item-thumbnail">
                                                <a href="#">
                                                    <img src="<?php echo the_post_thumbnail_url();?>" style="width:80px; height: 80px;" alt="image">
                                                    <div class="thumbnail-hoverlay main-color-1-bg"></div>
                                                    <div class="thumbnail-hoverlay-cross"></div>
                                                </a>
                                            </div>
                                            <div class="text">
                                                <a href="#"><?php the_title();?></a>
                                                <p><?php echo get_the_date('M');?> <?php echo get_the_date('j');?> <?php echo get_the_date('Y');?></p>
                                            </div>
                                        </li>
                                        <?php endwhile; wp_reset_postdata();?>
                                       
                                    </ul><!-- /popular-news clearfix -->
                                </div><!-- /widget-posts -->
                            </div><!-- /col-md-9 -->
                    </div><!-- /col-md-3 -->
                </div>
            </div>
        </section>
<?php get_footer();?>