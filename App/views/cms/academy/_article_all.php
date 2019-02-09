<!-- ##### Breadcumb Area Start ##### -->
<div class="breadcumb-area bg-img" style="background-image: url(<?php echo base_url();?>asset/cms/img/bg-img/breadcumb.jpg);">
    <div class="bradcumbContent">
        <h2>All Articles</h2>
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
                        <?php
                        if($articles){
                            foreach ($articles as $row) {
                                ?>
                                <!-- Single Blog Start -->
                                <div class="col-12">
                                    <div class="single-blog-post mb-50 wow fadeInUp" data-wow-delay="300ms">
                                        <!-- Post Thumb -->
                                        <div class="blog-post-thumb mb-50">
                                            <img src="<?php echo base_url('asset/files/' . $row->article_img);?>" alt="<?php echo $row->article_title;?>">
                                        </div>
                                        <!-- Post Title -->
                                        <a href="#" class="post-title"><?php echo $row->article_title;?></a>
                                        <!-- Post Meta -->
                                        <div class="post-meta">
                                            <p>By <a href="#"><?php echo $row->created_by_name;?></a> | <a href="#"><?php echo $row->created_on;?></a> | <a href="#">0 comments</a></p>
                                        </div>
                                        <!-- Post Excerpt -->
                                        <p><?php echo cutStr($row->article_content, 250);?></p>
                                        <!-- Read More btn -->
                                        <a href="#" class="btn academy-btn btn-sm mt-15">Read More</a>
                                    </div>
                                </div>
                                <?php
                            }
                        }
                        ?>

                    </div>
                </div>
                <!-- Pagination Area Start -->
                <div class="academy-pagination-area wow fadeInUp" data-wow-delay="400ms">
                    <!-- <nav>
                        <ul class="pagination">
                            <li class="page-item active"><a class="page-link" href="#">01</a></li>
                            <li class="page-item"><a class="page-link" href="#">02</a></li>
                            <li class="page-item"><a class="page-link" href="#">03</a></li>
                        </ul>
                    </nav> -->
                    <!-- <div class="paging"> -->
                        <?php echo $this->pagination->create_links(); ?><br />
                        <span class="badge badge-info">Total : <?php echo $total_data;?> Data</span>
                    <!-- </div> -->
                </div>
            </div>

            <div class="col-12 col-md-4">
                <div class="academy-blog-sidebar">
                    <!-- Blog Post Widget -->
                    <div class="blog-post-search-widget mb-30">
                        <form action="#" method="post">
                            <input type="search" name="search" id="Search" placeholder="Search">
                            <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                        </form>
                    </div>

                    <!-- Blog Post Catagories -->
                    <div class="blog-post-categories mb-30">
                        <h5>Categories</h5>
                        <ul>
                            <li><a href="#">Courses</a></li>
                            <li><a href="#">Education</a></li>
                            <li><a href="#">Teachers</a></li>
                            <li><a href="#">Uncategorized</a></li>
                        </ul>
                    </div>

                    <!-- Latest Blog Posts Area -->
                    <div class="latest-blog-posts mb-30">
                        <h5>Latest Posts</h5>
                        <!-- Single Latest Blog Post -->
                        <div class="single-latest-blog-post d-flex mb-30">
                            <div class="latest-blog-post-thumb">
                                <img src="img/blog-img/lb-1.jpg" alt="">
                            </div>
                            <div class="latest-blog-post-content">
                                <a href="#" class="post-title">
                                    <h6>New Courses for you</h6>
                                </a>
                                <a href="#" class="post-date">March 18, 2018</a>
                            </div>
                        </div>
                        <!-- Single Latest Blog Post -->
                        <div class="single-latest-blog-post d-flex mb-30">
                            <div class="latest-blog-post-thumb">
                                <img src="img/blog-img/lb-2.jpg" alt="">
                            </div>
                            <div class="latest-blog-post-content">
                                <a href="#" class="post-title">
                                    <h6>A great way to start</h6>
                                </a>
                                <a href="#" class="post-date">March 18, 2018</a>
                            </div>
                        </div>
                        <!-- Single Latest Blog Post -->
                        <div class="single-latest-blog-post d-flex mb-30">
                            <div class="latest-blog-post-thumb">
                                <img src="img/blog-img/lb-3.jpg" alt="">
                            </div>
                            <div class="latest-blog-post-content">
                                <a href="#" class="post-title">
                                    <h6>New Courses for you</h6>
                                </a>
                                <a href="#" class="post-date">March 18, 2018</a>
                            </div>
                        </div>
                        <!-- Single Latest Blog Post -->
                        <div class="single-latest-blog-post d-flex">
                            <div class="latest-blog-post-thumb">
                                <img src="img/blog-img/lb-4.jpg" alt="">
                            </div>
                            <div class="latest-blog-post-content">
                                <a href="#" class="post-title">
                                    <h6>Start your training</h6>
                                </a>
                                <a href="#" class="post-date">March 18, 2018</a>
                            </div>
                        </div>
                    </div>

                    <!-- Add Widget -->
                    <div class="add-widget">
                        <a href="#"><img src="img/blog-img/add.png" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ##### Blog Area End ##### -->