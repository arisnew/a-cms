<div class="col-12 col-md-4">
    <div class="academy-blog-sidebar">
        <!-- Blog Post Widget -->
        <div class="blog-post-search-widget mb-30">
            <form action="<?php echo site_url('search');?>" method="post">
                <input type="search" name="search" id="search" placeholder="Search">
                <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
            </form>
        </div>

        <!-- Blog Post Catagories -->
        <div class="blog-post-categories mb-30">
            <h5>Categories</h5>
            <ul>
                <?php
                if ($CATEGORIES) {
                    foreach ($CATEGORIES as $cat ) {
                        echo '<li><a href="'.site_url('articles/' . $cat->link).'">'.$cat->category_name.'</a></li>';
                    }
                }
                ?>
            </ul>
        </div>

        <!-- Latest Blog Posts Area -->
        <div class="latest-blog-posts mb-30">
            <h5>Latest Posts</h5>
            <?php
            if ($RECENT_POSTS) {
                foreach ($RECENT_POSTS as $row ) {
                    ?>
                    <div class="single-latest-blog-post d-flex mb-30">
                        <div class="latest-blog-post-thumb">
                            <img src="<?php echo base_url('asset/files/thumb/' . $row->article_img);?>" alt="<?php echo $row->article_title;?>">
                        </div>
                        <div class="latest-blog-post-content">
                            <a href="<?php echo site_url('article/' . $row->article_link);?>" class="post-title">
                                <h6><?php echo $row->article_title;?></h6>
                            </a>
                            <a href="<?php echo site_url('article/' . $row->article_link);?>" class="post-date"><?php echo $row->created_on;?></a>
                        </div>
                    </div>
                    <?php
                }
            }
            ?>
        </div>

        <!-- Add Widget -->
        <div class="add-widget">
            <!-- <a href="#"><img src="img/blog-img/add.png" alt=""></a> -->
        </div>
    </div>
</div>