<div class="breadcumb-area bg-img" style="background-image: url(<?php echo base_url('asset/cms/academy/')?>img/bg-img/breadcumb.jpg);">
    <div class="bradcumbContent">
        <h2>Alumni</h2>
    </div>
</div>
<section class="teachers-area section-padding-0-100">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-heading text-center mx-auto wow fadeInUp" data-wow-delay="300ms">
                    <!-- <span>The Best</span> -->
                    <h3>Alumni</h3>
                </div>
            </div>
        </div>

        <div class="row">
            <?php
            if ($alumnis) {
                foreach ($alumnis as $row) {
                    ?>
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="single-teachers-area text-center mb-100 wow fadeInUp" data-wow-delay="400ms">
                            <div class="teachers-thumbnail">
                                <img src="<?php echo $this->config->item('asset_cms') . $row->img;?>" alt="<?php echo $row->name;?>">
                            </div>
                            <div class="teachers-info mt-30">
                                <h5><?php echo $row->name;?></h5>
                                <span><?php echo $row->job;?> - <?php echo $row->company;?></span>
                            </div>
                        </div>
                    </div>
                    <?php
                }
            }
            ?>
        </div>
        <div class="academy-pagination-area wow fadeInUp" data-wow-delay="400ms">
            <!-- <div class="paging"> -->
                <?php echo $this->pagination->create_links(); ?><br />
                <span class="badge badge-info">Total : <?php echo $total_data;?> Data</span>
            <!-- </div> -->
        </div>
    </div>
</section>