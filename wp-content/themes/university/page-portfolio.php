<?php get_header();
/*Template Name: Portfolio page*/
?>
<?php while (have_posts()) : the_post();?>
<div class="page-title full-color">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">                    
                        <div class="page-title-heading">
                            <h2 class="title">Project Listing</h2>
                        </div>
                        <div class="breadcrumbs">
                            <ul>
                                <li class="home"><a href="<?php echo site_url('/');?>">Home </a></li>
                                <li>\ Project</li>
                            </ul>                   
                        </div>                  
                    </div><!-- /.col-md-12 -->  
                </div><!-- /.row -->  
            </div><!-- /.container -->                      
        </div><!-- /page-title -->

        <section class="flat-row padding-small-v1">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="project-listing">
                            <ul class="filter-cat v1">
                                <li class="active"><a data-filter="*" href="#"  class="flat-button">All</a></li>
                                <li><a data-filter=".information" href="#" class="flat-button">Information Tech</a></li>
                                <li><a data-filter=".photography" href="#" class="flat-button">Photography</a></li>
                                <li><a data-filter=".research" href="#" class="flat-button">Research</a></li>
                                <li><a data-filter=".economics" href="#" class="flat-button">Economics</a></li>
                            </ul>

                            <div class="project-portfolio">
                            	 <?php 
                                            $args = array(
                                            'post_type' => 'portfolio',
                                            'posts_per_page' => 7,
                                            'orderby' => 'title',
                                            'order' => 'ASC'
                                            );
                                            $sliders2 = new WP_Query($args);
                                            while($sliders2->have_posts()) : $sliders2-> the_post();

                                            ?>
                                <div class="item research economics">
                                    <div class="project-item">
                                        <div class="item-thumbnail">
                                            <a href="#"><img src="<?php echo get_template_directory_uri();?>/assets/images/portfolio/1.jpg" alt="image"></a>
                                            <div class="thumbnail-hoverlay main-color-1-bg"></div>
                                            <div class="thumbnail-hoverlay-icon">
                                                <a href="#" class="colorbox-grid cboxElement"><i class="fa fa-search"></i></a>
                                                <a href="portfolio-single.html" title="University College"><i class="fa fa-link"></i></a>
                                            </div>
                                        </div><!-- /item-thumbnail -->

                                        <div class="project-item-content">
                                            <div class="project-item-title">
                                                <div class="project-item-title-inner">
                                                    <h4 class="item-title"><a href="portfolio-single.html"><?php the_title();?></a></h4>
                                                    <div class="project-item-tax small-text">
                                                        <a href="#" class="cat-link">Economics</a> , <a href="#" class="cat-link">Research</a> 
                                                    </div>
                                                </div><!-- /project-item-title-inner -->
                                            </div><!-- /project-item-title -->

                                            <div class="project-item-excerpt">
                                                <div class="exerpt-text"><?php the_content();?></div>
                                            </div><!-- /project-item-excerpt -->
                                        </div><!-- /project-item -->
                                    </div><!-- /project-item -->
                                </div><!-- /item -->
                                <?php endwhile; wp_reset_postdata();?>

                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

<?php endwhile;?>
<?php get_footer();?>