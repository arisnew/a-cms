<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title><?php echo getSetByVar('WEB_NAME')?> - <?php echo getSetByVar('TAG_WEB')?></title>

    <!-- Favicon  -->
    <link rel="shortcut icon" href="<?php echo getSetByVar('ICON_LOGO')?>" type="image/x-icon">

    <!-- Style CSS -->
    <link rel="stylesheet" href="<?php echo base_url('asset/cms/')?>style.css">

</head>

<body>
    <!-- Preloader Start -->
    <div id="preloader">
        <div class="preload-content">
            <div id="world-load"></div>
        </div>
    </div>
    <!-- Preloader End -->

    <!-- ***** Header Area Start ***** -->
    <header class="header-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="navbar navbar-expand-lg">
                        <!-- Logo -->
                        <a class="navbar-brand" href="<?php echo base_url('cms') ?>"><img style="max-height:50px" src="<?php echo getSetByVar('WEB_LOGO')?>" alt="Logo"></a>
                        <!-- Navbar Toggler -->
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#worldNav" aria-controls="worldNav" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                        <!-- Navbar -->
                        <div class="collapse navbar-collapse" id="worldNav">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item active">
                                    
                                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages</a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="index.html">Home</a>
                                        <a class="dropdown-item" href="catagory.html">Catagory</a>
                                        <a class="dropdown-item" href="single-blog.html">Single Blog</a>
                                        <a class="dropdown-item" href="regular-page.html">Regular Page</a>
                                        <a class="dropdown-item" href="contact.html">Contact</a>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Gadgets</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Lifestyle</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Video</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Contact</a>
                                </li>
                            </ul>
                            <!-- Search Form  -->
                            <div id="search-wrapper">
                                <form action="#">
                                    <input type="text" id="search" placeholder="Search something...">
                                    <div id="close-icon"></div>
                                    <input class="d-none" type="submit" value="">
                                </form>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- ********** Hero Area Start ********** -->
    <div class="hero-area height-600 bg-img background-overlay" style="background-image: url(<?php echo base_url('asset/files/article/'.$article->article_img); ?>);">
        <div class="container h-100">
            <div class="row h-100 align-items-center justify-content-center">
                <div class="col-12 col-md-8 col-lg-6">
                    <div class="single-blog-title text-center">
                        <!-- Catagory -->
                        <?php
                        if($categories){
                            echo '<div class="post-cta">';
                            foreach($categories as $kategori){
                                echo '<a href="#">'.$kategori->category_name.'</a>';
                            }
                            echo '</div>';
                        }
                        ?>
                        <h3><?php echo $article->article_title; ?></h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ********** Hero Area End ********** -->
    


    <div class="main-content-wrapper section-padding-100">
        <div class="container">
            <div class="row justify-content-center">
                <!-- ============= Post Content Area ============= -->
                <div class="col-12 col-lg-8">
                    <div class="single-blog-content mb-100">
                        <!-- Post Meta -->
                        <div class="post-meta">
                            <p><a href="#" class="post-author"><?php echo $article->created_name; ?></a> on <a href="#" class="post-date"><?php echo $article->created_date; ?></a></p>
                        </div>
                        <!-- Post Content -->
                        <div class="post-content">
                            <?php echo $article->article_content; ?>
                            <!-- Post Tags -->
                            
                <!-- Go to www.addthis.com/dashboard to customize your tools -->
                <div class="addthis_inline_share_toolbox_zjvv"></div>
            
                            <ul class="post-tags">
                                <li><a href="#">Manual</a></li>
                                <li><a href="#">Liberty</a></li>
                                <li><a href="#">Recommendations</a></li>
                                <li><a href="#">Interpritation</a></li>
                            </ul>
                            <!-- Post Meta -->
                        </div>
                    </div>
                </div>

                <!-- ========== Sidebar Area ========== -->
                <div class="col-12 col-md-8 col-lg-4">
                    <div class="post-sidebar-area mb-100">
                        <!-- Widget Area -->
                        <div class="sidebar-widget-area">
                            <h5 class="title">About <?php echo getSetByVar('WEB_NAME')?></h5>
                            <div class="widget-content">
                                <p><?php echo getSetByVar('ABOUT_WEB')?></p>
                            </div>
                        </div>
                        <!-- Widget Area -->
                        <div class="sidebar-widget-area">
                            <h5 class="title">Top Stories</h5>
                            <div class="widget-content">
                                <!-- Single Blog Post -->
                                <div class="single-blog-post post-style-2 d-flex align-items-center widget-post">
                                    <!-- Post Thumbnail -->
                                    <div class="post-thumbnail">
                                        <img src="img/blog-img/b11.jpg" alt="">
                                    </div>
                                    <!-- Post Content -->
                                    <div class="post-content">
                                        <a href="#" class="headline">
                                            <h5 class="mb-0">How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                                        </a>
                                    </div>
                                </div>
                                <!-- Single Blog Post -->
                                <div class="single-blog-post post-style-2 d-flex align-items-center widget-post">
                                    <!-- Post Thumbnail -->
                                    <div class="post-thumbnail">
                                        <img src="img/blog-img/b13.jpg" alt="">
                                    </div>
                                    <!-- Post Content -->
                                    <div class="post-content">
                                        <a href="#" class="headline">
                                            <h5 class="mb-0">How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                                        </a>
                                    </div>
                                </div>
                                <!-- Single Blog Post -->
                                <div class="single-blog-post post-style-2 d-flex align-items-center widget-post">
                                    <!-- Post Thumbnail -->
                                    <div class="post-thumbnail">
                                        <img src="img/blog-img/b14.jpg" alt="">
                                    </div>
                                    <!-- Post Content -->
                                    <div class="post-content">
                                        <a href="#" class="headline">
                                            <h5 class="mb-0">How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                                        </a>
                                    </div>
                                </div>
                                <!-- Single Blog Post -->
                                <div class="single-blog-post post-style-2 d-flex align-items-center widget-post">
                                    <!-- Post Thumbnail -->
                                    <div class="post-thumbnail">
                                        <img src="img/blog-img/b10.jpg" alt="">
                                    </div>
                                    <!-- Post Content -->
                                    <div class="post-content">
                                        <a href="#" class="headline">
                                            <h5 class="mb-0">How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                                        </a>
                                    </div>
                                </div>
                                <!-- Single Blog Post -->
                                <div class="single-blog-post post-style-2 d-flex align-items-center widget-post">
                                    <!-- Post Thumbnail -->
                                    <div class="post-thumbnail">
                                        <img src="img/blog-img/b12.jpg" alt="">
                                    </div>
                                    <!-- Post Content -->
                                    <div class="post-content">
                                        <a href="#" class="headline">
                                            <h5 class="mb-0">How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Widget Area -->
                        <div class="sidebar-widget-area">
                            <h5 class="title">Stay Connected</h5>
                            <div class="widget-content">
                                <div class="social-area d-flex justify-content-between">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-pinterest"></i></a>
                                    <a href="#"><i class="fa fa-vimeo"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                    <a href="#"><i class="fa fa-google"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- Widget Area -->
                        <div class="sidebar-widget-area">
                            <h5 class="title">Today’s Pick</h5>
                            <div class="widget-content">
                                <!-- Single Blog Post -->
                                <div class="single-blog-post todays-pick">
                                    <!-- Post Thumbnail -->
                                    <div class="post-thumbnail">
                                        <img src="img/blog-img/b22.jpg" alt="">
                                    </div>
                                    <!-- Post Content -->
                                    <div class="post-content px-0 pb-0">
                                        <a href="#" class="headline">
                                            <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in Physics?</h5>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ============== Related Post ============== -->
            <div class="row">
                <div class="col-12 col-md-6 col-lg-4">
                    <!-- Single Blog Post -->
                    <div class="single-blog-post">
                        <!-- Post Thumbnail -->
                        <div class="post-thumbnail">
                            <img src="img/blog-img/b1.jpg" alt="">
                            <!-- Catagory -->
                            <div class="post-cta"><a href="#">travel</a></div>
                        </div>
                        <!-- Post Content -->
                        <div class="post-content">
                            <a href="#" class="headline">
                                <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in Physics?</h5>
                            </a>
                            <p>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in...</p>
                            <!-- Post Meta -->
                            <div class="post-meta">
                                <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4">
                    <!-- Single Blog Post -->
                    <div class="single-blog-post">
                        <!-- Post Thumbnail -->
                        <div class="post-thumbnail">
                            <img src="img/blog-img/b2.jpg" alt="">
                            <!-- Catagory -->
                            <div class="post-cta"><a href="#">travel</a></div>
                        </div>
                        <!-- Post Content -->
                        <div class="post-content">
                            <a href="#" class="headline">
                                <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in Physics?</h5>
                            </a>
                            <p>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in...</p>
                            <!-- Post Meta -->
                            <div class="post-meta">
                                <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4">
                    <!-- Single Blog Post -->
                    <div class="single-blog-post">
                        <!-- Post Thumbnail -->
                        <div class="post-thumbnail">
                            <img src="img/blog-img/b7.jpg" alt="">
                            <!-- Catagory -->
                            <div class="post-cta"><a href="#">travel</a></div>
                            <!-- Video Button -->
                            <a href="https://www.youtube.com/watch?v=IhnqEwFSJRg" class="video-btn"><i class="fa fa-play"></i></a>
                        </div>
                        <!-- Post Content -->
                        <div class="post-content">
                            <a href="#" class="headline">
                                <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in Physics?</h5>
                            </a>
                            <p>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in...</p>
                            <!-- Post Meta -->
                            <div class="post-meta">
                                <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            
            <!-- COMMENTS -->
            <div class="row">
                <div class="col-12 col-lg-8" id="box_comment">
                    <div class="post-a-comment-area mt-70">
                        <h5>Comment</h5>
                        <!-- Contact Form -->
                        <p id="reply_note"></p>
                        <form id="form_comment" method="post">
                            <div class="row">
                                <div class="col-12 col-md-4">
                                    <div class="group">
                                        <input type="text" name="name" id="name" required>
                                        <span class="highlight"></span>
                                        <span class="bar"></span>
                                        <label>Enter your name</label>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4">
                                    <div class="group">
                                        <input type="email" name="email" id="email" required>
                                        <span class="highlight"></span>
                                        <span class="bar"></span>
                                        <label>Enter your email</label>
                                    </div>
                                </div>
                                 <div class="col-12 col-md-4">
                                    <div class="group">
                                        <input type="text" name="website" id="website" required>
                                        <span class="highlight"></span>
                                        <span class="bar"></span>
                                        <label>Enter your website</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="group">
                                        <textarea name="content" id="content" required></textarea>
                                        <span class="highlight"></span>
                                        <span class="bar"></span>
                                        <label>Enter your comment</label>
                                    </div>
                                </div>
                                <input type="hidden" name="site" id="site" value="11">
                                <input type="hidden" name="publish" id="publis" value="1">
                                <input type="hidden" name="article_id" id="article_id" value="<?php echo $article->article_id ?>">
                                <input type="hidden" name="parent_comment_id" id="parent_comment_id" value=""> 
                                <div class="col-12">
                                    <button class="btn world-btn" onclick="saving(); return false;">Post comment</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <?php
                $comment = $this->model->getList(array('table' => 'v_cms_comment', 'where' => array('publish'=> 1, 'article_id' => $article->article_id)));
                if($comment){
                    foreach ($comment as $comments){
                        echo 
                '<div class="col-12 col-lg-8">
                    <!-- Comment Area Start -->
                    <div class="comment_area clearfix mt-70">
                        <ol>
                            <!-- Single Comment Area -->
                            <li class="single_comment_area">
                                <!-- Comment Content -->
                                <div class="comment-content">
                                    <!-- Comment Meta -->
                                    <div class="comment-meta d-flex align-items-center justify-content-between">
                                      <p><a href="#" class="post-author">'.$comments->name.'</a> on <a href="#" class="post-date">'.$comments->created_on.'</a></p>
                                         <a href="#box_comment" onclick="setParentComment('.$comments->comment_id.',\''.panjangStr($comments->content,100).'\')" class="comment-reply btn world-btn">Reply</a>
                                    </div>
                                    <p>'.$comments->content.'</p>
                                </div>
                            </li> 
                        </ol>
                    </div>
                </div>';
                    }
                }
                ?>
            </div>
        </div>
    </div>

    <!-- ***** Footer Area Start ***** -->
    <footer class="footer-area">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-4">
                    <div class="footer-single-widget">
                        <a href="#"><img src="<?php echo base_url('asset/cms/')?>img/core-img/logo.png" alt=""></a>
                        <div class="copywrite-text mt-30">
                            <p>Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://aabc-software.com" target="_blank">AABC|SOFTWARE</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="footer-single-widget">
                        <ul class="footer-menu d-flex justify-content-between">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Fashion</a></li>
                            <li><a href="#">Lifestyle</a></li>
                            <li><a href="#">Contact</a></li>
                            <li><a href="#">Gadgets</a></li>
                            <li><a href="#">Video</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="footer-single-widget">
                        <h5>Subscribe</h5>
                        <form action="#" method="post">
                            <input type="email" name="email" id="email" placeholder="Enter your mail">
                            <button type="button"><i class="fa fa-arrow-right"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ***** Footer Area End ***** -->

    <!-- jQuery (Necessary for All JavaScript Plugins) -->
    <script src="<?php echo base_url('asset/cms/')?>js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="<?php echo base_url('asset/cms/')?>js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="<?php echo base_url('asset/cms/')?>js/bootstrap.min.js"></script>
    <!-- Plugins js -->
    <script src="<?php echo base_url('asset/cms/')?>js/plugins.js"></script>
    <!-- Active js -->
    <script src="<?php echo base_url('asset/cms/')?>js/active.js"></script>
    <!-- Comment -->
    <script type="text/javascript"> 
    function saving() {
    //loading(idLoading,true);
    //loadingPage();
    setTimeout(function() {
        $.ajax({
            url: '<?php echo base_url('cms/comment')?>',
            data: $("#form_comment").serialize(),
            dataType: 'json',
            type: 'POST',
            cache: false,
            success: function(json) {
                if (json.code == 1) {
                    //genericAlert('Simpan data berhasil', 'success','Sukses');
                    alert('Operation success');
                    window.location.reload(true);
                } else {
                    alert('Operation failed');
                }
            },
            error: function () {
                alert('Operation error');
            }
        });
    }, 10);
}
        function setParentComment(id,note){
            $('#parent_comment_id').val(id);
            $('#reply_note').text("Reply For : "+note);
        }
    </script>
   <!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5b72a85e415fe340"></script>
</body>

</html>