<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="<?php echo $ICON;?>">

    <title><?php echo $TITLE;?></title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo $TEMPLATE_DIR;?>/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
    <link href="<?php echo $TEMPLATE_DIR;?>/css/blog.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <header class="blog-header py-3">
            <div class="row flex-nowrap justify-content-between align-items-center">
                <div class="col-8 text-left">
                    <a class="blog-header-logo text-dark" href="<?php echo $BASE_URL;?>"><?php echo $WEB_NAME;?></a>
                </div>
                <div class="col-4 d-flex justify-content-end align-items-center">
                    <a class="text-muted" href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mx-3"><circle cx="10.5" cy="10.5" r="7.5"></circle><line x1="21" y1="21" x2="15.8" y2="15.8"></line></svg>
                    </a>
                    <a class="btn btn-sm btn-outline-secondary" href="#">Sign up</a>
                </div>
            </div>
        </header>

        <?php echo $MENU_TOP;?>

        <?php echo $SLIDE;?>

        <?php
        if ($JUMBOTRON) {
            foreach ($JUMBOTRON as $j) {
            ?>
                <div class="jumbotron p-3 p-md-5 text-white rounded bg-dark">
                    <div class="col-md-6 px-0">
                        <h1 class="display-4 font-italic">
                        <?php echo $j->article_title;?>
                        </h1>
                        <p class="lead my-3">
                            <?php echo cutStr($j->article_content, 200);?>
                        </p>
                        <p class="lead mb-0">
                            <a href="#<?php echo $j->article_link;?>" class="text-white font-weight-bold">Continue reading...</a>
                        </p>
                    </div>
                </div>
            <?php    
            }
        }
        ?>
                
        <?php
        if ($FEATURED_POST) {
            echo '<div class="row mb-2">';
            foreach ($FEATURED_POST as $p) {
            ?>
                <div class="col-md-6">
                    <div class="card flex-md-row mb-4 shadow-sm h-md-250">
                        <div class="card-body d-flex flex-column align-items-start">
                            <strong class="d-inline-block mb-2 text-primary"><?php echo $p->article_title;?></strong>
                            <h3 class="mb-0">
                                <a class="text-dark" href="#"><?php echo $p->article_title;?></a>
                            </h3>
                            <div class="mb-1 text-muted"><?php echo $p->created_on;?></div>
                            <p class="card-text mb-auto">
                                <?php //echo cutStr($p->article_content, 20);?>
                            </p>
                            <a href="#<?php echo $p->article_link;?>">Continue reading</a>
                        </div>
                        <img class="card-img-right flex-auto d-none d-lg-block" src="<?php echo base_url('asset/files/article/thumb/'.$p->article_img);?>" alt="Card image cap">
                    </div>
                </div>
            <?php    
            }
            echo '</div>';
        }
        ?>
    </div>

    <main role="main" class="container">
        <div class="row">
            <?php
            if ($RECENT_POSTS) {
                ?>
                <div class="col-md-8 blog-main">
                    <h3 class="pb-3 mb-4 font-italic border-bottom">
                        Recent Post
                    </h3>
                    <?php
                    foreach ($RECENT_POSTS as $post) {
                    ?>
                        <div class="blog-post">
                            <h2 class="blog-post-title"><?php echo $post->article_title;?></h2>
                            <p class="blog-post-meta">
                                <?php echo $post->created_on;?> 
                                by <a href="#"><?php echo $post->created_by_name;?></a>
                            </p>
                            <div style="text-align: justify;">
                                <?php echo cutStr($post->article_content, 500);?>
                                <br>
                                <br>
                                <a href="#<?php echo $post->article_link;?>">Continue reading</a>
                            </div>
                        </div><!-- /.blog-post -->
                    <?php
                    }
                    ?>
                    <nav class="blog-pagination">
                        <a class="btn btn-outline-primary" href="#">Older</a>
                        <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
                    </nav>
                </div>
                <!-- /.blog-main -->
            <?php
            }
            ?>
            <aside class="col-md-4 blog-sidebar">
                <div class="p-3 mb-3 bg-light rounded">
                    <h4 class="font-italic">About</h4>
                    <p class="mb-0">Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
                </div>

                <?php
                if ($ARCHIVES) {
                    echo '<div class="p-3">
                            <h4 class="font-italic">Archives</h4>
                                <ol class="list-unstyled mb-0">';
                    foreach ($ARCHIVES as $a) {
                        echo '<li><a href="#">'.toMonth($a->archive_month).' '.$a->archive_year.' ('.$a->count_post.')</a></li>';
                    }

                    echo '</ol>
                        </div>';
                }
                ?>

                <div class="p-3">
                    <h4 class="font-italic">Links</h4>
                    <ol class="list-unstyled">
                        <li><a href="#">GitHub</a></li>
                        <li><a href="#">Twitter</a></li>
                        <li><a href="#">Facebook</a></li>
                    </ol>
                </div>
            </aside><!-- /.blog-sidebar -->

        </div><!-- /.row -->

    </main><!-- /.container -->

    <footer class="blog-footer">
        <p>Blog template built for <a href="https://getbootstrap.com/">Bootstrap</a> by <a href="https://twitter.com/mdo">@mdo</a>.</p>
        <p>
            <a href="#">Back to top</a>
        </p>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="<?php echo $TEMPLATE_DIR;?>/js/jquery-slim.min.js"><\/script>')</script>
    <script src="<?php echo $TEMPLATE_DIR;?>/js/popper.min.js"></script>
    <script src="<?php echo $TEMPLATE_DIR;?>/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
