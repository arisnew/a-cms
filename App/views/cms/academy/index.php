<?php
/* Homepage Template*/
/* the template variable */
$template = $this->model->getRecord(array('table' => 'template_academy', 'where' => array('id' => 1)), 9);
/* Slide */
if ($CMS->is_slide == 1) {
    $slides = $this->model->getList(array('table' => 'cms_slide', 'where' => array('position' => 'top', 'is_active' => 1, 'site_id' => 11)), 9);    //11 -> CMS, 9 -> db cms
    ?>
    <section class="hero-area">
        <div class="hero-slides owl-carousel">
            <?php
            if ($slides) {
                foreach ($slides as $slide) {
                    ?>
                    <!-- Single Hero Slide -->
                    <div class="single-hero-slide bg-img" style="background-image: url(<?php echo $this->config->item('asset_cms') . $slide->img;?>);">
                        <div class="container h-100">
                            <div class="row h-100 align-items-center">
                                <div class="col-12">
                                    <div class="hero-slides-content">
                                        <h4 data-animation="fadeInUp" data-delay="100ms"><?php echo $slide->caption;?></h4>
                                        <h2 data-animation="fadeInUp" data-delay="400ms"><?php echo $slide->description;?></h2>
                                        <a href="<?php echo $slide->link;?>" class="btn academy-btn" data-animation="fadeInUp" data-delay="700ms">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                }
            }
            ?>
        </div>
    </section>
    <?php
}

/* Features */
if ($template == true && $template->is_features == 1) {
?>
    <!-- ##### Top Feature Area Start ##### -->
    <div class="top-features-area wow fadeInUp" data-wow-delay="300ms">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="features-content">
                        <div class="row no-gutters">
                            <!-- Single Top Features -->
                            <div class="col-12 col-md-4">
                                <div class="single-top-features d-flex align-items-center justify-content-center">
                                    <?php echo $template->features_icon_1;?>
                                    <h5><?php echo $template->features_title_1;?></h5>
                                </div>
                            </div>
                            <!-- Single Top Features -->
                            <div class="col-12 col-md-4">
                                <div class="single-top-features d-flex align-items-center justify-content-center">
                                    <?php echo $template->features_icon_2;?>
                                    <h5><?php echo $template->features_title_2;?></h5>
                                </div>
                            </div>
                            <!-- Single Top Features -->
                            <div class="col-12 col-md-4">
                                <div class="single-top-features d-flex align-items-center justify-content-center">
                                    <?php echo $template->features_icon_3;?>
                                    <h5><?php echo $template->features_title_3;?></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
}
/* Course */
if ($template == true && $template->is_course == 1) {
    $str_col = ($template->course_title_3 == '') ? ' col-lg-6' : ' col-lg-4';
?>
    <!-- ##### Course Area Start ##### -->
    <div class="academy-courses-area section-padding-100-0">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-6 <?php echo  $str_col;?>">
                    <div class="single-course-area d-flex align-items-center mb-100 wow fadeInUp" data-wow-delay="300ms">
                        <div class="course-icon">
                            <?php echo $template->course_icon_1;?>
                        </div>
                        <div class="course-content">
                            <h4><?php echo $template->course_title_1;?></h4>
                            <p><?php echo $template->course_caption_1;?></p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 <?php echo  $str_col;?>">
                    <div class="single-course-area d-flex align-items-center mb-100 wow fadeInUp" data-wow-delay="400ms">
                        <div class="course-icon">
                            <?php echo $template->course_icon_2;?>
                        </div>
                        <div class="course-content">
                            <h4><?php echo $template->course_title_2;?></h4>
                            <p><?php echo $template->course_caption_2;?></p>
                        </div>
                    </div>
                </div>
                <?php
                if($template->course_title_3 != '') {
                    ?>
                    <div class="col-12 col-sm-6 <?php echo  $str_col;?>">
                        <div class="single-course-area d-flex align-items-center mb-100 wow fadeInUp" data-wow-delay="500ms">
                            <div class="course-icon">
                                <?php echo $template->course_icon_3;?>
                            </div>
                            <div class="course-content">
                                <h4><?php echo $template->course_title_3;?></h4>
                                <p><?php echo $template->course_caption_3;?></p>
                            </div>
                        </div>
                    </div>
                    <?php
                }
                ?>
            </div>
        </div>
    </div>
<?php
}
/* Testimonial */
if ($template == true && $template->is_testimonial == 1) {
    $testimonials = $this->model->getList(array('table' => 'cms_testimonial', 'where' => array('site_id' => 11, 'is_publish' => 1)), 9);
    ?>
    <div class="testimonials-area section-padding-100 bg-img bg-overlay" style="background-image: url(<?php echo $TEMPLATE_DIR;?>/img/bg-img/bg-2.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center mx-auto white wow fadeInUp" data-wow-delay="300ms">
                        <span>our testimonials</span>
                        <h3>See what our satisfied customers are saying about us</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php
                if ($testimonials) {
                    foreach ($testimonials as $row) {
                        ?>
                        <!-- Single Testimonials Area -->
                        <div class="col-12 col-md-6">
                            <div class="single-testimonial-area mb-100 d-flex wow fadeInUp" data-wow-delay="400ms">
                                <div class="testimonial-thumb">
                                    <img src="<?php echo $this->config->item('asset_cms') . $row->img;?>" alt="">
                                </div>
                                <div class="testimonial-content">
                                    <h5><?php echo $row->title;?></h5>
                                    <p>
                                    <?php echo $row->content;?>
                                    </p>
                                    <h6><span><?php echo $row->name;?>, </span> <?php echo $row->position;?> <?php echo $row->company;?></h6>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                }
            ?>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="load-more-btn text-center wow fadeInUp" data-wow-delay="800ms">
                        <a href="<?php echo base_url('testimonial');?>" class="btn academy-btn">See More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
} /* end testimonial */

/* Recent Article */
if ($template == true && $template->is_recent_post == 1) {
    //load model cms
    $this->load->model('cmsmodel');
    //newest articles
    $articles = $this->cmsmodel->getRecentPost(4);
?>
    <div class="top-popular-courses-area section-padding-100-70">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center mx-auto wow fadeInUp" data-wow-delay="300ms">
                        <span>Articles</span>
                        <h3>Recent Post</h3>
                    </div>
                </div>
            </div>
            <div class="row">
               <?php
                if ($articles) {
                    foreach ($articles as $row ) {
                        ?>
                        <!-- Single Top Popular Course -->
                        <div class="col-12 col-lg-6">
                            <div class="single-top-popular-course d-flex align-items-center flex-wrap mb-30 wow fadeInUp" data-wow-delay="400ms">
                                <div class="popular-course-content">
                                    <h5><?php echo $row->article_title;?></h5>
                                    <span>By <?php echo $row->created_by_name;?>   |  <?php echo $row->created_on;?></span>
                                    <!-- <div class="course-ratings">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                    </div> -->
                                    <p>
                                        <?php echo cutStr(strip_tags($row->article_content), 150);?>
                                    </p>
                                    <a href="<?php echo base_url('article/' . $row->article_link);?>" class="btn academy-btn btn-sm">See More</a>
                                </div>
                                <div class="popular-course-thumb bg-img" style="background-image: url(<?php echo $this->config->item('asset_cms') . $row->article_img;?>);"></div>
                            </div>
                        </div>
                        <?php
                    }
                }
               ?>
            </div>
        </div>
    </div>
<?php
}
/* CTA */
if ($template == true && $template->is_cta == 1) {
    ?>
    <!-- ##### CTA Area Start ##### -->
    <div class="call-to-action-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="cta-content d-flex align-items-center justify-content-between flex-wrap">
                        <h3><?php echo $template->cta_caption;?></h3>
                        <a href="<?php echo $template->cta_link;?>" class="btn academy-btn">See More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
}
?>