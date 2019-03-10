<!-- ##### Breadcumb Area Start ##### -->
<div class="breadcumb-area bg-img" style="background-image: url(<?php echo base_url('asset/cms/academy/')?>img/bg-img/breadcumb.jpg);">
    <div class="bradcumbContent">
        <h2><?php echo $page->page_title;?></h2>
    </div>
</div>
<!-- ##### Breadcumb Area End ##### -->

<!-- ##### About Us Area Start ##### -->
<section class="about-us-area mt-50 section-padding-100">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-heading text-center mx-auto wow fadeInUp" data-wow-delay="300ms">
                    <span><!-- The Best --></span>
                    <?php echo ($page->img) ? '<img class="" src="'.$this->config->item('asset_cms').$page->img.'">' : '';
                    ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 wow fadeInUp" data-wow-delay="400ms">
            <?php echo $page->content;?>
            </div>
        </div>
    </div>
</section>
<!-- ##### About Us Area End ##### -->