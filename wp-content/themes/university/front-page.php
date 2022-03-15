<?php get_header();?>

<div class="tp-banner-container">
            <div class="tp-banner" >
                <ul>
                    <?php 
                                            $args = array(
                                            'post_type' => 'sliders2',
                                            'posts_per_page' => 1,
                                            'orderby' => 'title',
                                            'order' => 'ASC'
                                            );
                                            $sliders2 = new WP_Query($args);
                                            while($sliders2->have_posts()) : $sliders2-> the_post();

                                            ?>
                    <li data-transition="slidedown" data-slotamount="7" data-masterspeed="1000" data-saveperformance="on">
                        <img src="<?php echo the_post_thumbnail_url();?>" alt="slider-image">

                        <div class="tp-caption sft desc-slide center color-white color-full" data-x="770" data-y="479" data-speed="1000" data-start="1000" data-easing="Power3.easeInOut">
                            <div class="title main-color-1 font-2"><?php the_title();?></div>
                            <div class="content"><?php the_content();?></div>
                        </div>

                    </li>
                     <?php endwhile; wp_reset_postdata();?>

                   
                </ul>
            </div>
        </div> <!-- /.tp-banner-container -->

        <div class="header-overlay-content header-overlay-scroller">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <section class="un-post-scroller un-post-scroller-2901 " data-delay="0">
                            <div class="section-inner-no-padding">
                                <div class="post-scroller-wrap verticalCarousel">
                                    
                                    <div class="post-scroller-carousel ">
                                        <div class="post-scroller-carousel-inner verticalCarouselGroup vc_list">

                                            <?php 
                                            $args = array(
                                            'post_type' => 'sliders',
                                            'posts_per_page' => 4,
                                            'orderby' => 'title',
                                            'order' => 'ASC'
                                            );
                                            $sliders = new WP_Query($args);
                                            while($sliders->have_posts()) : $sliders-> the_post();

                                            ?>

                                            <div class="item post-scroller-item active">
                                                <div class="scroller-item-inner">
                                                    <div class="scroller-item-content post-item-mini">
                                                        <div class="row">
                                                            <div class="col-md-4 col-sm-4 col-xs-4 post-thumbnail-mini">
                                                                <div class="item-thumbnail">
                                                                    <a href="#">
                                                                        <img src="<?php echo the_post_thumbnail_url();?>" alt="image">
                                                                        <div class="thumbnail-hoverlay main-color-1-bg"></div>
                                                                        <div class="thumbnail-hoverlay-cross"></div>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-8 col-sm-8 col-xs-8 post-content-mini">
                                                                <h4><a class="post-title-mini main-color-1-hover" href="http://university.cactusthemes.com/video-post/" title="Your Career Starts Here"><?php the_title();?></a></h4>
                                                                <div class="post-excerpt-mini"><?php the_content();?></div>
                                                            </div>
                                                        </div>
                                                    </div><!--/post-item-mini-->
                                                </div>
                                            </div><!--/post-scroller-item-->

                                            <?php endwhile; wp_reset_postdata();?>

                                           
                                        </div>
                                    </div>
                                    <div class="verticalCarouselHeader">
                                        <a href="#" class="vc_goDown btn btn-primary post-scroller-button post-scroller-down"><i class="fa fa-angle-down"></i></a>
                                        <a href="#" class="vc_goUp btn btn-primary post-scroller-button post-scroller-up"><i class="fa fa-angle-up"></i></a>
                                    </div>
                                </div>
                            </div><!--/section-inner-->
                        </section><!--/u-post-carousel-->
                    </div>
                </div>
            </div>
        </div>

        <section class="flat-row no-padding">
            <div class="flat-fluid">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="post">
                                <h1 class="title"><?php the_field('banner-title-1');?></h1>
                                <p><?php the_field('banner-content-1');?></p>
                                <a class="flat-button button-button_30 btn-default " href="#" data-delay="0">BUY THIS THEME <i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="post">
                                <h1 class="title"><?php the_field('banner-title-2');?></h1>
                                <p><?php the_field('banner-content-2');?></p>
                                <a class="flat-button button-button_30 btn-default " href="#" data-delay="0">PURCHASE NOW <i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="post">
                                <h1 class="title"><?php the_field('banner-title-3');?></h1>
                                <p><?php the_field('banner-content-3');?></p>
                                <a class="flat-button button-button_30 btn-default " href="#" data-delay="0">PURCHASE NOW <i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div><!--/row--> 
                </div><!--/flat-fluid-->  
            </div><!--/container-->
        </section><!--/flat-row -->

        <div class="page-title parallax parallax1">
            <div class="container">
                <div class="flat-university">
                    <div class="post">
                        <h1 class="title" style="color: black;"><?php the_field('university-heading');?></h1>
                    </div><!--/post -->

                    <div class="box-university">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="item-post">
                                    <div class="content-box">
                                        <?php $id_image = get_field('university-image-1');
                                        $image = wp_get_attachment_image_src($id_image, 'about');
                                        ?>
                                        <img src="<?php echo $image[0]; ?>" alt="image">
                                    </div>
                                    <div class="title-box">
                                        <h4  style="color: black;"><?php the_field('university-title-1');?></h4>
                                        <p style="color: black;"><?php the_field('university-address-1');?></p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="item-post">
                                    <div class="content-box">
                                        <?php $id_image = get_field('university-image-2');
                                        $image = wp_get_attachment_image_src($id_image, 'about');
                                        ?>
                                        <img src="<?php echo $image[0]; ?>" alt="image">
                                    </div>
                                    <div class="title-box">
                                        <h4 style="color: black;"><?php the_field('university-title-2');?></h4>
                                        <p style="color: black;"><?php the_field('university-address-2');?></p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="item-post">
                                    <div class="content-box">
                                        <?php $id_image = get_field('university-image-3');
                                        $image = wp_get_attachment_image_src($id_image, 'about');
                                        ?>
                                        <img src="<?php echo $image[0]; ?>" alt="image">
                                    </div>
                                    <div class="title-box">
                                        <h4 style="color: black;"><?php the_field('university-title-3');?></h4>
                                        <p style="color: black;"><?php the_field('university-address-3');?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!--/box-university -->

                    <div class="button-university">
                        <a class="flat-button color-v1" href="#3" data-delay="0" style="color: black;">VIEW COURSES <i class="fa fa-angle-right"></i></a>
                        <p style="color: black;">OR</p>
                        <a class="flat-button color-v2" href="#3" data-delay="0">CAMPUS TOUR <i class="fa fa-angle-right"></i></a>
                    </div><!--/button-university -->
                </div><!--/flat-university -->
            </div><!--/container -->        
        </div><!--/page-title -->

        <section class="flat-row">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="flat-events">
                            <div class="grid-item color-full">
                                <div class="event-item">
                                    <div class="grid-item-content">
                                        <h1 class="title"><?php the_field('event-title');?></h1>
                                        <p><?php the_field('event-content');?></p>
                                        <a class="flat-button" href="#"><?php the_field('event-link');?><i class="fa fa-angle-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <?php 
                                            $args = array(
                                            'post_type' => 'event',
                                            'posts_per_page' => 7,
                                            'orderby' => 'title',
                                            'order' => 'ASC'
                                            );
                                            $sliders2 = new WP_Query($args);
                                            while($sliders2->have_posts()) : $sliders2-> the_post();

                                            ?>

                            <div class="grid-item">
                                <div class="grid-item-inner">
                                    <div class="event-item">
                                        <div class="event-thumbnail">
                                            <a href="#"><img src="<?php echo the_post_thumbnail_url();?>" alt="image">
                                            </a>
                                        </div><!-- /event-thumbnail -->

                                        <div class="date-block">
                                            <div class="month"><?php the_field('event-date');?></div>
                                            
                                        </div><!-- /date-block -->

                                        <div class="event-overlay">
                                            <div class="cs-post-header">
                                                <div class="cs-category-links">
                                                    <a class="overlay-top" href="#">
                                                        <h4><?php the_title();?></h4>
                                                        <span class="price yellow"><?php the_field('event-price');?></span>
                                                    </a>

                                                    <div class="overlay-footer">
                                                        <div><?php the_field('event-time');?></div>
                                                        <div><?php the_field('event-address');?></div>
                                                    </div>
                                                </div>                                
                                            </div> 
                                        </div><!-- /event-overlay -->
                                    </div>
                                </div>
                            </div>
                            <?php endwhile; wp_reset_postdata();?>

                            
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="page-title parallax parallax2">
            <div class="container">
                <div class="flat-university">
                    <div class="post">
                        <h1 class="title" style="color: black;"><?php the_field('who-title');?></h1>
                    </div><!--/post -->

                    <div class="button-university">
                        <a class="flat-button color-v2" href="#3" data-delay="0"><?php the_field('who-link-title');?></a>
                    </div><!--/button-university -->
                </div><!--/flat-university -->
            </div><!--/container -->        
        </div><!--/page-title -->

        <section class="flat-row padding-small">
            <div class="container">
                <div class="flat-choose-us">
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="flat-accordion">
                                <div class="name-toggle">
                                    <h2 class="title"><?php the_field('why-choose-title');?></h2>
                                </div>
                                <div class="flat-toggle">
                                    <div class="toggle-title active"><?php the_field('why-title-1');?></div>
                                    <div class="toggle-content">
                                        <p><?php the_field('why-content-1');?></p>                                
                                    </div>
                                </div><!-- /toggle -->
                                <div class="flat-toggle">
                                    <div class="toggle-title"><?php the_field('why-title-2');?></div>
                                    <div class="toggle-content">
                                        <div class="info">                                    
                                            <p class="desc-info"><?php the_field('why-content-2');?></p>
                                        </div>
                                    </div>
                                </div><!-- /.toggle -->
                                <div class="flat-toggle">
                                    <div class="toggle-title"><?php the_field('why-title-3');?></div>
                                    <div class="toggle-content">
                                        <div class="info">                                    
                                            <p class="desc-info"><?php the_field('why-content-3');?></p>
                                        </div>
                                    </div>
                                </div><!-- /.toggle -->
                                <div class="flat-toggle">
                                    <div class="toggle-title"><?php the_field('why-title-4');?></div>
                                    <div class="toggle-content">
                                        <div class="info">                                    
                                            <p class="desc-info"><?php the_field('why-content-4');?></p>
                                        </div>
                                    </div>
                                </div><!-- /.toggle -->

                                <div class="flat-toggle">
                                    <div class="toggle-title"><?php the_field('why-title-5');?></div>
                                    <div class="toggle-content">
                                        <div class="info">                                    
                                            <p class="desc-info"><?php the_field('why-content-5');?></p>
                                        </div>
                                    </div>
                                </div><!-- /.toggle -->

                                <div class="flat-toggle">
                                    <div class="toggle-title"><?php the_field('why-title-6');?></div>
                                    <div class="toggle-content">
                                        <div class="info">                                    
                                            <p class="desc-info"><?php the_field('why-content-6');?></p>
                                        </div>
                                    </div>
                                </div><!-- /.toggle -->
                            </div><!-- /.accordion -->
                        </div><!--/col-md-6 col-sm-6 -->

                        <div class="col-md-6 col-sm-6">
                            <div class="flat-blog">
                                <div class="section-header">
                                    <div class="name-blog">
                                        <h2 class="title">Blog</h2>
                                        <a class="flat-button button-right" href="#2">VISIT BLOG <i class="fa fa-angle-right"></i></a>
                                    </div>
                                </div>    
                                
                                <div class="section-body">
                                    <div class="row">
                                        <?php 
                                            $args = array(
                                            'post_type' => 'sliders',
                                            'posts_per_page' => 2,
                                            'orderby' => 'title',
                                            'order' => 'ASC'
                                            );
                                            $sliders = new WP_Query($args);
                                            while($sliders->have_posts()) : $sliders-> the_post();

                                            ?>

                                        <div class="col-md-12 shortcode-blog-item">
                                            <div class="content-pad">
                                                <div class="post-item row">
                                                    <div class="col-md-6 col-sm-12">
                                                        <div class="content-pad">
                                                            <div class="item-thumbnail">
                                                                <a href="#">
                                                                    <img src="<?php echo the_post_thumbnail_url();?>" alt="image">
                                                                    <span class="thumbnail-overlay"><?php echo get_the_date('j');?><?php echo get_the_date('M');?> <?php echo get_the_date('Y');?></span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-sm-12">
                                                        <div class="content-pad">
                                                            <div class="item-content">
                                                                <h3 class="item-title">
                                                                    <a href="#" title="Your Career Starts Here" class="main-color-1-hover"><?php the_title();?></a>
                                                                </h3>
                                                                <div class="shortcode-blog-excerpt"><?php the_content();?></div>
                                                                <div class="item-meta">
                                                                <a class="flat-button" href="#" title="Your Career Starts Here">DETAILS <i class="fa fa-angle-right"></i></a>
                                                                <a href="#" class="main-color-1-hover" title="View comments">0 COMMENTS</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><!--/post-item-->
                                            </div>
                                        </div><!--/shortcode-blog-item-->
                                        <?php endwhile; wp_reset_postdata();?>

                                        
                                    </div><!--/row-->
                                </div>
                            </div>
                        </div><!--/col-md-6 col-sm-6 -->
                    </div>
                </div>    
            </div>
        </section>

        <section class="flat-row full-color">
            <div class="container">                
                <div class="row">
                    <div class="col-md-12">
                        <div class="flat-reviews">
                            <div class="flat-causes">
                                <div class="featured-causes" data-item="3" data-nav="false" 
                                    data-dots="false" data-auto="false">
                                     <?php 
                                            $args = array(
                                            'post_type' => 'testimonial',
                                            'posts_per_page' => 1,
                                            'orderby' => 'title',
                                            'order' => 'ASC'
                                            );
                                            $sliders2 = new WP_Query($args);
                                            while($sliders2->have_posts()) : $sliders2-> the_post();

                                            ?>

                                    <div class="item">
                                        <div class="text">
                                            <p><?php the_content();?></p>
                                        </div>

                                        <div class="title-testimonial">
                                            <div class="thumb-title">
                                                <img src="<?php echo the_post_thumbnail_url();?>" alt="image">
                                            </div>
                                            <div class="post-title">
                                                <h6 class="title-post"><?php the_title();?></h6>
                                                <span><?php the_field('position');?></span>
                                            </div>
                                        </div>
                                    </div>

                                    <?php endwhile; wp_reset_postdata();?>
                                </div>
                            </div>
                        </div>     
                    </div>
                </div>  
            </div>
        </section><!-- /flat-row -->

        <section class="flat-row no-padding-bottom">
            <div class="container-fluid">
                <div class="new-bottom">
                    <div class="row">
                        <div class="news-letter">                       
                            <h1 class="title"><?php the_field('we-believe-title');?></h1>
                            <h4><?php the_field('we-believe-subtitle');?></h4>
                        </div>
                        <div class="img-news">
                            <?php 
                            $id_image = get_field('we-believe-img');
                            $image = wp_get_attachment_image_src($id_image, 'we-believe-img');
                            ?>
                            <img src="<?php echo $image[0];?>" alt="image">
                        </div>
                    </div>
                </div>    
            </div>
        </section>


<?php get_footer();?>
        
      

      