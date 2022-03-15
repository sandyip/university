<?php get_header();
/*Template Name: Course-grid page*/
?>
<?php while (have_posts()) : the_post();?>
<div class="page-title full-color">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">                    
                        <div class="page-title-heading">
                            <h2 class="title">Course Grid</h2>
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

        <section class="flat-row padding-v3">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="flat-events">
                            <div class="grid-item color-full">
                                <div class="event-item">
                                    <div class="grid-item-content">
                                        <h1 class="title"><?php the_field('course-grid-title');?></h1>
                                        <p><?php the_field('course-grid-content');?></p>
                                        <a class="flat-button" href="#"><?php the_field('course-grid-link');?><i class="fa fa-angle-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <?php 
                                            $args = array(
                                            'post_type' => 'course',
                                            'posts_per_page' => -1,
                                            'orderby' => 'time',
                                            'order' => 'ASC'
                                            );
                                            $sliders2 = new WP_Query($args);
                                            while($sliders2->have_posts()) : $sliders2-> the_post();

                                            ?>

                            <div class="grid-item">
                                <div class="grid-item-inner">
                                    <div class="event-item">
                                        <div class="event-thumbnail">
                                            <a href="#"><img src="<?php echo the_post_thumbnail_url();?>" style="width: 285px; height: 347px;"alt="image">
                                            </a>
                                        </div><!-- /event-thumbnail -->

                                        <div class="date-block">
                                            <div class="month"><?php echo get_the_date('M');?><br><?php echo get_the_date('j');?></div>
                                           
                                        </div><!-- /date-block -->

                                        <div class="event-overlay">
                                            <div class="cs-post-header">
                                                <div class="cs-category-links">
                                                    <a class="overlay-top" href="#">
                                                        <h4><?php the_title();?></h4>
                                                        <span class="price yellow"><?php the_field('course-price');?></span>
                                                    </a>

                                                    <div class="overlay-footer">
                                                        <div><?php the_content();?></div>
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



<?php endwhile;?>
<?php get_footer();?>