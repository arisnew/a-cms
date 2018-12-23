<!DOCTYPE html>
<html class="no-js">
<head>


    <!-- Meta info -->
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo getSetByVar('WEB_NAME')?> - <?php echo getSetByVar('TAG_WEB')?></title>
    <meta content="" name="description">
    <meta name="author" content="">
    <meta name="format-detection" content="">
    <link rel="shortcut icon" href="<?php echo getSetByVar('ICON_LOGO')?>" type="image/x-icon">

    <!-- Styles -->
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600' rel='stylesheet' type='text/css'>
    <link href="<?php echo base_url('asset/cms/gallery/')?>styles/main.css" rel="stylesheet" media="screen, print" type="text/css">
    <script src="<?php echo base_url('asset/cms/gallery/')?>lib/modernizr-2.6.2.js"></script>
</head>
<body>
    <div id="container" style="left: 0px;">
        <section id="content">
            
<header>
    <div id="pfd" style="max-height:50px" align="center">
        <a href="<?php echo base_url('cms')?>">
           <img src="<?php echo getSetByVar('HEADER_GALERY')?>" alt="<?php echo getSetByVar('WEB_NAME')?>">
        </a>
    </div>
    <div id="preamble" class="home">
        <div class="preamble">
        <?php
        $setting = $this->model->getList(array('table'=>'v_cms_setting','where'=>array('var_set'=>'HEADER_GALERY')));
        ?>
	<h1><?php echo $setting->description; ?></h1>
	<p class="em" style="display: none;">
		If you are interested in contributing to this site and have something you would like to share by writing an article or offering freebies, please don’t hesitate to <a href="nurdiansyah.pds@gmail.com">write me an email</a></p>
	<a class="read-more" href="#">Read more +</a></div>
<p>&nbsp;
	</p>

    </div>
</header>
<div id="our-work">
    <?php
        $galeries = $this->model->getList(array('table'=>'v_cms_gallery','where'=>array('publish'=>1)));
    ?>
    <ul>
     <?php
        if($galeries){
            foreach($galeries as $galery){
                echo '<li><a href="project-detail-page.html"><img src='.base_url('asset/files/galery/'.$galery->img).' alt='.$galery->caption.'><div class="overlay"><summary><h2>'.$galery->gallery_name.'</h2><h3>'.$galery->description.'</h3></summary></div></a></li>';
            }
        }
    ?>
<li><a href="project-detail-page.html"><img src="<?php echo base_url('asset/cms/gallery/')?>images/work/project-2.jpg" alt="Pyaari"><div class="overlay"><summary><h2>Chaosina</h2><h3>Identity, Website &amp; Photography</h3></summary><div class="loves"><span>22</span></div></div></a></li>
<li><a href="project-detail-page.html"><img src="<?php echo base_url('asset/cms/gallery/')?>images/work/project-3.jpg" alt="Pyaari"><div class="overlay"><summary><h2>198seven</h2><h3>Website &amp; Brandind</h3></summary><div class="loves"><span>12</span></div></div></a></li>
<li><a href="project-detail-page.html"><img src="<?php echo base_url('asset/cms/gallery/')?>images/work/project-4.jpg" alt="Pyaari"><div class="overlay"><summary><h2>Illustration</h2><h3>Pencil work, Adobe illustrator</h3></summary><div class="loves"><span>77</span></div></div></a></li>
<li><a href="project-detail-page.html"><img src="<?php echo base_url('asset/cms/gallery/')?>images/work/project-5.jpg" alt="Pyaari"><div class="overlay"><summary><h2>Chaosina</h2><h3>Identity, Website &amp; Photography</h3></summary><div class="loves"><span>22</span></div></div></a></li>
<li><a href="project-detail-page.html"><img src="<?php echo base_url('asset/cms/gallery/')?>images/work/project-7.jpg" alt="Pyaari"><div class="overlay"><summary><h2>198seven</h2><h3>Website &amp; Brandind</h3></summary><div class="loves"><span>12</span></div></div></a></li><br>
<li><a href="project-detail-page.html"><img src="<?php echo base_url('asset/cms/gallery/')?>images/work/project-8.jpg" alt="Pyaari"><div class="overlay"><summary><h2>Illustration</h2><h3>Pencil work, Adobe illustrator</h3></summary><div class="loves"><span>77</span></div></div></a></li>
<li><a href="project-detail-page.html"><img src="<?php echo base_url('asset/cms/gallery/')?>images/work/project-9.jpg" alt="Pyaari"><div class="overlay"><summary><h2>Chaosina</h2><h3>Identity, Website &amp; Photography</h3></summary><div class="loves"><span>22</span></div></div></a></li>
<li><a href="project-detail-page.html"><img src="<?php echo base_url('asset/cms/gallery/')?>images/work/project-10.jpg" alt="Pyaari"><div class="overlay"><summary><h2>198seven</h2><h3>Website &amp; Brandind</h3></summary><div class="loves"><span>12</span></div></div></a></li>
<li><a href="project-detail-page.html"><img src="<?php echo base_url('asset/cms/gallery/')?>images/work/project-11.jpg" alt="Pyaari"><div class="overlay"><summary><h2>Chaosina</h2><h3>Identity, Website &amp; Photography</h3></summary><div class="loves"><span>22</span></div></div></a></li>
<li><a href="project-detail-page.html"><img src="<?php echo base_url('asset/cms/gallery/')?>images/work/project-6.jpg" alt="Pyaari"><div class="overlay"><summary><h2>198seven</h2><h3>Website &amp; Brandind</h3></summary><div class="loves"><span>12</span></div></div></a></li>

</ul>
</div>
</section>

       <footer id="msf">
            <div class="wrapper">
                <ul id="lets-be-social">
                    <li>
                        <a href="https://twitter.com/198sevenblog" rel="external" target="_blank" title="Follow 198seven on Twitter">Twitter.</a>
                    </li>
                    <li>
                        <a href="https://www.facebook.com/198sevenblog" rel="external" target="_blank" title="Be 198seven Facebook friend">Facebook.</a>
                    </li>
                    <li>
                        <a href="http://www.pinterest.com/198seven" rel="external" target="_blank" title="My Pinterest pins">Pinterest.</a>
                    </li>
                </ul>                
            </div><!-- wrapper -->
        </footer><!-- footer -->
    </div><!-- container -->
        
       
    <div id="no-script">
        <div>
            <p>
                The Pyaari website is fully responsive and requires Javascript.<br>
                Please <a href="http://enable-javascript.com/">enable javascript</a> to use this site without issue.</p>
        </div>
    </div><!-- no-script -->
    
    
    <script src="<?php echo base_url('asset/cms/gallery/')?>ajax/jquery-1.11.0.min.js"></script>
    <script src="<?php echo base_url('asset/cms/gallery/')?>scripts/pyaari-main.1.0.js"></script>
    <script src="<?php echo base_url('asset/cms/gallery/')?>scripts/pyaari-menu.1.0.js"></script>
    <script>
        $(document).ready(function () {
            PfdMenu._ctor();
        });
    </script>
    

    <script>
    	$(document).ready(function(){
	       ReadMore.init();
    	})
    </script>


</body>
</html>