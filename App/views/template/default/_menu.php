<?php
/* Template Menu*/
?>
<ul class="sidebar-menu" data-widget="tree">
    <li class="header">MAIN NAVIGATION</li>
    <li>
        <a href="<?php echo base_url('view/home');?>">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
        </a>
    </li>
    <li>
        <a href="#" onclick="loadContent(base_url + 'view/_profile'); return false;">
            <i class="fa fa-th"></i> <span>Data Profile</span>
            <span class="pull-right-container">
                <small class="label pull-right bg-red">*</small>
            </span>
        </a>
    </li>
    <li>
        <a href="#" onclick="loadContent(base_url + 'view/_konfirmasi_pembayaran'); return false;">
            <i class="fa fa-check"></i> <span>Konfirmasi Pembayaran</span>
        </a>
    </li>
    <li>
        <a href="#" onclick="loadContent(base_url + 'view/_download'); return false;">
            <i class="fa fa-download"></i> <span>Download</span>
        </a>
    </li>
</ul>