<?php get_header();
/*Template Name: Pages page*/?>


<div class="page-title full-color">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">                    
                        <div class="page-title-heading">
                            <h2 class="title"><?php the_field('page-title');?></h2>
                        </div>
                        <div class="breadcrumbs">
                            <ul>
                                <li class="home"><a href="<?php echo site_url('/');?>">Home </a></li>
                                <li>\ </li>
                            </ul>                   
                        </div>                  
                    </div><!-- /.col-md-12 -->  
                </div><!-- /.row -->  
            </div><!-- /.container -->                      
        </div><!-- /page-title -->
        
        <section class="flat-row padding-big">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="flat-blog">
                            <div class="section-body">
                                <div class="row">
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
                                    <div class="col-md-12 shortcode-blog-item">
                                        <div class="content-pad">
                                            <div class="post-item row">
                                                <div class="col-md-6 col-sm-12">
                                                    <div class="content-pad">
                                                        <div class="item-thumbnail">
                                                            <a href="#">
                                                                <img src="<?php echo the_post_thumbnail_url();?>" alt="image">
                                                                <span class="thumbnail-overlay"><?php echo get_the_date('M');?> <?php echo get_the_date('j');?> <?php echo get_the_date('Y');?></span>
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
                    </div>

                    <div class="col-md-6">
                        <div class="flat-blog">
                            <div class="section-body">
                                <div class="row">
                                	<?php 
                                            $args = array(
                                            'post_type' => 'course',
                                            'posts_per_page' => 3,
                                            'orderby' => 'title',
                                            'order' => ''
                                            );
                                            $sliders2 = new WP_Query($args);
                                            while($sliders2->have_posts()) : $sliders2-> the_post();

                                            ?>
                                    <div class="col-md-12 shortcode-blog-item">
                                        <div class="content-pad">
                                            <div class="post-item row">
                                                <div class="col-md-6 col-sm-12">
                                                    <div class="content-pad">
                                                        <div class="item-thumbnail">
                                                            <a href="#">
                                                                <img src="<?php echo the_post_thumbnail_url();?>" alt="image">
                                                                <span class="thumbnail-overlay"><?php echo get_the_date('M');?> <?php echo get_the_date('j');?> <?php echo get_the_date('Y');?></span>
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
                    </div>
                </div>
            </div>
        </section>



<?php get_footer();?>