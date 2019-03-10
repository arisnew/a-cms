<!-- ##### Breadcumb Area Start ##### -->
<div class="breadcumb-area bg-img" style="background-image: url(<?php echo base_url();?>asset/cms/academy/img/bg-img/breadcumb.jpg);">
    <div class="bradcumbContent">
        <h2><?php echo $article->article_title;?></h2>
    </div>
</div>
<!-- ##### Breadcumb Area End ##### -->

<!-- ##### Blog Area Start ##### -->
<div class="blog-area mt-50 section-padding-100">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-8">
                <div class="academy-blog-posts">
                    <div class="row">
                        <!-- Single Blog Start -->
                        <div class="col-12">
                            <div class="single-blog-post mb-50 wow fadeInUp" data-wow-delay="300ms">
                                <!-- Post Thumb -->
                                <div class="blog-post-thumb mb-50">
                                    <img src="<?php echo $this->config->item('asset_cms') . $article->article_img;?>" alt="<?php echo $article->article_title;?>">
                                </div>
                                <!-- Post Title -->
                                <a href="<?php echo site_url('article/' . $article->article_link);?>" class="post-title"><?php echo $article->article_title;?></a>
                                <!-- Post Meta -->
                                <div class="post-meta">
                                    <p>By <a href="#"><?php echo $article->created_by_name;?></a> | <a href="#"><?php echo $article->created_on;?></a> | <a href="#">0 comments</a></p>
                                </div>
                                <!-- Post Excerpt -->
                                <?php echo $article->article_content;?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <?php
            if ($SIDEBAR) {
                echo $SIDEBAR;
            }
            ?>
        </div>
    </div>
</div>
<!-- ##### Blog Area End ##### -->