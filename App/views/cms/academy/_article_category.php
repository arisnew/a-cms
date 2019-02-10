<!-- ##### Breadcumb Area Start ##### -->
<div class="breadcumb-area bg-img" style="background-image: url(<?php echo base_url();?>asset/cms/academy/img/bg-img/breadcumb.jpg);">
    <div class="bradcumbContent">
        <h2>All Articles <?php echo ($category) ? $category->category_name : '';?></h2>
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
                                        <a href="<?php echo site_url('article/' . $row->article_link);?>" class="post-title"><?php echo $row->article_title;?></a>
                                        <!-- Post Meta -->
                                        <div class="post-meta">
                                            <p>By <a href="#"><?php echo $row->created_by_name;?></a> | <a href="#"><?php echo $row->created_on;?></a> | <a href="#">0 comments</a></p>
                                        </div>
                                        <!-- Post Excerpt -->
                                        <p><?php echo cutStr($row->article_content, 250);?></p>
                                        <!-- Read More btn -->
                                        <a href="<?php echo site_url('article/' . $row->article_link);?>" class="btn academy-btn btn-sm mt-15">Read More</a>
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

            <?php
            if ($SIDEBAR) {
                echo $SIDEBAR;
            }
            ?>
        </div>
    </div>
</div>
<!-- ##### Blog Area End ##### -->