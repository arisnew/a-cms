    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area">
        <div class="main-footer-area section-padding-100-0">
            <div class="container">
                <div class="row">
                    <!-- Footer Widget Area -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="footer-widget mb-100">
                            <div class="widget-title">
                                <a href="<?php echo site_url();?>">
                                    <img src="<?php echo $TEMPLATE_DIR;?>/img/core-img/logo-sttis-white.png" alt="">
                                    <!-- <?php echo $CMS->company_name;?> -->
                                </a>
                            </div>
                            <p>
                                <?php echo $CMS->web_tag;?>
                            </p>
                            <div class="footer-social-info">
                                <a href="<?php echo $CMS->account_facebook;?>"><i class="fa fa-facebook"></i></a>
                                <a href="<?php echo $CMS->account_twitter;?>"><i class="fa fa-twitter"></i></a>
                                <a href="<?php echo $CMS->account_google;?>"><i class="fa fa-google"></i></a>
                                <a href="<?php echo $CMS->account_instagram;?>"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- Footer Widget Area -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="footer-widget mb-100">
                            <div class="widget-title">
                                <h6>Usefull Links</h6>
                            </div>
                            <nav>
                                <ul class="useful-links">
                                    <li><a href="<?php echo base_url();?>">Home</a></li>
                                    <li><a href="<?php echo site_url('page/about');?>">About</a></li>
                                    <li><a href="<?php echo site_url('articles');?>">Articles</a></li>
                                    <li><a href="<?php echo site_url('alumni');?>">Alumni</a></li>
                                    <li><a href="http://siakad.sttiss.ac.id">SIAKAD</a></li>
                                    <li><a href="http://pmb.sttiss.ac.id">Pendaftaran</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <!-- Footer Widget Area -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="footer-widget mb-100">
                            <div class="widget-title">
                                <h6>Gallery</h6>
                            </div>
                            <div class="gallery-list d-flex justify-content-between flex-wrap">
                                <?php
                                if ($GALLERIES) {
                                    foreach ($GALLERIES as $row ) {
                                        echo '<a href="'.$this->config->item('asset_cms').$row->img.'" class="gallery-img" title="Gallery Image">
                                                <img src="'.$this->config->item('asset_cms') .'thumb/'.$row->img.'" alt="">
                                            </a>';
                                    }
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                    <!-- Footer Widget Area -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="footer-widget mb-100">
                            <div class="widget-title">
                                <h6>Contact</h6>
                            </div>
                            <div class="single-contact d-flex mb-30">
                                <i class="icon-placeholder"></i>
                                <p>
                                    <?php echo $CMS->company_address;?> <?php echo $CMS->company_address_2;?>
                                </p>
                            </div>
                            <div class="single-contact d-flex mb-30">
                                <i class="icon-telephone-1"></i>
                                <p><?php echo $CMS->company_phone;?></p>
                            </div>
                            <div class="single-contact d-flex">
                                <i class="icon-contract"></i>
                                <p><?php echo $CMS->company_email;?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom-footer-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;2019 <?php echo $CMS->web_name;?> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ##### Footer Area Start ##### -->

    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="<?php echo $TEMPLATE_DIR;?>/js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="<?php echo $TEMPLATE_DIR;?>/js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="<?php echo $TEMPLATE_DIR;?>/js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="<?php echo $TEMPLATE_DIR;?>/js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="<?php echo $TEMPLATE_DIR;?>/js/active.js"></script>
</body>

</html>